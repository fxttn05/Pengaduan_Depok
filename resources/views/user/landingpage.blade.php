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

.switch-field input:checked + label {
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
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                @guest
                @else
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        
                        <a  class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>

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
        <div class="relative pt-2 pb-32 flex content-center items-center justify-center" style="min-height: 40vh; max-height: 45vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{asset('img/depok.png')}}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-40 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        
        <div class="pb-20 bg-blue-900 -mt-20" style="height: 50rem; ">
            <div class="lg:container mx-auto px-4 md:px-0">
                <div class="flex-row md:flex relative">

                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-blue-50 w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto h-96 align-middle">
                                <h6 class="text-xl font-semibold mb-5">Cari Pengaduan</h6>
                                <form id="lets_search" action="" style="" class="mx-auto mt-3">
                                    <input type="text" name="str" id="str" class="rounded w-80 md:w-36 lg:w-48 " placeholder="Cari Pengaduan">
                                    {{-- <input type="submit" value="send" name="send" id="send"> --}}
                                  </form>
                            </div>
                        </div>
                    </div>

                    <div class=" w-full md:w-8/12 container mx-auto h-96">
                        <div class="flex flex-wrap justify-center" style="min-height:30rem;">
                            <div class="w-full px-4 ">
                                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-50 h-5/6 md:h-full">
                                    <div class="flex-auto p-5 lg:p-10 py-auto">
                                        @guest
                                        <div class="mt-32 w-full mx-auto">   
                                            <h4 class="text-3xl font-semiboxld text-center">If you want to continue, you must login or register</h4>
                                            <div class="mx-auto flex justify-center gap-3 mt-10">
                                                <a class="bg-slate-200 py-2 px-4 rounded border border-spacing-0.5" href="{{route('login')}}"> login </a>
                                                <button class="bg-slate-200 py-2 px-4 rounded border border-spacing-0.5" href="{{route('register')}}"> Register </button>
                                            </div>
                                        </div>
                                        @else
                                        <div class="text-center">
                                            <h4 class="text-xl font-semibold text-center">Pengaduan</h4>
                                            <p class="leading-relaxed mb-4 text-gray-600 text-lg">
                                                Sampaikan laporan mu kepada kami
                                            </p>
                                        </div>
                                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('pengaduan.post')}}">
                                            @csrf
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">judul laporan</label>
                                                <input name="judul" type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Judul laporan" style="transition: all 0.15s ease 0s;" />
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">isi laporan</label>
                                                <textarea name="isi" rows="3" cols="80"class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"placeholder="Tulis Laporan anda disini..."></textarea>
                                            </div>
                                            <div class="relative w-full mb-1">
                                                <label for="" class="text-xs">kategori</label>
                                                <input name="category" type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Kategori">
                                            </div>
                                            <div class="relative w-full mb-4 ">
                                                <label for="" class="text-xs">tanggal kejadian</label>
                                                <input name="pengaduan_date" type="date" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadwow focus:outline-none focus:ring w-full" placeholder="tanggalkejadian">
                                            </div>
                                            <div class="relative w-full mb-1 flex">
                                                <input accept="image/*" name="image[]" id="imageInput" required type="file" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadwow focus:outline-none focus:ring w-3/5" name="images[]" placeholder="bukti foto" multiple>
                                                <img id="img" src="#" alt="" class="mx-5 max-h-20" /> 
                                            </div>
                                            <div class="switch-field mt-4">
                                                <input type="radio" id="radio-one" name="is_public" value="1" checked/>
                                                <label for="radio-one">Public</label>
                                                <input type="radio" id="radio-two" name="is_public" value="0" />
                                                <label for="radio-two">Private</label>
                                            </div>
                                            <div class="text-center mt-2">
                                                <button
                                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                    type="submit" style="transition: all 0.15s ease 0s;">
                                                    Send Message
                                                </button>
                                            </div>
                                        </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  
            </div>
        </div>
        {{-- <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">A growing company</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                The extension comes with three pre-built pages to help you get
                                started faster. You can change the text and images and you're
                                good to go.
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Carefully crafted components
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Amazing page examples</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Dynamic components</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            According to the National Oceanic and Atmospheric
                            Administration, Ted, Scambos, NSIDClead scentist, puts the
                            potentially record maximum.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-1-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Ryan Tompson</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Web Developer
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button><button
                                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-facebook-f"></i></button><button
                                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-2-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Romina Hadid</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Marketing Specialist
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button><button
                                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-3-800x800.jpg"
                                class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Alexa Smith</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    UI/UX Designer
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button><button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button><button
                                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-4-470x470.png"
                                class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Jenna Kardi</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Founder and CEO
                                </p>
                                <div class="mt-6">
                                    <button
                                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-dribbble"></i></button><button
                                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-google"></i></button><button
                                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-twitter"></i></button><button
                                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                        type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 relative block bg-gray-900">
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
        </section> 
        <section class="relative block py-24 lg:pt-0 bg-gray-900">
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
    {{--     --}}
    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6">
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
                    </div>
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
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                                </li>
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
                        Copyright © 2019 Tailwind Starter Kit by
                        <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Creative
                            Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
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
