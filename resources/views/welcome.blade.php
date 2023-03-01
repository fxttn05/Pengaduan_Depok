<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
</head>
<body class="bg-body overflow-x-hidden dark:bg-dark-bg">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
  <!-- loader END -->
  <div>
    <aside x-data="{ open: false }" x-bind:class="open ? 'sidebar sidebar-mini' : 'sidebar'" class="dark:bg-dark-card bg-white">
        <div class="relative flex items-center justify-start mb-3 border-b dark:border-gray-700">
            <a href="/dashboard/index.html" class="flex px-5 py-4 mr-4 rtl:ml-4 rtl:mr-0 text-xl whitespace-nowraps ">
             <svg width="30" class="text-blue-500" viewBox="0 0 30 30" fill="blue" xmlns="http://www.w3.org/2000/svg">
              <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
              <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
              <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
              <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
            </svg>
            <svg width="30" class="text-blue-500" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
            </svg>
                <h4 id="sid1" class="sidebar-logo font-semibold dark:text-white">/</h4>
            </a>
            <div class="sidearrow absolute p-1 text-white bg-blue-500 shadow-md xl:-right-3 right-4 top-5 rounded-2xl" x-on:click="open = ! open" data-toggle="sidebar" data-active="true">
                    <i class="flex" x-bind:style="open ? 'transform:  rotate(180deg)' : ''">
                    <svg width="20" viewBox="0 0 24 24" class="rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body data-scrollbar">
                {{-- {{> partials/dashboard/vertical-nav }} --}}
        </div>
    
    </aside>
    <main class="main-content " x-data="{ data: true }">
      <div class="relative">
        <!--Nav Start-->
        <nav class="z-40 flex flex-wrap items-center justify-start py-2 bg-white dark:bg-dark-card">
            <div class="absolute justify-end flex-grow-0 hidden w-full bg-white top-12 px-7" id="navbar1">
              <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                <li class="nav-item dropdown" x-data="{ open: false }">
                  <button class="block p-2" type="button">
                    <img src="/assets/images/Flag/flag001.png" @click="open = ! open" class="max-w-full rounded-full"
                      alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                  </button>
                  <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-72" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div class="relative rounded-t-lg rounded-b-lg flex flex-col bg-white shadow-lg dark:bg-dark-card">
                      <div class="p-0 ">
                        <ul class="flex flex-col p-0 dark:text-gray-600">
                          <li class="inline-block dark:bg-dark-card dark:hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 rounded-t"><a class="flex items-center p-0"
                              href="#"><img src="/assets/images/Flag/flag-03.png" alt="img-flaf" class="w-full mr-2"
                                style="width: 15px;height: 15px;min-width: 15px;">Spanish</a></li>
                          <li class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700"><a class="flex items-center p-0" href="#"><img
                                src="/assets/images/Flag/flag-04.png" alt="img-flaf" class="w-full mr-2"
                                style="width: 15px;height: 15px;min-width: 15px;">Italian</a></li>
                          <li class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700"><a class="flex items-center p-0" href="#"><img
                                src="/assets/images/Flag/flag-02.png" alt="img-flaf" class="w-full mr-2"
                                style="width: 15px;height: 15px;min-width: 15px;">French</a></li>
                          <li class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700"><a class="flex items-center p-0" href="#"><img
                                src="/assets/images/Flag/flag-05.png" alt="img-flaf" class="w-full mr-2"
                                style="width: 15px;height: 15px;min-width: 15px;">German</a></li>
                          <li class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 rounded-b"><a class="flex items-center p-0"
                              href="#"><img src="/assets/images/Flag/flag-06.png" alt="img-flaf" class="w-full mr-2"
                                style="width: 15px;height: 15px;min-width: 15px;">Japanese</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown flex items-center" x-data="{ open: false }">
                  <a href="#" class="block p-2 group" @click="open = ! open">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="dark:text-white text-gray-600 hover:text-gray-700 group group-focus:text-gray-700">
                      <path
                        d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                        fill="currentColor"></path>
                      <path opacity="0.4"
                        d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                        fill="currentColor"></path>
                    </svg>
                    <span class="bg-danger dots"></span>
                  </a>
                  <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 r-40 " @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div
                      class="relative flex flex-col m-0 bg-white shadow-lg right-64 rounded-t-lg rounded-b-lg dark:bg-dark-card">
                      <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                        <div class="text-base text-left text-white">
                          <h5 class="mb-0 text-xl font-medium text-white">All Notifications</h5>
                        </div>
                      </div>
                      <div class="flex-auto p-0">
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                              src="/assets/images/shapes/01.png" alt="">
                            <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                              <h6 class="mb-0 text-base font-medium dark:text-gray-600">Emma Watson Bni</h6>
                              <div class="flex items-center justify-between">
                                <p class="mb-0 dark:text-gray-600">95 MB</p>
                                <small class="float-end font-size-12 dark:text-gray-600">Just Now</small>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                                src="/assets/images/shapes/02.png" alt="">
                            </div>
                            <div class="w-full ml-3 rtl:ml-0 rtl:mr- LR">
                              <h6 class="mb-0 text-base font-medium dark:text-gray-600">New customer is join</h6>
                              <div class="flex items-center justify-between">
                                <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                <small class="float-end font-size-12 dark:text-gray-600">5 days ago</small>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                          <div class="flex items-center">
                            <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                              src="/assets/images/shapes/03.png" alt="">
                            <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                              <h6 class="mb-0 text-base font-medium dark:text-gray-600">Two customer is left</h6>
                              <div class="flex items-center justify-between">
                                <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                <small class="float-end font-size-12 dark:text-gray-600">2 days ago</small>
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group-hover:bg-blue-200">
                          <div class="flex items-center">
                            <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full"
                              src="/assets/images/shapes/04.png" alt="">
                            <div class="w-full ml-3 rtl:ml-0 rtl:mr-3 LR">
                              <h6 class="mb-0 text-base font-medium dark:text-gray-600">New Mail from Fenny</h6>
                              <div class="flex items-center justify-between">
                                <p class="mb-0 dark:text-gray-600">Cyst Bni</p>
                                <small class="float-end font-size-12 dark:text-gray-600">3 days ago</small>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown flex items-center" x-data="{ open: false }">
                  <a href="#" class="block p-2 group" @click="open = !open">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="dark:text-white text-gray-600 hover:text-gray-700 group group-focus:text-gray-700">
                      <path opacity="0.4"
                        d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                        fill="currentColor"></path>
                      <path
                        d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                        fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 r-72" @click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <div
                      class="relative flex flex-col m-0 bg-white shadow-lg right-64 rounded-t-lg rounded-b-lg dark:text-gray-600 dark:bg-dark-card">
                      <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                        <div class="text-base text-left text-white">
                          <h5 class="mb-0 text-xl font-medium text-white">All Message</h5>
                        </div>
                      </div>
                      <div class="flex-auto p-0">
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                src="/assets/images/shapes/01.png" alt="">
                            </div>
                            <div class="ml-3 LR">
                              <h6 class="mb-0 text-base font-medium ">Bni Emma Watson</h6>
                              <small class="float-start font-size-12">13 Jun</small>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                src="/assets/images/shapes/02.png" alt="">
                            </div>
                            <div class="ml-3">
                              <h6 class="mb-0 text-base font-medium">Lorem Ipsum Watson</h6>
                              <small class="float-start font-size-12">20 Apr</small>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                src="/assets/images/shapes/03.png" alt="">
                            </div>
                            <div class="ml-3">
                              <h6 class="mb-0 text-base font-medium">Why do we use it ?</h6>
                              <small class="float-start font-size-12">30 Jun</small>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                src="/assets/images/shapes/04.png" alt="">
                            </div>
                            <div class="ml-3">
                              <h6 class="mb-0 text-base font-medium">Variations Passages</h6>
                              <small class="float-start font-size-12">12 Sep</small>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                          <div class="flex items-center">
                            <div class="">
                              <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                src="/assets/images/shapes/05.png" alt="">
                            </div>
                            <div class="ml-3">
                              <h6 class="mb-0 text-base font-medium">Lorem Ipsum generators</h6>
                              <small class="float-start font-size-12">5 Dec</small>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>y
                  </div>
                </li>
                <li class="nav-item dropdown" x-data="{ open: false }">
                  <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                    <img src="/assets/images/avatars/01.png" alt="User-Profile" class="max-w-full rounded-full "
                      height="50px" width="50px">
                    <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                      <h6 class="mb-0 text-base font-medium dark:text-gray-600 ">Austin Robertson</h6>
                      <p class="mb-0 caption-sub-title text-gray-500 dark:text-white">Marketing Administrator</p>
                    </div>
                  </a>
                  <ul x-show="open" class="absolute z-40 w-40 p-0 py-2 bg-white right-0"@click.outside="open = false"
                    x-transition:enter="transition ease-in duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-16"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-0">
                    <li><a
                        class="block w-full px-4 py-1 focus:bg-blue-500 focus:text-white font-normal text-gray-700 rounded-t whitespace-nowrap"
                        href="/dashboard/app/user-profile.html">Profile</a></li>
                    <li><a
                        class="block w-full px-4 py-1 focus:bg-blue-500 focus:text-white font-normal text-gray-700 whitespace-nowrap"
                        href="/dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a
                        class="block w-full px-4 py-1 pt-2 focus:bg-blue-500 focus:text-white font-normal text-gray-700 rounded-b whitespace-nowrap"
                        href="/dashboard/auth/sign-in.html">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="w-full px-7 ">
              <div class="relative flex items-center justify-between ">
                <div class="absolute right-0 flex items-center px-2 py-1 text-xl border border-gray-500 rounded lg:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="inline-flex items-center justify-center text-xl text-gray-500 rounded"
                    onclick="toggleNavbar('navbar1', 'cancel', 'mobileicon')" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block w-8 h-8" id="mobileicon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden w-6 h-6" id="cancel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="gray">
                      <path
                        d="M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z">
                      </path>
                    </svg>
                  </button>
                </div>
                <div class="flex items-center justify-start flex-1 lg:justify-center sm:items-stretch ">
                  <div class="flex items-center xl:hidden">
                    <div class="p-1 mr-4 rtl:mr-0 rtl:ml-4 text-white bg-blue-500 shadow-md top-5 rounded-2xl" data-toggle="sidebar"
                      data-active="true">
                      <i class="flex items-center">
                        <svg width="20px" height="20px" viewBox="0 0 24 24">
                          <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                          </path>
                        </svg>
                      </i>
                    </div>
                    <svg width="30" class="text-blue-500" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)"
                        fill="currentColor"></rect>
                      <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                        fill="currentColor"></rect>
                      <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)"
                        fill="currentColor"></rect>
                      <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)"
                        fill="currentColor"></rect>
                    </svg>
                    <a class="m-0 mb-0 ml-4 rtl:ml-0 rtl:mr-4 text-2xl font-semibold opacity-100;" href="#">
                      /
                    </a>
                  </div>
                  <div class="hidden xl:rounded xl:relative xl:flex xl:flex-wrap xl:items-stretch xl:border">
                    <span class="flex items-center px-4 py-2 text-base font-normal " id="search-input">
                      <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"></circle>
                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    <input type="search"
                      class="relative placeholder-gray-600 block px-4 py-2 text-base outline-none border focus:border-blue-400 font-medium"
                      placeholder="Search...">
                  </div>
          
          
                  <div class="relative xl:flex items-center text-gray-500 hidden dark:text-gray-600">
                    <svg class="w-5 h-5 absolute left-3 pointer-events-none" width="18" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></circle>
                      <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    </svg>
                    <input type="search"
                      class="dark:bg-dark-card focus:shadow-lg rounded pr-3 pl-10 py-2 border placeholder-gray-600 dark:border-gray-700 outline-none w-full focus:border-blue-500"
                      name="search" placeholder="Search..." autocomplete="off" aria-label="Search...">
                  </div>
          
                  <div class=" xl:flex-auto xl:w-full xl:mb-3 lg:w-2/4 lg:pr-3">
                    <div class="relative flex items-stretch w-full mb-3">
                      <span
                        class="flex items-center px-4 py-2 text-base font-normal border-t border-b border-l border-collapse rounded whitespace-nowrap"
                        id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg></span>
                      <input type="text"
                        class="block w-2/5 px-4 py-2 text-base border border-collapse outline-none focus:border-blue-400"
                        aria-label="Username" aria-describedby="basic-addon1" placeholder='Search...'>
                    </div>
                  </div>
                  <div class="hidden lg:flex lg:flex-grow transition-all duration-700 ease-in-out">
                    <ul class="flex mb-2 ml-auto rtl:ml-0 rtl:mr-auto lg:mb-0">
                      <li class="nav-item dropdown" x-data="{ open: false }">
                        <button class="block p-2" type="button">
                          <img src="/assets/images/Flag/flag001.png" @click="open = ! open" class="max-w-full rounded-full"
                            alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                          <span class="bg-primary"></span>
                        </button>
                        <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-72  " @click.outside="open = false"
                          x-transition:enter="transition ease-in duration-500"
                          x-transition:enter-start="opacity-0 transform translate-y-16"
                          x-transition:enter-end="opacity-100 transform translate-y-0"
                          x-transition:leave="transition ease-out duration-500"
                          x-transition:leave-start="opacity-100 transform translate-y-0"
                          x-transition:leave-end="opacity-0 transform translate-y-0">
                          <div
                            class="relative flex flex-col bg-white rounded-t-lg rounded-b-lg shadow-lg right-60 dark:bg-dark-card">
                            <div class="p-0 ">
                              <ul class="flex flex-col p-0">
                                <li
                                  class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 rounded-t text-gray-500 text-lg">
                                  <a class="flex p-0" href="#"><img src="/assets/images/Flag/flag-03.png" alt="img-flag"
                                      class="w-full mr-2 rtl:mr-0 rtl:ml-2 mt-2" style="width: 15px;height: 15px;min-width: 15px;">Spanish</a></li>
                                <li
                                  class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 text-gray-500 text-lg">
                                  <a class="flex p-0" href="#"><img src="/assets/images/Flag/flag-04.png" alt="img-flag"
                                      class="w-full mr-2 rtl:mr-0 rtl:ml-2 mt-2" style="width: 15px;height: 15px;min-width: 15px;">Italian</a></li>
                                <li
                                  class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 text-gray-500 text-lg">
                                  <a class="flex p-0" href="#"><img src="/assets/images/Flag/flag-02.png" alt="img-flag"
                                      class="w-full mr-2 rtl:mr-0 rtl:ml-2 mt-2" style="width: 15px;height: 15px;min-width: 15px;">French</a></li>
                                <li
                                  class="inline-block hover:bg-indigo-100 w-full px-5 py-3 border-b dark:border-gray-700 text-gray-500 text-lg">
                                  <a class="flex p-0" href="#"><img src="/assets/images/Flag/flag-05.png" alt="img-flag"
                                      class="w-full mr-2 rtl:mr-0 rtl:ml-2 mt-2" style="width: 15px;height: 15px;min-width: 15px;">German</a></li>
                                <li class="inline-block hover:bg-indigo-100 w-full px-5 py-3 text-gray-500 text-lg rounded-b"><a
                                    class="flex p-0" href="#"><img src="/assets/images/Flag/flag-06.png" alt="img-flag"
                                      class="w-full mr-2 rtl:mr-0 rtl:ml-2 mt-2" style="width: 15px;height: 15px;min-width: 15px;">Japanese</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item dropdown flex items-center" x-data="{ open: false }">
                        <a href="#" class="block p-2 group" @click="open = ! open">
                          <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="dark:text-white text-gray-600 hover:text-gray-700 group group-focus:text-gray-700">
                            <path
                              d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                              fill="currentColor"></path>
                            <path opacity="0.4"
                              d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                              fill="currentColor"></path>
                          </svg>
                          <span class="bg-danger dots"></span>
                        </a>
                        <div x-show="open" class="absolute z-40 p-0 top-14 w-80 right-80" @click.outside="open = false"
                          x-transition:enter="transition ease-in duration-500"
                          x-transition:enter-start="opacity-0 transform translate-y-16"
                          x-transition:enter-end="opacity-100 transform translate-y-0"
                          x-transition:leave="transition ease-out duration-500"
                          x-transition:leave-start="opacity-100 transform translate-y-0"
                          x-transition:leave-end="opacity-0 transform translate-y-0">
                          <div class="relative flex flex-col m-0 bg-white shadow-lg rounded-b-lg rounded-t-lg dark:bg-dark-card ">
                            <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t-lg ">
                              <div class="text-base text-left text-white">
                                <h5 class="mb-0 text-xl font-medium text-white">All Notifications</h5>
                              </div>
                            </div>
                            <div class="flex-auto p-0">
                              <a href="#"
                                class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <img
                                    class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                    src="/assets/images/shapes/01.png" alt="">
                                  <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">Emma Watson Bni</h6>
                                    <div class="flex items-center justify-between">
                                      <p class="mb-0 text-lg text-gray-500 dark:text-gray-600 LR">95 MB</p>
                                      <small class="float-end text-sm text-gray-500 dark:text-gray-600">Just Now</small>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                    src="/assets/images/shapes/02.png" alt="">                      
                                <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                  <h6 class="mb-0 text-base font-medium dark:text-gray-600">New customer is join</h6>
                                  <div class="flex items-center justify-between">
                                    <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst Bni</p>
                                    <small class="float-end text-sm text-gray-500 dark:text-gray-600 LR">5 days ago</small>
                                  </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                    src="/assets/images/shapes/03.png" alt="">
                                  <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">Two customer is left</h6>
                                    <div class="flex items-center justify-between">
                                      <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst Bni</p>
                                      <small class="float-end text-sm text-gray-500 dark:text-gray-600 LR">2 days ago</small>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3  hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                    src="/assets/images/shapes/04.png" alt="">
                                  <div class="w-full ml-3 rtl:ml-0 rtl:mr-3">
                                    <h6 class="mb-0 text-base font-medium dark:text-gray-600">New Mail from Fenny</h6>
                                    <div class="flex items-center justify-between">
                                      <p class="mb-0 text-lg text-gray-500 dark:text-gray-600">Cyst Bni</p>
                                      <small class="float-end text-sm text-gray-500 dark:text-gray-600 LR">3 days ago</small>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item dropdown flex items-center" x-data="{ open: false }">
                        <a href="#" class="block p-2 group" @click="open = !open">
                          <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="dark:text-white text-gray-600 hover:text-gray-700 group group-focus:text-gray-700">
                            <path opacity="0.4"
                              d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                              fill="currentColor"></path>
                            <path
                              d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                              fill="currentColor"></path>
                          </svg>
                          <span class="bg-primary count-mail"></span>
                        </a>
                        <div x-show="open" class="absolute z-40 p-0 rounded top-14 w-80 right-72" @click.outside="open = false"
                          x-transition:enter="transition ease-in duration-500"
                          x-transition:enter-start="opacity-0 transform translate-y-16"
                          x-transition:enter-end="opacity-100 transform translate-y-0"
                          x-transition:leave="transition ease-out duration-500"
                          x-transition:leave-start="opacity-100 transform translate-y-0"
                          x-transition:leave-end="opacity-0 transform translate-y-0">
                          <div
                            class="relative flex flex-col m-0 bg-white shadow-lg rounded-t-lg rounded-b-lg dark:text-gray-600 dark:bg-dark-card">
                            <div class="flex justify-between px-5 py-3 bg-blue-500 rounded-t">
                              <div class="text-base text-left text-white">
                                <h5 class="mb-0 text-xl font-medium text-white">All Message</h5>
                              </div>
                            </div>
                            <div class="flex-auto p-0">
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <div class="">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                      src="/assets/images/shapes/01.png" alt="">
                                  </div>
                                  <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                    <h6 class="mb-0 text-base font-medium">Bni Emma Watson</h6>
                                    <small class="LR float-start text-sm text-gray-500 dark:text-gray-600">13 Jun</small>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <div class="">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                      src="/assets/images/shapes/02.png" alt="">
                                  </div>
                                  <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                    <h6 class="mb-0 text-base font-medium">Lorem Ipsum Watson</h6>
                                    <small class="float-start text-sm text-gray-500 dark:text-gray-600">20 Apr</small>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <div class="">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                      src="/assets/images/shapes/03.png" alt="">
                                  </div>
                                  <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                    <h6 class="mb-0 text-base font-medium">Why do we use it ?</h6>
                                    <small class="float-start text-sm text-gray-500 dark:text-gray-600">30 Jun</small>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 border-b dark:border-gray-700 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <div class="">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                      src="/assets/images/shapes/04.png" alt="">
                                  </div>
                                  <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                    <h6 class="mb-0 text-base font-medium">Variations Passages</h6>
                                    <small class="float-start text-sm text-gray-500 dark:text-gray-600">12 Sep</small>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="inline-block w-full px-5 py-3 hover:bg-indigo-100 group">
                                <div class="flex items-center">
                                  <div class="">
                                    <img class="w-10 h-10 p-1 text-blue-400 bg-blue-100 rounded-full dark:bg-blue-800 group-hover:bg-blue-200"
                                      src="/assets/images/shapes/05.png" alt="">
                                  </div>
                                  <div class="ml-3 rtl:ml-0 rtl:mr-3 LR">
                                    <h6 class="mb-0 text-base font-medium">Lorem Ipsum generators</h6>
                                    <small class="float-start text-sm text-gray-500 dark:text-gray-600">5 Dec</small>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item dropdown" x-data="{ open: false }">
                        <a class="flex items-center px-2 py-0" href="#" @click="open = !open">
                          <img src="/assets/images/avatars/01.png" alt="User-Profile" class="max-w-full rounded-full "
                            height="50px" width="50px">
                          <div class="hidden ml-4 rtl:ml-0 rtl:mr-4 md:block">
                            <h6 class="mb-0 text-base font-medium dark:text-gray-600">Austin Robertson</h6>
                            <p class="mb-0 caption-sub-title text-lg text-gray-600 hover:text-gray-700 dark:text-white dark:hover:text-gray-500">Marketing Administrator</p>
                          </div>
                        </a>
                        <ul x-show="open" class="absolute z-40 w-40 p-0 py-2 bg-white right-0 rounded dark:bg-dark-card"
                          @click.outside="open = false" x-transition:enter="transition ease-in duration-500"
                          x-transition:enter-start="opacity-0 transform translate-y-16"
                          x-transition:enter-end="opacity-100 transform translate-y-0"
                          x-transition:leave="transition ease-out duration-500"
                          x-transition:leave-start="opacity-100 transform translate-y-0"
                          x-transition:leave-end="opacity-0 transform translate-y-0">
                          <li><a
                              class="block w-full px-4 py-1 focus:bg-blue-500 focus:text-white text-lg text-gray-600 rounded-t whitespace-nowrap hover:text-blue-500 "
                              href="/dashboard/app/user-profile.html">Profile</a></li>
                          <li><a
                              class="block w-full px-4 py-1 focus:bg-blue-500 focus:text-white text-lg text-gray-600 whitespace-nowrap  hover:text-blue-500"
                              href="/dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                          <li>
                            <hr class="dark:border-gray-700 m-0 dark:m-0">
                          </li>
                          <li><a
                              class="block w-full px-4 py-1 pt-2 focus:bg-blue-500 focus:text-white text-lg text-gray-600 rounded-b whitespace-nowrap  hover:text-blue-500"
                              href="/dashboard/auth/sign-in.html">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          
          <div class="text-white" style="height: 215px;">
            <div class="w-full p-8">
              <div class="row">
                <div class="px-4 col-md-12">
                  <div class="flex flex-wrap items-center justify-between">
                    <div>
                      <h1 class="text-4xl font-medium rtl:flex rtl:justify-end LR">Hello Devs!</h1>
                      <p class="mb-4 LR rtl:text-right">We are on a mission to help developers like you build successful projects for FREE.</p>
                    </div>
                    <div>
                      <a href=""
                        class="inline-block px-6 py-2 mb-4 text-base font-normal text-center text-white transition-all duration-500 ease-in-out border border-transparent rounded shadow-md btn-soft-light hover:shadow-xl hover:bg-glass focus:bg-gray-200">
                        <svg width="20" class="inline-block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z"
                            fill="currentColor"></path>
                          <path opacity="0.4"
                            d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z"
                            fill="currentColor"></path>
                        </svg>
                        Announcements
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="absolute top-0 lg:h-64 h-72" style="z-index: -1;">
              <img src="/assets/images/dashboard/top-header.png" alt="header" class="object-cover w-screen h-full rounded-2xl">
            </div>
          </div>
        <!--Nav End-->
      </div>
    </main>

    
    </div>
    
</body>
</html>