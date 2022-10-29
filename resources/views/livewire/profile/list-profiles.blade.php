<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            People
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-10">
            <div class="relative text-gray-600 focus-within:text-gray-400 mr-3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="button" class="p-1 focus:outline-none focus:shadow-outline" wire:click="search()">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                </span>
                <input type="search" name="q" class="w-96 py-2 text-xl text-gray-600 rounded-md pl-10 focus:outline-none focus:text-gray-900 focus:bg-blue-100 px-4 py-3 rounded-full" placeholder="Search username..." autocomplete="off" wire:model.defer="usernameSearch" wire:keydown.enter="search">
            </div>
        </div>


        @if ($profiles)
        @foreach ($profiles as $profile)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center space-x-5">
                            <img class="h-18 w-18 rounded-full object-cover" src="{{ $profile->profile_photo_url }}" alt="{{ $profile->name }}" />
                            <div class="justify-items-start text-left cursor-pointer" wire:click="goToProfilePage('{{ $profile->username }}')">
                                <div class="ml-2 text-xl font-bold">{{ $profile->name }}</div>
                                <div class="justify-items-start text-left ml-2 text-xl font-bold">{{ "@" . $profile->username }}</div>
                            </div>
                            <div class="w-3/4 justify-items-end text-right">
                                @if (!$followings->contains($profile))
                                    <button wire:click="follow({{ $profile->id }})" class="flex items-center justify-between shadow-2xl px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-full active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-orange" aria-label="Edit">
                                        Follow
                                    </button>
                                @else
                                    <button wire:click="unfollow({{ $profile->id }})" class="flex items-center justify-between shadow-2xl px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-full active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-orange" aria-label="Edit">
                                        Unfollow
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($profiles instanceof \Illuminate\Pagination\AbstractPaginator)
                {{-- {{ dd($profiles->links()) }} --}}
                {{ $profiles->links()}}
            @endif
        </div>

    </div>
</div>
