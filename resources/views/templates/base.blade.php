<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="author" content="Zak Nesler">
  <meta name="robots" content="index, follow">
  <meta name="msapplication-starturl" content="/">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Zak Nesler">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Zak Nesler">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="description" content="Student full-stack developer from Pennsylvania with a passion for tasteful and minimal design, as well as tidy and efficient back-end code.">
  <meta name="keywords" content="zak nesler, zak, nesler, zaknes, zaknesler, zachary nesler, web design, design, code, html, css, php, laravel, vue, programming, web development">
  <meta name="p:domain_verify" content="ff1f90db2750254f6843a167a5e5efb8">

  <title>@hasSection('title') @yield('title') &ndash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

  <link rel="icon" type="image/png" sizes="128x128" href="/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="128x128" href="/favicon.png">
  <link rel="manifest" href="/manifest.json">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('js/app.js') }}" defer></script>

  @yield('scripts')
</head>
<body class="font-sans font-normal text-base tracking-normal leading-normal bg-white text-gray-700">
  <div class="block w-full h-3 bg-gradient-r-brand"></div>

  <div x-data="{ open: false }" class="mx-auto md:mt-12 p-6 w-full max-w-xl md:max-w-full flex flex-col md:flex-row md:justify-center">
    <div class="md:mr-12 text-left md:text-right">
      <div class="md:w-sidebar md:pt-6 lg:sticky lg:top-0 flex flex-wrap md:block">
        <div class="w-full">
          <div class="w-full flex md:block justify-between items-center">
            <div>
              <a href="{{ route('about') }}">
                <h1 class="text-2xl font-bold text-gray-900">Zak Nesler</h1>
              </a>
              <h4 class="text-xs font-medium tracking-wide uppercase text-gray-600">Full-Stack Developer</h4>
            </div>

            <div class="block md:hidden">
              <a :title="open ? 'Close Menu' : 'Open Menu'" href="#" @click.prevent="open = !open" class="block -mr-2 p-2 text-gray-600 hover:text-gray-900 rounded-lg overflow-hidden focus:shadow-outline focus:outline-none">
                <svg :class="{ 'hidden': open }" class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg :class="{ 'hidden': !open }" class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
              </a>
            </div>
          </div>

          <div class="mt-3 mb-6 md:mt-6 ml-0 md:ml-auto w-32 md:w-24 h-1 bg-gradient-r-brand"></div>
        </div>

        <div class="mb-6 flex-grow md:block w-full" :class="{ 'hidden': !open }">
          <ul class="-mx-3 md:mx-0 space-y-1 md:space-y-2 font-medium text-lg md:text-base">
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'font-bold text-gray-900' : 'text-gray-600' }} hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">About</a></li>
            <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'font-bold text-gray-900' : 'text-gray-600' }} hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Projects</a></li>
            <li><a href="{{ route('now') }}" class="{{ request()->routeIs('now') ? 'font-bold text-gray-900' : 'text-gray-600' }} hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Now</a></li>
          </ul>

          <div class="my-6 mx-0 md:mx-auto md:mr-0 md:ml-auto w-12 h-1 bg-gray-200"></div>

          <ul class="-mx-3 md:mx-0 space-y-1 md:space-y-2 text-base md:text-sm font-medium text-gray-600">
            <li><a href="{{ route('resume') }}" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Résumé</a></li>
            <li><a href="https://github.com/zaknesler" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">GitHub</a></li>
            <li><a href="https://twitter.com/zaknesler" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Twitter</a></li>
            <li><a href="https://linkedin.com/in/zaknesler/" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div :class="{ 'hidden md:block': open }" class="mx-auto md:mx-0 w-full md:max-w-xl md:mt-6">
      @yield('content')
    </div>
  </div>
</body>
</html>
