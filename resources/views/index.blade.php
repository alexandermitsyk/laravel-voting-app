<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl py2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other-filters" id="other-filters" class="w-full rounded-xl py2 border-none">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
            </select>
        </div>

        <div class="w-2/3 relative">
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
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
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

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <p class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <div class="flex items-center mt-6 justify-between">
                        <div class="flex items-center text-xxs justify-between font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
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
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">
                        66
                    </div>
                    <div class="text-gray-500">
                        Vote
                    </div>
                </div>
                <div class="mt-8">
                    <button type="button"
                        class="w-20 bg-blue text-white font-bold uppercase rounded-xl px-4 py-3 
                        border text-xxs border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                        Voted
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="Avatar"
                        class="w-14 h-14 rounded-xl" />
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <p class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>

                    <div class="flex items-center mt-6 justify-between">
                        <div class="flex items-center text-xxs justify-between font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In progress
                            </div>

                            <button type="button"
                                class=" bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul
                                    class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
