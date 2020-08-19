<x-template.base :title="$name">
  <div class="mb-6 pb-2 flex items-center border-b-2 border-gray-200">
    @include('partials/breadcrumbs', [
      'parentUrl' => '/tools',
      'parent' => 'Tools',
      'child' => $name
    ])
  </div>

  {{ $slot }}
</x-template.base>
