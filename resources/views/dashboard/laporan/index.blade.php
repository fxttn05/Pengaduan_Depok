@extends('layouts.app')

@section('content')
<div class="relative md:ml-52 bg-blueGray-50">
    <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold">Laporan Bulanan</a>
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                <p class="text-white mr-4 text-sm">halo, {{Auth::user()->name}}</p> 
                <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                            <img
                                alt="..." class="w-full rounded-full align-middle border-none shadow-lg h-full"
                                src="{{asset('img/profile_default.png')}}" />
                            </span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-dropdown">
                    
                    {{-- <div class="h-0 my-2 border border-solid border-blueGray-100"></div> --}}
                    
                    <a class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    
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
                <div class="w-full bg-white p-8 rounded mb-4 relative border-2">
                    <form action="{{ route('admin.laporan.get.laporan') }}" method="POST">
                        @csrf
                        <div class="row gx-4 gx-lg-5 h-100 align-items-center">
                            <div class="card-header mb-5">
                                Cari Berdasarkan Tanggal
                            </div>
                            <div class="flex gap-4 ">
                                <div class="rounded">
                                    <input type="date" name="from" class="rounded-lg" placeholder="Tanggal Awal" id="datePickerId">
                                </div>
                                <div class="">
                                    <input type="date" name="to" class="rounded-lg" placeholder="Tanggal Akhir" id="datePickerId">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-900 p-2 text-white mt-4 rounded">Cari Laporan</button>
                    </form>
                </div>
                <div class="w-full bg-white px-8 pt-4 pb-8 rounded mb-4 relative border-2">
                    <div class="car-header mt-5">
                        <div class="float-right">
                            @if($pengaduan ?? '')
                                <a href="{{ route('admin.laporan.cetak.laporan', ['from' => $from, 'to' => $to]) }}" class="bg-blue-900 p-3 rounded-md text-white">EXPORT PDF</a>
                            @endif
                        </div>
                    </div>
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
                                    @if($pengaduan ?? '')
                                    @foreach($pengaduan as $item)
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
                                        <td class="border-t-2 px-6 align-middle text-sm whitespace-nowrap py-3 text-left w-2/12">
                                            <a href="{{Route('pengaduan.detil', $item->id)}}"
                                                class="bg-blue-900 p-2 text-white rounded" title="See detail"><i
                                                    class="fas fa-eye text-sm"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <p class="text-base text-center ca">TIDAK ADA DATA</p>
                                    @endif
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    datePickerId.max = new Date().toISOString().split("T")[0];
</script>
@endsection