<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Following
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto text-xl lg:px-8 mb-2"><a href="{{ route('list_profiles') }}">Follow another user</a></div>

        @forelse ($followings as $following)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center cursor-pointer" wire:click="goToProfilePage('{{ $following->username }}')">
                            <img class="h-18 w-18 rounded-full object-cover" src="{{ $following->profile_photo_url }}" alt="{{ $following->name }}" />
                            <div class="justify-items-start text-left">
                                <div class="ml-2 text-xl font-bold">{{ $following->name }}</div>
                                <div class="justify-items-start text-left ml-2 text-xl font-bold">{{ "@" . $following->username }}</div>
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
                        Whoops! You are not following anyone yet!
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
