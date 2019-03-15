<nav class="flex items-center justify-between">
  <h1><a href="/">Jigsaw</a></h1>
  <div class="flex items-center">
    <div class="mr-4">
      <a class="{{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">About Us</a>
    </div>
    <div class="mr-4">
      <a class="{{ $page->selected('team') }}" href="{{ $page->baseUrl }}/team">Team</a>
    </div>
  </div>
</nav>
