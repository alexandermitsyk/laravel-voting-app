<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
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
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>

                        <button type="button"
                            class=" bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                            <svg fill="currentColor" width="24" height="6">
                                <path
                                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                    style="color: rgba(163, 163, 163, .5)">
                            </svg>

                            {{-- <ul
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
                            </ul> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center buttons-container justify-between mt-6">
        <div class="flex items-center space-x-4 ml-4">
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" type="submit"
                    class="flex items-center justify-center text-white h-11 w-32 text-xs bg-blue font-bold rounded-xl border border-blue hover:bg-blue-hover px-6 py-3">
                    Reply
                </button>

                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post-comment" id="post-comment" cols="30" rows="4"
                                class="w-full text-sm rounded-xl bg-gray-100 placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="submit"
                                class="flex items-center justify-center h-11 w-1/2 text-xs text-white bg-blue font-bold rounded-xl border border-blue hover:bg-blue-hover px-6 py-3">
                                Post comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3">
                                <svg class="w-4 h-4 flex-none stroke-gray-900 -rotate-45" viewBox="0 0 24 24"
                                    fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center font-bold h-11 w-36 text-xs bg-gray-200 rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3">
                    <span>Set status</span>

                    <svg class="w-4 h-4 ml-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-gray-900 bg-gray-200 border-none" type="radio"
                                        checked="" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-purple bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-yellow bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-green bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-red outline-none bg-gray-200 border-none"
                                        type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update-comment" id="update-comment" cols="30" rows="3"
                                class="w-full text-sm rounded-xl bg-gray-100 placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an update comment (optional)..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3">
                                <svg class="w-4 h-4 flex-none stroke-gray-900 -rotate-45" viewBox="0 0 24 24"
                                    fill="none" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit"
                                class="flex items-center justify-center h-11 w-1/2 text-xs text-white bg-blue font-bold rounded-xl border border-blue hover:bg-blue-hover px-6 py-3">
                                Update
                            </button>
                        </div>

                        <div>
                            <label class="inline-flex items-center font-normal">
                                <input class="form-checkbox rounded bg-gray-200" name="notify-voters" type="checkbox"
                                    checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="leading-snug text-xl">
                    12
                </div>
                <div class="text-gray-400 text-xs leading-none">
                    Votes
                </div>
            </div>

            <button type="button"
                class="font-bold uppercase h-11 w-32 text-xs bg-gray-200 rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div>

    <div class="comments-container space-y-6 my-8 ml-22 relative mt-1 pt-6">
        <div class="comment-container bg-white rounded-xl flex mt-4 relative">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <p class="text-gray-600 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center mt-6 justify-between">
                        <div class="flex items-center text-xxs justify-between font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button type="button" @click="isOpen = !isOpen" type="button"
                                class=" bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms
                                    @click.away="isOpen = false" @keydown.escape.window="isOpen = false"
                                    class="absolute z-10 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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

        <div class="is-admin comment-container bg-white rounded-xl flex mt-4 border-2 border-blue relative">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                    <div class="font-bold text-blue uppercase text-center text-xxs mt-1">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <p class="text-gray-600 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center mt-6 justify-between">
                        <div class="flex items-center text-xxs justify-between font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Andreea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="button"
                                class=" bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                {{-- <ul
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
                            </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container bg-white rounded-xl flex mt-4 relative">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <p class="text-gray-600 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center mt-6 justify-between">
                        <div class="flex items-center text-xxs justify-between font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="button"
                                class=" bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 relative">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                {{-- <ul
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
                            </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
