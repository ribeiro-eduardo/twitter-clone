<div>
    <div class="relative text-gray-600 focus-within:text-gray-400 mr-3">
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <button type="button" class="p-1 focus:outline-none focus:shadow-outline" wire:click="search()">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
        </span>
        <input type="search" name="q" class="py-2 text-sm text-gray-600 rounded-md pl-10 focus:outline-none focus:text-gray-900 focus:bg-blue-100 px-4 py-3 rounded-full" placeholder="Search username..." autocomplete="off" wire:model.defer="search" wire:keydown.enter="search">
    </div>
</div>
