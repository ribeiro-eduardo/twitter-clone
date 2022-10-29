<div>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Timeline
            </h2>

        </div>


    </x-slot>


    <div class="py-12">
        <div class="ml-12 px-80 mb-8 justify-items-end">
            <button type="button" wire:click="postTweet()" class="flex items-center justify-between shadow-2xl px-8 py-4 text-xl font-medium leading-5 text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-orange" aria-label="Edit">
                Tweet
            </button>
        </div>
        @forelse ($tweets as $tweet)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center cursor-pointer" wire:click="goToProfilePage('{{ $tweet->author->username }}')">
                            <img class="h-18 w-18 rounded-full object-cover" src="{{ $tweet->author->profile_photo_url }}" alt="{{ $tweet->author->name }}" />
                            <div class="ml-4 text-xl font-bold">{{ $tweet->author->name }}</div>
                            <br>
                            <div class="ml-4 text-md ">{{ "@" . $tweet->author->username }} - {{ date('d/m/Y H:i:s', strtotime($tweet->created_at)) }}</div>
                        </div>
                        <div class="ml-20 text-xl">
                            {{ $tweet->description }}
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @empty
        @endforelse
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($tweets instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $tweets->links()}}
            @endif
        </div>
    </div>
</div>
