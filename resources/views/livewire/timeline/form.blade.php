<div>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Tweet
            </h2>
        </div>


    </x-slot>

    <div class="py-12 ml-12 px-80 mb-8 justify-items-end">
        <form wire:submit.prevent="submit" class="ml-12 mt-4">
            <div class="flex">
                <div class="w-5/6">
                    <textarea placeholder="What's happening?"
                        class="appearance-none block w-full bg-blue-200 border border-gray-200 rounded py-3 px-4 mb-3 mt-2 leading-tight focus:outline-none focus:text-gray-900 focus:bg-blue-100"
                        wire:model.defer="description" id="description" name="description" type="text"></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="flex items-center justify-between shadow-2xl px-4 py-4 text-xl font-medium leading-5 text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-full active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-orange"
                aria-label="Edit">
                Tweet
            </button>
        </form>
    </div>
</div>
