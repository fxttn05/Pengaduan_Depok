<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Register | Pengaduan Depok</title>
</head>

<body class="text-gray-800 antialiased " style="background-image: url({{asset('/img/register_bg_2.png')}}); background-size: 100%; background-repeat: no-repeat;">
    <img src="{{asset('/img/logo_pede_nobg.png')}}" alt="" class="w-24 mx-auto mt-14">
    <div class="container mx-auto px-4 h-full mt-4">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-0">
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                            <p class="text-gray-800 text-xl font-bold">
                                Log in
                            </p>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="flex gap-6">
                                <div class="relative w-1/2 mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Name</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="type your name" required autocomplete="name" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                                    @error('name')
                                    <span class="text-xs text-red-500 mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="relative w-1/2 mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">NIK</label>
                                    <input id="nik" type="text" name="nik" value="{{ old('nik') }}" placeholder="type your NIK (sesuai KTP atau KK)" required autocomplete="nik" autofocus class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('nik') is-invalid @enderror" style="transition: all 0.15s ease 0s;" />
                                    @error('nik')
                                    <span class="text-xs text-red-500 mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                <input type="email" id="email" placeholder="type new email ( use @ )" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="transition: all 0.15s ease 0s;" />
                                @error('email')
                                <span class="text-xs text-red-500 mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="flex gap-6 mb-3">
                                <div class="relative w-1/2 mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                    <input type="password" placeholder="type new password (min. 6 character)" id="password" class="border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" style="transition: all 0.15s ease 0s;" />
                                    @error('password')
                                        <span class="text-xs text-red-500 mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="relative w-1/2 mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control border-0 px-3 py-3 placeholder-gray-800 placeholder-opacity-40 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('password') is-invalid @enderror" placeholder="confirm your password" style="transition: all 0.15s ease 0s;" />
                                    @error('password')
                                        <span class="text-xs text-red-500 mt-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="text-center">
                                <button class="bg-blue-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded  mr-1 mb-1 w-5/12 " type="submit" style="transition: all 0.15s ease 0s;">
                                    Register
                                </button>
                            </div>
                        </form>
                        
                        <div class="flex flex-wrap mt-2 px-16 mb-10">
                            <div class="w-1/2">
                                <a href="#pablo" class="text-gray-500"><small>Forgot password?</small></a>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="{{ route('login') }}" class="text-gray-500"><small>Log in your account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
    
    </script>
</body>

</html>


