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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Pengaduan Depok</title>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /*IE and Edge*/
            scrollbar-width: none;  /*Firefox*/
        }

        /* width */
        ::-webkit-scrollbar {
          width: 0.4rem;
          height: 0.3rem
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #1D4ED8; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #1E3A9E; 
        }
        
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

    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between gap-6">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <img src="{{asset('/img/logo_pede_nobg.png')}}" alt="" class="w-24  ">
            </div>

            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"id="example-collapse-navbar">
                @guest

                @else
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a href="{{Route('profile')}}" class="text-white mr-2 text-xs">hello, <span class=" hover:underline">{{Auth::user()->name}}</span></a>

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
    {{-- main --}}
    <main>
        <div class="relative pt-2 pb-32 flex content-center items-center justify-center"
            style="min-height: 40vh; max-height: 45vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("{{asset('img/depok.png')}}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-40 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        @guest
        <div class="pb-20 bg-blue-900 -mt-20 h-[55rem] lg:h-[25rem]" >
        @endguest
        <div class="pb-20 bg-blue-900 -mt-20 h-[65rem] lg:h-[40rem]" >
            <div class="lg:container mx-auto px-6 lg:px-2">
                <div class="flex-row lg:flex relative">

                    <div class=" w-full lg:w-7/12 container mx-auto h-96">
                        <div class="flex flex-wrap justify-center" style="min-height:30rem;">
                            <div class="w-full px-4 ">
                                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-50 h-full xs:h-auto">
                                    <div class="flex-auto p-5 lg:p-10 py-auto">
                                        @guest
                                        <div class="mt-10 md:mt-32 w-full mx-auto">
                                            <h4 class="text-3xl font-semiboxld text-center">Kamu harus masuk untuk bisa melakukan pengaduan</h4>
                                            <div class="mx-auto flex justify-center gap-3 mt-10">
                                                <a class="bg-slate-200 py-2 px-4 rounded border border-spacing-0.5"
                                                    href="{{route('login')}}"> login </a>
                                                <a class="bg-slate-200 py-2 px-4 rounded border border-spacing-0.5"
                                                    href="{{route('register')}}"> Register </a>
                                            </div>
                                            <div class="text-center mt-6">
                                                <h1 class="text-lg md:text-3xl font-semibold">Disclaimer</h1>
                                                <p class="text-sm">This website is only a work for school assignments, if you want to submit a complaint, the Depok City Communication and Information Service (Diskominfo) provides services in the form of SMS Center 0811-1631-500 or Call Center 0811-1232-222</p>
                                            </div>
                                        </div>
                                        @else
                                        <div class="text-center">
                                            <h4 class="text-xl font-semibold text-center">Pengaduan</h4>
                                            <p class="leading-relaxed mb-4 text-gray-600 text-lg">
                                                Sampaikan laporan mu kepada kami
                                            </p>
                                        </div>
                                        <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                                            action="{{route('pengaduan.post')}}">
                                            @csrf
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">judul laporan</label>
                                                <input name="judul" type="text"
                                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                                    placeholder="Judul laporan"
                                                    style="transition: all 0.15s ease 0s;" />
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">isi laporan</label>
                                                <textarea name="isi" rows="3" cols="80"
                                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                                    placeholder="Tulis Laporan anda disini. Format: penjelasan dan lokasi secara spesifik"></textarea>
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">Alamat Kejadian</label>
                                                <input name="alamat" type="text"
                                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                                    placeholder="Tuliskan alamat tempat kejadian (opsional)">
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">kategori</label>
                                                <input name="category" type="text"
                                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                                    placeholder="Kategori">
                                            </div>
                                            <div class="relative w-full mb-4 ">
                                                <label for="" class="text-xs">tanggal kejadian</label>
                                                <input id="datePickerId" name="pengaduan_date" type="date"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadwow focus:outline-none focus:ring w-full"
                                                    placeholder="tanggalkejadian">
                                            </div>
                                            <div class="relative w-full mb-1 flex">
                                                <input accept="image/*" name="image[]" id="imageInput" type="file" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadwow focus:outline-none focus:ring w-3/5" name="images[]" placeholder="bukti foto" multiple>
                                                <img id="img" src="#" alt="" class="mx-5 max-h-20" />
                                            </div>

                                            <div class="switch-field mt-8">
                                                <input type="radio" id="radio-one" name="is_public" value="1" checked />
                                                <label for="radio-one">Public </label>
                                                <input type="radio" id="radio-two" name="is_public" value="0" />
                                                <label for="radio-two"> Secret</label>
                                            </div>
                                            <div class="text-center mt-2">
                                                <button
                                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                    type="submit" style="transition: all 0.15s ease 0s;">
                                                    Kirim laporan
                                                </button>
                                            </div>
                                        </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 lg:pt-12 w-full lg:w-6/12 px-4 text-center lg:mt-0">
                        <div class="flex flex-col min-w-0 max-w-xl break-words bg-blue-50 w-full mb-8 mt-56 sm:mt-24 md:mt-20 lg:mt-0 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto h-96 align-middle">
                                <h6 class="text-xl font-semibold mb-5">Pengaduan Terbaru</h6>
                                {{-- <form id="lets_search" action="" style="" class="mx-auto mt-3"> --}}
                                    <input type="text" class="rounded w-full md:w-36 lg:w-48" id="Input" onkeyup="myFunction()" placeholder="Search for Pengaduan or Category" title="Type Pengaduan or Category" {{count($publicPengaduan) != 0 ? '' : 'disabled'}}>
                                    
                                    <div class="min-h-48 max-h-64 overflow-y-auto overflow-x-hidden mt-3 border-b-2 border-t-2">
                                        <table class="bg-transparent" id="Table">
                                            <tbody>
                                                @foreach($publicPengaduan as $p)
                                                <tr class="w-full">
                                                    <td class=" p-4 text-left w-10/12">
                                                        <div class="truncate flex">
                                                            <a href="{{route('pengaduan.detail', $p->id)}}">
                                                                <div class="text-sm font-semibold flex">
                                                                    @if($p->image)
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image mr-2" viewBox="0 0 16 16">
                                                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                                                      </svg>
                                                                    
                                                                    @endif 
                                                                    {{$p->judul}}
                                                                    <p class="hidden">{{$p->category}} {{$p->isi}} </p>
                                                                </div> 
                                                            </a>
                                                        </div> 
                                                        <div>
                                                            <p class="text-xs font-light text-slate-500">{{date('d F Y', strtotime($p->created_at))}}<span class="ml-6">by : {{$p->user->name}}</span></p>
                                                        </div>
                                                    </td>
                                                </tr>   
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- <table>
                                            <tbody>
                                                @foreach($publicPengaduan as $p)
                                                <tr>
                                                    <div class="flex p-5 bg-slate-50 w-full">
                                                        <div class="text-xl w-6/12 truncate">
                                                            {{$p->judul}}
                                                        </div>
                                                        <div class="text-sm ">
                                                            {{$p->pengaduan_date}}
                                                        </div>
                                                    </div>
                                                </tr>
                                                <hr class="border-1">
                                                @endforeach
                                            </tbody>
                                        </table> --}}
                                    </div>
                                    {{-- <input type="submit" value="send" name="send" id="send"> --}}
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section class="relative py-20 bg-white">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4 h-96 bg-top bg-cover">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg "
                            src="{{asset('img/depok2.png')}}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-2 shadow-lg rounded-full bg-blue-900">
                                <i class="fas fa-rocket text-lg"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Kami selalu siap melayanai</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                The extension comes with three pre-built pages to help you get
                                started faster. You can change the text and images and you're
                                good to go.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block p-2 uppercase rounded-full text-white bg-blue-900 mr-3"><i class="fas fa-edit"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">
                                                Tulis Laporan
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block p-2 uppercase rounded-full text-white bg-blue-900 mr-3"><i class="fas fa-share-square"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">
                                                Proses Verifikasi
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block p-2 uppercase rounded-full text-white bg-blue-900 mr-3"><i class="	fas fa-comment-alt"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">
                                                Proses Tindak Lanjut
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block p-2 uppercase rounded-full text-white bg-blue-900 mr-3"><i class="fas fa-check-circle"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-800">
                                                Selesai
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="h-20"  style="background-image: linear-gradient(white, rgb(30, 58, 138))"></div>
        <section class="pt-12 pb-32 bg-blue-900">
            <div class="container mx-auto px-4">
                <p class="text-center text-white text-7xl font-semibold mb-4">{{count($publicPengaduan)}}</p>
                <p class="text-center text-white text-3xl">Jumlah Laporan Sekarang</p>
            </div>
        </section>

        {{-- <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Build something</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Put the potentially record low maximum sea ice extent tihs year
                            down to low ice. According to the National Oceanic and
                            Atmospheric Administration, Ted, Scambos.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-medal text-xl"></i>
                        </div>
                        <h6 class="text-xl mt-5 font-semibold text-white">
                            Excelent Services
                        </h6>
                        <p class="mt-2 mb-4 text-gray-500">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-poll text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">
                            Grow your market
                        </h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                    Complete this form and we will get back to you in 24 hours.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="full-name">Full Name</label><input type="text"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="message">Message</label><textarea rows="4" cols="80"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Type a message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>
    {{--  footer   --}}
    {{-- <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <img src="{{asset('img/logo_pede_nobg.png')}}" alt="" class="w-32 lg:mt-10 lg:ml-10">
                    
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2023 Pengaduan Depok by
                        <a href="https://www.instagram.com/fattanhbrz_" class="text-gray-600 hover:text-gray-900">Fattan Hibrizi</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

</body>
<script src="{{ asset('view/searchFilter.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
datePickerId.max = new Date().toISOString().split("T")[0];
</script>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

    imageInput.onchange = evt => {
        const [file] = imageInput.files
        if (file) {
            img.src = URL.createObjectURL(file)
        }
    }

</script>

</html>
