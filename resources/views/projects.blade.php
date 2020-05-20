@extends('templates/base')

@section('title', 'Projects')

@section('content')
  <h3 class="text-gray-900">Projects</h3>

  <hr class="mt-2">

  <div class="mt-6 markup">
    <p>Here are the repositories of some of projects that I've worked on. It should come as no surprise that many of them use Laravel, Vue.js, and Tailwind CSS.</p>
    <p>The others are school assignments and example programs that I made in order to better understand a language, environment, tool, or programming paradigm.</p>

    <h3><a href="https://github.com/zaknesler/tailwind-preset">Tailwind CSS Preset</a></h3>
    <p>An awesome minimal preset for Laravel 7+ using Tailwind CSS and Vue.js, as well as Laravel Mix and configuration for Tailwind's built-in Purge CSS. A perfect starting point for your next idea.</p>

    <h3><a href="https://github.com/zaknesler/projects">Projects</a> & <a href="https://github.com/zaknesler/css">CSS</a></h3>
    <p>These repositories are used to demo CSS and to recreate sites like Google and GitHub, as well as demonstrating how to use Tailwind CSS to design sites.</p>

    <h3><a href="https://github.com/zaknesler/java">Java</a></h3>
    <p>Code from my high school Java I (intro to Java) and Java II (Android Development) classes. These projects allowed me to understand Java more thoroughly, as well as being able to use external APIs to populate a UI.</p>
  </div>
@endsection
