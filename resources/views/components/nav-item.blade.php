<li>
  <a
  href="{{ $attributes->get('route') ? route($route) : ($href ?? '#') }}"
  class="{{ $attributes->get('class') }} {{ request()->routeIs($attributes->get('route')) ? 'font-bold text-gray-900' : 'text-gray-600' }} hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none"
  >
    {{ $slot }}
  </a>
</li>
