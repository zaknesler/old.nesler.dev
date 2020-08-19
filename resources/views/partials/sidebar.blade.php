<div class="md:mr-12 text-left md:text-right">
  <div class="md:w-sidebar md:pt-6 md:sticky md:top-0 flex flex-wrap md:block">
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
        <li><a href="{{ route('uses') }}" class="{{ request()->routeIs('uses') ? 'font-bold text-gray-900' : 'text-gray-600' }} hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Uses</a></li>
      </ul>

      <div class="my-6 mx-0 md:mx-auto md:mr-0 md:ml-auto w-12 h-1 bg-gray-200"></div>

      <ul class="-mx-3 md:mx-0 space-y-1 md:space-y-2 text-base md:text-sm font-medium text-gray-600">
        <li><a href="{{ route('resume') }}" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Résumé&zwnj;</a></li>
        <li><a href="https://github.com/zaknesler" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">GitHub</a></li>
        <li><a href="https://twitter.com/zaknesler" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">Twitter</a></li>
        <li><a href="https://linkedin.com/in/zaknesler/" class="hover:text-gray-900 block p-3 md:p-0 w-full hover:bg-gray-100 md:hover:bg-transparent rounded-lg md:rounded-none">LinkedIn</a></li>
      </ul>
    </div>
  </div>
</div>
