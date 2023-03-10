<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Pengaduan Depok</title>
    <style>
        .switch-field {
            display: flex;
            overflow: hidden;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            border: 0;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #e4e4e4;
            color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked+label {
            background-color: rgb(30, 58, 138);
            box-shadow: none;
            color: azure
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }

        /* This is just for CodePen. */

        .form {
            max-width: 600px;
            font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
            font-weight: normal;
            line-height: 1.625;
            margin: 8px auto;
            padding: 16px;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 8px;
        }

    </style>
</head>
<body class="text-gray-800 antialiased">
    <nav class="top-0 {{--absolute z-50--}} w-full flex flex-wrap items-center justify-between bg-slate-200 px-2 py-3 shadow">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between gap-6">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <img src="{{asset('/img/logo_pede_nobg.png')}}" alt="" class="w-24  ">
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                @guest
                @else
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">

                        <a class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                @endguest
            </div>
        </div>
    </nav>

    <div class="bg-blue-900 h-fit p-10 md:p-16 ">

        <button class="bg-white rounded-full p-2 mb-3">
            @guest
            <a href="{{route('index')}}" class="text-blue-900">
            @endguest
            @if(Auth::user()->role == 'public')
            <a href="{{route('pengaduan.index')}}" class="text-blue-900">   
                @elseif(Auth::user()->role == 'officer' || Auth::user()->role == 'admin')
                <a href="{{route('admin.all.list')}}" class="text-blue-900">   
            @endif
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/>
                </svg>
            </a>
        </button>

        <div class="w-full bg-white p-8 md:p-16 rounded mb-4">
            <p class="text-3xl mb-3 capitalize font-medium">{{$pengaduan->judul}}</p>
            <div class="flex mb-10 ">
                <P class="text-xs md:text-sm mr-5 font-light">by :{{$pengaduan->user->name}}</P>
                <p class="text-xs md:text-sm font-light">{{$pengaduan->created_at->format('l, d F Y')}}</p>
            </div>
            <p class="text-sm md:text-base font-light mb-2">Date : {{date('l, d F Y', strtotime($pengaduan->pengaduan_date))}}</p>
            <p class="text-lg mb-6">{{$pengaduan->isi}}</p>
        </div>   
        
        <div class="w-full bg-white px-8 md:px-16 py-5 rounded mb-4">
            <p class="text-lg mb-4">Galeri</p>
            <div class="overflow-x-scroll px-2">
                <div class="flex gap-4 ">
                    @forelse($image->where('pengaduan_id', $pengaduan->id) as $key) 
                    <div class="card">
                        <img src="{{asset('image/'. $key->image)}}" alt="" class="max-h-56 max-w-48 rounded-lg hover:scale-125">  
                        <button class="text-white text-xs bg-blue-900 px-2 py-1 rounded mt-1"><a href="{{asset('image/'. $key->image)}}" target="_blank">see..</a></button>
                    </div>
                    @empty                     
                    @endforelse
                </div>
            </div>
        </div>

        <p class="text-xl mb-4 text-white font-medium">Tanggapan</p>
        @forelse($tanggapan as $item)
        <div class="w-full bg-white px-8 md:px-16 py-5 rounded mb-4">
            
            <p class="text-sm font-light mb-4">by : {{$item->user->name}}</p>
            <p class="text-sm md:text-base font-light mb-2">Date : {{date('l, d F Y', strtotime($item->tanggapan_date))}}</p>
            <p class="text-lg mb-6">{{$item->tanggapan}}</p>
            @forelse($image->where('tanggapan_id', $item->id) as $key) 
                    <div class="card">
                        <img src="{{asset('image/'. $key->image)}}" alt="" class="max-h-56 max-w-48 rounded-lg hover:scale-125">  
                        <button class="text-white text-xs bg-blue-900 px-2 py-1 rounded mt-1"><a href="{{asset('image/'. $key->image)}}" target="_blank">see..</a></button>
                    </div>
            @empty
            @endforelse   
                
        </div>
        @empty
        @endforelse
    </div>
</body>