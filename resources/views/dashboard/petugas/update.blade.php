@extends('layouts.app')

@section('content')
    <div class="relative md:ml-52 bg-blueGray-50">
    <nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold">EDIT DATA PETUGAS {{$petugas->name}}</a>
        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <p class="text-white mr-4 text-sm">halo, {{Auth::user()->name}}</p>
            <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                    <span
                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                        <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg h-full"
                            src="{{asset('img/profile_default.png')}}" />
                    </span>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;" id="user-dropdown">

                {{-- <div class="h-0 my-2 border border-solid border-blueGray-100"></div> --}}

                <a class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </ul>
    </div>
</nav>

<!-- Header -->
<div class="relative bg-blue-900 md:pt-32 pb-10 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <div>


        </div>
    </div>
</div>

<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg p-5">
                <form method="POST" action="{{ route('admin.petugas.update', $petugas->id) }}">
                    @csrf
                    @method('put')
                    <div class="flex gap-6">
                        <div class="relative w-1/2 mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Name</label>
                            <input id="name" type="text" name="name" value="{{ $petugas->name }}" placeholder="type name" required autocomplete="name" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                            @error('name')
                            <span class="text-xs text-red-500 mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="relative w-1/2 mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">NIK</label>
                            <input id="nik" type="text" name="nik" value="{{ $petugas->nik }}" placeholder="type NIK (sesuai KTP atau KK)" required autocomplete="nik" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('nik') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                            @error('nik')
                            <span class="text-xs text-red-500 mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"></label>
                        <input type="text" id="telp" placeholder="type new phone number" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" name="telp" value="{{ $petugas->telp }}" autocomplete="telp" autofocus style="transition: all 0.15s ease 0s;" />
                        @error('telp')
                        <span class="text-xs text-red-500 mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex gap-6">
                        <div class="relative w-1/2 mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                            <input type="email" id="email" placeholder="type new email ( use @ )" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" name="email" value="{{ $petugas->email }}" required autocomplete="email" autofocus style="transition: all 0.15s ease 0s;" />
                            @error('email')
                            <span class="text-xs text-red-500 mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="relative w-1/2 mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                            <input type="password" placeholder="type new password (min. 6 character)" id="password" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('password') is-invalid @enderror" name="password" value="{{ $petugas->password }}" required autocomplete="new-password" style="transition: all 0.15s ease 0s;" />
                            @error('password')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="text" name="role" hidden value="officer">
                    </div>


                    <div class="text-center">
                        <button class="bg-blue-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded  mr-1 mb-1 w-5/12 " type="submit" style="transition: all 0.15s ease 0s;">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    {{-- <div class="block py-4 pt-auto">
        <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-blueGray-200" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="javascript-date"></span>
                        <a href="https://www.creative-tim.com"
                            class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                            Creative Tim
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                    <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                        <li>
                            <a href="https://www.creative-tim.com"
                                class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/presentation"
                                class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com"
                                class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md"
                                class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</div>
</div>
@endsection