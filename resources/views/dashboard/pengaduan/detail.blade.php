@extends('layouts.app')

@section('content')
<div class="relative md:ml-64 bg-blueGray-50">
    <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold">Memberi Tanggapan</a>
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
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
                    <p class="text-3xl mb-3 capitalize font-medium">{{$pengaduan->judul}}</p>
                    <div class="flex mb-10 ">
                        <P class="text-xs md:text-sm mr-5 font-light">by :{{$pengaduan->user->name}}</P>
                        <p class="text-xs md:text-sm font-light">{{$pengaduan->created_at->format('l, d F Y')}}</p>
                    </div>
                    <p class="text-sm md:text-base font-light mb-2">Date : {{date('l, d F Y', strtotime($pengaduan->pengaduan_date))}}</p>
                    <p class="text-lg mb-6">{{$pengaduan->isi}}</p>
                    <p class="text-xs">status : {{$pengaduan->status}}</p>
                </div>   
                
                <div class="w-full bg-white px-8 pt-4 pb-8 rounded mb-4 relative border-2">
                    <p class="text-lg mb-4">Galeri</p>
                    <div class="overflow-x-auto px-2">
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
        
                @forelse($tanggapan as $item)
                <p class="text-xl mb-4 font-medium">Tanggapan</p>
                <div class="w-full bg-white px-8 md:px-16 py-5 rounded mb-4 relative border-2">
                    
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
            
        </div>
        
    </div>
</div>

{{-- modal --}}
<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="confirmationModal" data-te-backdrop="static" data-te-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">
      <div data-te-modal-body-ref class="relative p-4 text-lg text-center mt-2">Apakah anda yakin?</div>
      <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 ">
        <button type="button" class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" onclick="document.getElementById('TanggapanTable').submit();" class="ml-1 inline-block rounded bg-blue-900 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">
          Yakin
        </button>
      </div>
    </div>
  </div>
</div>
{{-- end modal --}}
@endsection