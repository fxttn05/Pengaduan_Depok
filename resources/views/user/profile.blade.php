<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pengaduan Depok</title>
    
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /*IE and Edge*/
            scrollbar-width: none;
            /*Firefox*/
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

            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                @guest

                @else
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <p class="text-white mr-2 text-xs">hello, <span
                                class=" hover:underline">{{Auth::user()->name}}</span></p>

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

        <div class="pb-20 bg-blue-900 -mt-40 min-h-[35rem]">
            <div class="lg:container mx-auto px-1 lg:px-2">
                <div class="flex-row lg:flex relative">

                    <div class=" w-full container mx-auto h-fit">
                        <div class="flex flex-wrap justify-center min-h-[30rem] " style="">
                            <div class="w-full px-4 ">
                                <div class="relative flex-row lg:flex gap-6 min-w-0 w-full mb-6 shadow-lg rounded-lg bg-blue-50 h-full">
                                    <div class="flex-row lg:flex p-5 lg:p-10">
                                        <div class="w-full lg:w-5/12 mx-2 lg:mx-16">
                                            <div >
                                                <img alt="photo profile"
                                                    class="w-40 rounded-full align-middle border-none shadow-lg"
                                                    src="{{asset('img/profile_default.png')}}" />
                                                <div class="flex mt-4 w-full">
                                                    <p class=" text-xl text-center font-medium capitalize">
                                                        {{Auth::user()->name}}
                                                    </p>
                                                    <button type="button" class="focus:border-0 ml-2 mt-2" data-te-toggle="modal"
                                                        data-te-target="#editProfileModal" data-te-ripple-init
                                                        data-te-ripple-color="light" title="Edit profile">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-8 text-left">
                                                <p class=" text-sm font-normal ">Email : {{Auth::user()->email}}</p>
                                                <p class=" text-sm font-normal ">NIK : {{Auth::user()->nik}}</p>
                                                <p class=" text-sm font-normal ">No Telp :
                                                    {{Auth::user()->telp ? Auth::user()->telp : '    (Anda belum memasukkan nomor telepon)' }}
                                                </p>
                                            </div>
                                            <div class="mt-8 text-left">
                                                <p class="text-sm font-normal"> Laporan yang belum teverifikasi : {{count($pengaduanReport->where('user_id', Auth::id()))}}</p>
                                                <p class="text-sm font-normal"> Laporan teverifikasi : {{count($pengaduanVerified->where('user_id', Auth::id()))}}</p>
                                                <p class="text-sm font-normal"> Laporan ditanggapi : {{count($pengaduanReplied->where('user_id', Auth::id()))}}</p>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-7/12 mt-10 lg:mt-0 mr-0">
                                            <div class="ml-2 text-left max-w-[10rem]">
                                                <p class="flex mb-2">Pengaduan Saya <span class="bg-slate-300 p-1 rounded-full ml-2 text-xs">{{count($pengaduan->where('user_id', Auth::id()))}}</span></p>
                                                <hr class="border-2">
                                            </div>
                                            <div class="min-h-48 max-h-80 border-2 rounded-lg border-slate-200 overflow-y-auto overflow-x-hidden mt-2">
                                                <div class="pb-2">
                                                    <table class="bg-transparent" id="Table">
                                                        <tbody>
                                                            @foreach($pengaduan->where('user_id', Auth::id()) as $p)
                                                            <tr class="w-full">
                                                                <td class=" p-4 text-left w-10/12">
                                                                    <div class="truncate flex">
                                                                        <a href="{{route('pengaduan.detail', $p->id)}}">
                                                                            <div class="text-sm font-semibold flex">
                                                                                @if($p->image)
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-card-image mr-2"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                                                    <path
                                                                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                                                                </svg>
    
                                                                                @endif
                                                                                {{$p->judul}}
    
                                                                            </div>
                                                                            <div class="hidden">
                                                                                {{$p->category}}
                                                                            </div>
                                                                            <div class="hidden">
                                                                                {{$p->isi}}
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    @if($p->status == '1.report')
                                                                    <div>
                                                                        <p class="text-xs font-light text-slate-500">
                                                                            {{$p->created_at->format('d F Y')}}<span
                                                                                class="ml-6">status : Report</span></p>
                                                                    </div>
                                                                    @elseif($p->status == '2.verified')
                                                                    <div>
                                                                        <p class="text-xs font-light text-slate-500">
                                                                            {{$p->created_at->format('d F Y')}}<span
                                                                                class="ml-6">status : Verified</span></p>
                                                                    </div>
                                                                    @elseif($p->status == '3.replied')
                                                                    <div>
                                                                        <p class="text-xs font-light text-slate-500">
                                                                            {{$p->created_at->format('d F Y')}}<span
                                                                                class="ml-6">status : Done (replied) </span>
                                                                        </p>
                                                                    </div>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ml-2 mt-4">
                                                <a href="{{Route('index')}}" class="bg-white p-2 border-2">Kembali</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
    {{--  footer   --}}
    <footer class="relative bg-gray-300 pt-8 pb-6">
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
                    {{-- <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-twitter"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-dribbble"></i></button><button
                            class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div> --}}
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
                        <a href="https://www.instagram.com/fattanhbrz_" class="text-gray-600 hover:text-gray-900">Fattan
                            Hibrizi</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[800px]">
            <div
                class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 ">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 " id="exampleModalScrollableLabel">
                        Edit profile
                    </h5>
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="{{Route('profile.edit', Auth::id())}}" method="POST">
                    @csrf
                    @method('put')
                <div class="relative overflow-y-auto p-4">
                        <div class="flex gap-6">
                            <div class="relative w-1/2 mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Name</label>
                                <input id="name" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="type your name" required autocomplete="name" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                                @error('name')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="relative w-1/2 mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">NIK</label>
                                <input id="nik" type="text" name="nik" value="{{ Auth::user()->nik  }}" placeholder="type your NIK (sesuai KTP atau KK)" required autocomplete="nik" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('nik') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                                @error('nik')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Nomor Telepon</label>
                            <input type="text" placeholder="type new phone number" id="phone number" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('telp') is-invalid @enderror" name="telp" value="{{ Auth::user()->telp ? Auth::user()->telp : ''  }}" autocomplete="telp" style="transition: all 0.15s ease 0s;" />
                            @error('telp')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex gap-6 mb-3">
                            <div class="relative w-1/2 mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                <input type="email" id="email" placeholder="type new email ( use @ )" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus style="transition: all 0.15s ease 0s;" />
                                @error('email')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="relative w-1/2 mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                <input type="password" placeholder="type new password (min. 6 character)" id="password" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('password') is-invalid @enderror" name="password" value="{{ Auth::user()->password }}" required autocomplete="new-password" style="transition: all 0.15s ease 0s;" />
                                @error('password')
                                    <span class="text-xs text-red-500 mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200 "
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>

                        <button type="submit"
                            class="ml-1 inline-block rounded bg-blue-900 text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">Verified</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="{{ asset('view/searchFilter.js') }}"></script>
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
