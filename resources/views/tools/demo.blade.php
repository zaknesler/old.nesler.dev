@extends('templates/base')

@section('title', 'Demo Tool')

@section('content')
  <div class="pb-3 flex items-center border-b-2 border-gray-200">
    @include('templates/partials/breadcrumbs', [
      'parentUrl' => '/tools',
      'parent' => 'Tools',
      'child' => 'Demo Tool'
    ])
  </div>

  <div class="mt-6 prose" x-data="handle()" x-init="results = []">
    <p>Here is the example:</p>
    <p><a href="#" x-on:click.prevent="request">Request</a></p>

    <ul>
      <template x-for="result in results" x-key="result.id">
        <li x-text="result.name"></li>
      </template>
    </ul>
  </div>
@endsection

@section('scripts')
  <script>
    function handle() {
      return {
        results: [],
        request() {
          fetch('https://jsonplaceholder.typicode.com/users', {
            method: 'GET',
            headers: {
              'Content-Type': 'application/json'
            },
          })
            .then(response => response.json())
            .then(data => {
              this.results = data
            })
        }
      }
    }
  </script>
@endsection
