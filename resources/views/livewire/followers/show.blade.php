<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Followers
        </h2>
    </x-slot>

    <div class="py-12">
        @forelse ($followers as $follower)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center space-x-5">
                            <img class="h-18 w-18 rounded-full object-cover" src="{{ $follower->profile_photo_url }}" alt="{{ $follower->name }}" />
                            <div class="justify-items-start text-left cursor-pointer" wire:click="goToProfilePage('{{ $follower->username }}')">
                                <div class="ml-2 text-xl font-bold">{{ $follower->name }}</div>
                                <div class="justify-items-start text-left ml-2 text-xl font-bold">{{ "@" . $follower->username }}</div>
                            </div>
                            <div class="w-3/4 justify-items-end text-right">
                                @if (!$followings->contains($follower))
                                    <button wire:click="followBack({{ $follower->id }})" class="flex items-center justify-between shadow-2xl px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-full active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-orange" aria-label="Edit">
                                        Follow back
                                    </button>
                                @else
                                    <button wire:click="unfollow({{ $follower->id }})" class="flex items-center justify-between shadow-2xl px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-400 border border-transparent rounded-full active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-orange" aria-label="Edit">
                                        Unfollow
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @empty
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex text-center justify-items-center">
                        Whoops! No one is following you yet!
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($followers instanceof \Illuminate\Pagination\AbstractPaginator)
                {{-- {{ dd($followers->links()) }} --}}
                {{ $followers->links()}}
            @endif
        </div>

    </div>
</div>
