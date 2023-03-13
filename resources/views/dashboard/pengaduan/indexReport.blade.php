@extends('layouts.app')

@section('content')
<div class="relative md:ml-52 bg-blueGray-50">
    <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold">List Pengaduan</a>
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
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg">
                    <p class="ml-5 mt-2">status</p>
                    <div class="flex mx-5 my-1 border-2 w-fit rounded">
                        <div class="p-1 pr-2 border-r-2 bg-blue-500 text-white rounded-sm">
                            Report
                        </div>
                        <a href="{{Route('admin.all.list.verified')}}">
                            <div class="p-1 pr-2 border-r-2">
                                Verified
                            </div>
                        </a>
                        <a href="{{Route('admin.all.list.replied')}}">
                            <div class="p-1 pr-2">
                                Replied
                            </div>
                        </a>
                    </div>
                    <input type="text" class="rounded w-full md:w-48 lg:w-56  ml-5 my-3.5  " id="Input" onkeyup="myFunctionPengaduan()" placeholder="Search for Pengaduan" title="Type pengaduan or name or category" {{$pengaduan->count() != 0 ? '' : 'disabled'}}>

                    <div class="block w-full overflow-x-auto rounded-lg px-2">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left w-1/12">
                                        Status
                                    </th>
                                    <th
                                        class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left w-5/12">
                                        Judul
                                    </th>
                                    <th
                                        class=" bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left w-2/12">
                                        Pelapor
                                    </th>
                                    <th
                                        class="px-5 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left w-2/12">
                                        Date
                                    </th>
                                    <th
                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    {{-- @if ($pengaduan) --}}
                    <div class="block w-full overflow-x-auto overflow-y-scroll max-h-[30rem] rounded-lg p-2">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse" id="Table">
                            <div>
                                <tbody class="overflow-y-scroll">
                                    @foreach ($pengaduan as $item)
                                    <tr class="">
                                        <td class="border-t-2 pl-4 align-middle text-sm whitespace-nowrap py-3 text-red-500 font-medium w-1/12">
                                            Report
                                        </td>

                                        <td class="border-t-2 pl-2 align-middle text-sm whitespace-nowrap py-3 font-mediumtext-left w-5/12 truncate">
                                            {{$item->judul}} <p class="hidden">{{$item->isi}}{{$item->user->name}}{{$item->category}}</p>
                                        </td>

                                        <td class="border-t-2 pr-4 align-middle text-sm whitespace-nowrap py-3 text-left w-2/12">
                                            {{$item->user->name}}
                                        </td>
                                        <td class="border-t-2 pl-6 align-middle text-sm whitespace-nowrap py-3 text-left w-2/12 ">
                                            {{date('l, d F Y', strtotime($item->created_at))}}
                                        </td>
                                        <td class="border-t-2 px-6 align-middle text-sm whitespace-nowrap py-3 text-left flex gap-2">
                                            <button type="button" class="bg-blue-900 p-2 text-white rounded" data-te-toggle="modal" data-te-target="#verificationModal-{{$item->id}}" data-te-ripple-init data-te-ripple-color="light" title="Verification"><i class="fas fa-check-circle px-1 text-sm"></i></button>

                                            <a href="{{Route('pengaduan.detil', $item->id)}}"
                                                class="bg-blue-900 p-2 text-white rounded" title="See detail"><i
                                                    class="fas fa-eye text-sm"></i></a>
                                        </td>
                                    </tr>


                                    <div data-te-modal-init
                                        class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                        id="verificationModal-{{$item->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
                                        <div data-te-modal-dialog-ref
                                            class="pointer-events-none relative h-[calc(90%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
                                            <div
                                                class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                                                <div
                                                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 ">
                                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 "
                                                        id="exampleModalScrollableLabel">
                                                        Pengaduan
                                                    </h5>
                                                    <button type="button"
                                                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                        data-te-modal-dismiss aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="h-6 w-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="relative overflow-y-auto p-4">
                                                    <div class="w-full bg-white p-4 rounded mb-4">
                                                        <p class="text-3xl mb-3 capitalize font-medium">{{$item->judul}}
                                                        </p>
                                                        <div class="flex mb-10 ">
                                                            <P class="text-xs md:text-sm mr-5 font-light">by
                                                                :{{$item->user->name}}</P>
                                                            <p class="text-xs md:text-sm font-light">
                                                                {{$item->created_at->format('l, d F Y')}}</p>
                                                        </div>
                                                        <p class="text-sm md:text-base font-light mb-2">Date :
                                                            {{date('l, d F Y', strtotime($item->pengaduan_date))}}</p>
                                                        <p class="text-lg mb-4">{{$item->isi}}</p>
                                                    </div>
                                                    <div class="w-full bg-white px-2 py-2 rounded">
                                                        <div class="overflow-x-auto px-2">
                                                            <div class="flex gap-6 ">
                                                                @forelse($image->where('pengaduan_id', $item->id) as $key)
                                                                <div class="card">
                                                                    <img src="{{asset('image/'. $key->image)}}" alt=""
                                                                        class="max-h-56 max-w-48 rounded-lg hover:scale-125">
                                                                    <button
                                                                        class="text-white text-xs bg-blue-900 px-2 py-1 rounded mt-1"><a
                                                                            href="{{asset('image/'. $key->image)}}"
                                                                            target="_blank">see..</a></button>
                                                                </div>
                                                                @empty
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4">
                                                    <button type="button"
                                                        class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200 "
                                                        data-te-modal-dismiss data-te-ripple-init
                                                        data-te-ripple-color="light">
                                                        Close
                                                    </button>
                                                    <form action="{{Route('pengaduan.verification',$item->id)}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <button type="submit"
                                                            class="ml-1 inline-block rounded bg-blue-900 text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">Verified</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </tbody>
                            </div>
                        </table>
                    </div>
                    {{-- @endif --}}
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

@section('js')
<script src="{{asset('view/searchFilter.js')}}"></script>
@endsection
