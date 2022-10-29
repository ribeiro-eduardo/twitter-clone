<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto text-xl lg:px-8 mb-2"><a href="{{ route('list_profiles') }}">Follow another user</a></div>
            @forelse ($followings as $following)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex text-center justify-items-center cursor-pointer" wire:click="goToProfilePage('{{ $following->username }}')">
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ $following->profile_photo_url }}" alt="{{ $following->name }}" />
                                <div class="justify-items-start text-left">
                                    <div class="ml-2 text-xl font-bold">{{ $following->name }}</div>
                                    <div class="justify-items-start text-left ml-2 text-lg">
                                        {{ "@" . $following->username }}
                                        <br>
                                        <a class="button" href="{{ route('followers', $following->id) }}"><b>{{ count($following->followers) }}</b> followers</button></a>
                                        <a class="button" href="{{ route('following', $following->id) }}"><b>{{ count($following->followings) }}</b> following</button></a>
                                    </div>
                                </div>

                                <div class="w-96 justify-items-end text-right">
                                    <button wire:click="unfollow({{ $following->id }})" class="font-bold text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue px-2 py-2" aria-label="Edit">
                                        Unfollow
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @empty
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center">
                            Whoops! Nobody is here!
                        </div>
                    </div>
                </div>
            </div>
            @endforelse

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($followings instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $followings->links()}}
            @endif
        </div>
    </div>
</div>
