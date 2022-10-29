<div>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>

        </div>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-16">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex text-center justify-items-center">
                    <img class="h-24 w-24 rounded-full object-cover" src="{{ $profile->profile_photo_url }}" alt="{{ $profile->name }}" />
                    <div class="justify-items-start text-left ml-4">
                        <div class="text-3xl font-bold">
                            {{ $profile->name }}
                        </div>
                        <div class="text-md">
                            {{ "@" . $profile->username }}
                            <br>
                            joined in {{ date('F Y', strtotime($profile->created_at)) }}
                            <br>
                            <a class="button" href="{{ route('followers', $profile->id) }}"><b>{{ count($profile->followers) }}</b> followers</button></a>
                            <a class="button" href="{{ route('following', $profile->id) }}"><b>{{ count($profile->followings) }}</b> following</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tweets
            </h2>

        </div>

        @forelse ($tweets as $tweet)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex text-center justify-items-center">
                            <img class="h-12 w-12 rounded-full object-cover" src="{{ $tweet->author->profile_photo_url }}" alt="{{ $tweet->author->name }}" />
                            <div class="ml-4 text-xl font-bold">{{ $tweet->author->name }}</div>
                            <br>
                            <div class="ml-4 text-md ">{{ "@" . $tweet->author->username }} - {{ date('d/m/Y H:i:s', strtotime($tweet->created_at)) }}</div>
                        </div>
                        <div class="ml-16 text-xl">
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
