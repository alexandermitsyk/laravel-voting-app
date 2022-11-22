<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl py2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select name="other-filters" id="other-filters" class="w-full rounded-xl py2 border-none">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
            </select>
        </div>

        <div class="w-full md:w-2/3 relative">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <input type="search" placeholder="Find an idea"
                class="w-full placeholder-gray-500 rounded-xl border-none bg-white px-4 py-2 pl-8" />
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <div
                class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
                <div class="border-r border-gray-100 px-5 py-8 hidden md:block">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">
                            12
                        </div>
                        <div class="text-gray-500">
                            Vote
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="button"
                            class="w-20 bg-gray-200 font-bold uppercase rounded-xl px-4 py-3 
                        border text-xxs border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                            Vote
                        </button>
                    </div>
                </div>

                <div class="flex flex-1 flex-col md:flex-row px-2 py-6">
                    <div class="flex-none mx-2 md:mx-0">
                        <a href="#" class="">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Avatar"
                                class="w-14 h-14 rounded-xl" />
                        </a>
                    </div>
                    <div class="mx-2 flex flex-col justify-between md:w-full">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}" class="hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <p class="text-gray-600 mt-3 line-clamp-3">
                            {{ $idea->description }}
                        </p>

                        <div class="flex flex-col md:flex-row md:items-center mt-6 justify-between">
                            <div
                                class="flex items-center text-xxs md:justify-between font-semibold space-x-2 text-gray-400">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>Category 1</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                                <div
                                    class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    Open
                                </div>

                                <button type="button" @click="isOpen = !isOpen"
                                    class=" bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)">
                                    </svg>

                                    <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms
                                        @click.away="isOpen = false" @keydown.escape.window="isOpen = false"
                                        class="absolute z-10 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                        <li>
                                            <a href="#"
                                                class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                                Mark as spam
                                            </a>
                                            <a href="#"
                                                class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">
                                                Delete post
                                            </a>
                                        </li>
                                    </ul>
                                </button>
                            </div>

                            <div class="md:hidden mt-4 md:mt-0 flex items-center">
                                <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                    <div class="text-sm font-bold leading-none">
                                        12
                                    </div>
                                    <div class="text-xxs font-semibold leading-none text-gray-400">
                                        Votes
                                    </div>
                                </div>
                                <button type="button"
                                    class="w-20 bg-gray-200  -mx-5 font-bold uppercase rounded-xl px-4 py-3 
                        border text-xxs border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
