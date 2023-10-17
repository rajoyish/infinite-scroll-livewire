<div>
  <nav class="divide-y divide-gray-200 overflow-hidden rounded border border-gray-200 bg-white">
      @foreach ($articles as $article)
      <a href="#" class="group flex items-center justify-between p-4 text-gray-700 hover:bg-gray-50 hover:text-gray-700 active:bg-white">
          <div class="flex items-center gap-4">
            <div class="hidden h-16 w-24 flex-none items-center justify-center rounded bg-indigo-500 text-xl font-semibold uppercase tracking-wide text-white sm:flex">
              #{{ $article->id }}
          </div>
            <div>
              <p class="mb-0.5 text-xl font-semibold">
                  {{ $article->title }}
              </p>
              <p class="text-sm font-medium text-gray-500">
                  {{ $article->teaser }}
              </p>
            </div>
          </div>
          <svg class="hi-mini hi-chevron-right inline-block h-5 w-5 text-gray-400 group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
          </svg>
        </a>
      @endforeach
    </nav>

    @if ($this->paginator->hasMorePages()) 
      <div x-intersect="$wire.loadMore" class="h-12 -translate-y-44"></div>
    @endif

    @if ($this->paginator->hasMorePages()) 
      <div class="mt-8 text-center">
        <x-primary-button wire:click="loadMore">Load More</x-primary-button>
      </div>
    @endif
</div>
