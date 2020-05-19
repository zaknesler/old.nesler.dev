<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@hasSection('title') @yield('title') &ndash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('js/app.js') }}" defer></script>
  @yield('scripts')
</head>
<body class="font-sans font-normal text-base tracking-normal leading-normal bg-white text-gray-700">
  <div class="block w-full h-3 bg-gradient-r-brand"></div>

  <div class="mx-auto md:mt-12 p-6 md:flex md:justify-center">
    <div class="md:mr-12 md:w-sidebar text-center md:text-right">
      <div class="pt-6 md:sticky top-0">
        <h1 class="text-2xl font-bold text-black">Zak Nesler</h1>
        <h4 class="text-xs font-medium tracking-wide uppercase text-gray-600">Full-Stack Developer</h4>

        <div class="my-6 mx-auto md:mr-0 md:ml-auto w-20 h-1 bg-gradient-r-brand"></div>

        <div class="hidden md:block w-full">
          <ul class="space-y-2 font-medium">
            <li><a href="{{ route('about') }}" class="{{ optional(request()->route())->getName() === 'about' ? 'font-bold text-black' : 'text-gray-600' }} hover:text-black">About</a></li>
            <li><a href="{{ route('projects') }}" class="{{ optional(request()->route())->getName() === 'projects' ? 'font-bold text-black' : 'text-gray-600' }} hover:text-black">Projects</a></li>
            <li><a href="{{ route('tools') }}" class="{{ optional(request()->route())->getName() === 'tools' ? 'font-bold text-black' : 'text-gray-600' }} hover:text-black">Tools</a></li>
          </ul>

          <div class="my-6 mx-auto md:mr-0 md:ml-auto w-20 h-1 bg-gray-200"></div>

          <ul class="mt-6 space-y-2 text-sm font-medium">
            <li><a href="{{ route('resume') }}" class="inline-flex items-center justify-end text-gray-600 hover:text-black">Résumé</a></li>
            <li><a href="https://github.com/zaknesler" class="inline-flex items-center justify-end text-gray-600 hover:text-black">GitHub</a></li>
            <li><a href="https://twitter.com/zaknesler" class="inline-flex items-center justify-end text-gray-600 hover:text-black">Twitter</a></li>
            <li><a href="https://linkedin.com/in/zaknesler/" class="inline-flex items-center justify-end text-gray-600 hover:text-black">LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mx-auto md:mx-0 mt-6 w-full max-w-xl">
      @yield('content')
    </div>
  </div>
</body>
</html>
