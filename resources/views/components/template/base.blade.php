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

  <title>@if ($attributes->get('title')) {{ $attributes->get('title') }} &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

  <link rel="icon" type="image/png" sizes="128x128" href="/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="128x128" href="/favicon.png">
  <link rel="manifest" href="/manifest.json">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('js/app.js') }}" defer></script>

  @stack('scripts')
</head>
<body class="font-sans font-normal text-base tracking-normal leading-normal bg-white text-gray-700">
  <div class="block w-full h-3 bg-gradient-to-r from-brand-500 to-brand-400"></div>

  <div x-data="{ open: false }" class="mx-auto md:mt-12 p-6 w-full max-w-xl md:max-w-full flex flex-col md:flex-row md:justify-center">
    @include('partials.sidebar')

    <div :class="{ 'hidden md:block': open }" class="mx-auto md:mx-0 w-full md:max-w-xl md:mt-6">
      <div class="mb-6 px-4 py-3 bg-black text-white rounded-md flex flex-col sm:flex-row items-center justify-center sm:justify-between">
        <div class="font-semibold text-center sm:text-left">
          <div>Black Lives Matter</div>
          <div class="text-xs opacity-75">The system is broken. Stop police brutality.</div>
        </div>

        <a href="https://blacklivesmatters.carrd.co" target="_blank" rel=”noopener” class="mt-3 px-3 py-2 sm:mt-0 text-xs font-semibold inline-flex items-center bg-white bg-opacity-25 hover:bg-opacity-100 hover:text-black rounded">
          <span class="mr-2">Ways You Can Help</span>
          <svg class="w-4 h-4 opacity-75" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>

      {{ $slot }}
    </div>
  </div>
</body>
</html>
