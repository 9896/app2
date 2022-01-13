<x-app-layout>

    <x-slot name="header">
        Add Task
    </x-slot>

    <div class="flex flex-col items-center justify-center h-screen px-8">

        <!-- Task list page button -->
        <a href="{{ route('tasklist') }}"
            class="mb-4 shadow bg-teal-500 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"> View Task
            list</a>

        <!-- Add task form -->
        <form action="/add-task" method="post" class="w-full max-w-sm bg-white shadow-md rounded px-8 pt-6 pb-8">
            @csrf
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-2 mb-2 rounded relative"
                role="alert">
                Please fix the following errors
            </div>
            @endif
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                        Title
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="title" value="{{ old('title') }}" name="title"
                        class="appearance-none border-2 @error('title') border-red-400 @else border-gray-200 @enderror rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                        type="text">
                    @error('title')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label for="description" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                        for="desription">
                        Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea id="description" name="description"
                        class="appearance-none border-2 @error('description') border-red-400 @else border-gray-200 @enderror rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                        id="description" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit"
                        class="shadow bg-teal-500 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Add Task
                    </button>
                </div>
            </div>
        </form>


    </div>

</x-app-layout>