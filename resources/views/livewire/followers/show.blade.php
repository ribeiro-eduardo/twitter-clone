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
                        <div class="flex text-center justify-items-center cursor-pointer" wire:click="goToProfilePage('{{ $follower->username }}')">
                            <img class="h-12 w-12 rounded-full object-cover" src="{{ $follower->profile_photo_url }}" alt="{{ $follower->name }}" />
                            <div class="justify-items-start text-left">
                                <div class="ml-2 text-xl font-bold">{{ $follower->name }}</div>
                                <div class="justify-items-start text-left ml-2 text-lg">
                                    {{ "@" . $follower->username }}
                                    <br>
                                    <a class="button" href="{{ route('followers', $follower->id) }}"><b>{{ count($follower->followers) }}</b> followers</button>
                                    <a class="button" href="{{ route('following', $follower->id) }}"><b>{{ count($follower->followings) }}</b> following</button>
                                </div>
                            </div>
                            <div class="w-96 justify-items-end text-right">
                                @if (!$followings->contains($follower))
                                    <button wire:click="followBack({{ $follower->id }})" class="font-bold text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue px-2 py-2" aria-label="Edit">
                                        Follow back
                                    </button>
                                @elseif ($followings->contains($follower))
                                    <button wire:click="unfollow({{ $follower->id }})" class="font-bold text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue px-2 py-2" aria-label="Edit">
                                        Unfollow
                                    </button>
                                @else
                                    <button wire:click="followBack({{ $follower->id }})" class="font-bold text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue px-2 py-2" aria-label="Edit">
                                        Follow
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
                        Whoops! No one is here yet!
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($followers instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $followers->links()}}
            @endif
        </div>

    </div>
</div>
