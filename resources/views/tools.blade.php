@extends('templates/base')

@section('title', 'Tools')

@section('content')
  <h2 class="pb-3 text-lg font-heading font-bold text-gray-900 border-b-2 border-gray-200">Tools</h2>

  <div class="mt-6 markup">
    <p>Here is a collection of web tools that I have created. These are usually the result of me not being satisfied with other online tools, or because I needed something more specific.</p>

    <h3><a href="{{ route('tools.demo') }}">Demo Tool</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga modi possimus repudiandae consequatur culpa iure incidunt, asperiores nobis libero, voluptatum temporibus. Impedit, in commodi voluptatum nulla esse, mollitia saepe optio.</p>
  </div>
@endsection
