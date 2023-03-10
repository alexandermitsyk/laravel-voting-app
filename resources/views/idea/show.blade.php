<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="flex mt-4 bg-white idea-container rounded-xl">
        <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
            <div class="flex-none mx-2 md:mx-0">
                <a href="#" class="">
                    <img src="{{ $idea->user->getAvatar() }}" alt="Avatar" class="w-14 h-14 rounded-xl" />
                </a>
            </div>
            <div class="flex flex-col justify-between mx-2 md:w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <p class="mt-3 text-gray-600 line-clamp-3">
                    {{ $idea->description }}
                </p>

                <div class="flex flex-col justify-between mt-6 md:items-center md:flex-row">
                    <div class="flex items-center space-x-2 font-semibold text-gray-400 text-xxs md:justify-between">
                        <div class="hidden font-bold text-gray-900 md:block">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 md:mt-0">
                        <div
                            class="{{ $idea->status->classes }} px-4 py-2 font-bold leading-none text-center uppercase rounded-full text-xxs w-28 h-7">
                            {{ $idea->status->name }}
                        </div>

                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button type="button" @click="isOpen = !isOpen" type="button"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms
                                    @click.away="isOpen = false" @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 z-10 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0">
                                    <li>
                                        <a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Mark as spam
                                        </a>
                                        <a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Delete post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 md:hidden md:mt-0">
                        <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                            <div class="text-sm font-bold leading-none">
                                12
                            </div>
                            <div class="font-semibold leading-none text-gray-400 text-xxs">
                                Votes
                            </div>
                        </div>
                        <button type="button"
                            class="w-20 px-4 py-3 -mx-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 rounded-xl text-xxs hover:border-gray-400">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green bg-red bg-purple"></div>

    <div class="flex items-center justify-between mt-6 buttons-container">
        <div class="flex flex-col w-full md:items-center md:w-auto md:space-x-4 md:ml-4 md:flex-row">
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" type="submit"
                    class="flex items-center justify-center w-full px-6 py-3 text-xs font-bold text-white border h-11 md:w-32 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                    Reply
                </button>

                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-full mt-2 text-sm font-semibold text-left bg-white md:w-104 shadow-dialog rounded-xl">
                    <form action="#" class="px-4 py-6 space-y-4">
                        <div>
                            <textarea name="post-comment" id="post-comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="submit"
                                class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-bold text-white border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                                Post comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                <svg class="flex-none w-4 h-4 -rotate-45 stroke-gray-900" viewBox="0 0 24 24"
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

            <div x-data="{ isOpen: false }" class="relative mt-2 md:mt-0">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center w-full px-6 py-3 text-xs font-bold bg-gray-200 border border-gray-200 h-11 md:w-36 rounded-xl hover:border-gray-400">
                    <span>Set status</span>

                    <svg class="w-4 h-4 ml-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-full mt-2 text-sm font-semibold text-left bg-white md:w-76 shadow-dialog rounded-xl">
                    <form action="#" class="px-4 py-6 space-y-4">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="text-gray-900 bg-gray-200 border-none form-radio" type="radio"
                                        checked="" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="bg-gray-200 border-none form-radio text-purple" type="radio"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="bg-gray-200 border-none form-radio text-yellow" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="bg-gray-200 border-none form-radio text-green" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="bg-gray-200 border-none outline-none form-radio text-red"
                                        type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update-comment" id="update-comment" cols="30" rows="3"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Add an update comment (optional)..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                <svg class="flex-none w-4 h-4 -rotate-45 stroke-gray-900" viewBox="0 0 24 24"
                                    fill="none" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit"
                                class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-bold text-white border h-11 bg-blue rounded-xl border-blue hover:bg-blue-hover">
                                Update
                            </button>
                        </div>

                        <div>
                            <label class="inline-flex items-center font-normal">
                                <input class="bg-gray-200 rounded form-checkbox" name="notify-voters" type="checkbox"
                                    checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="items-center hidden space-x-3 md:flex">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl leading-snug">
                    12
                </div>
                <div class="text-xs leading-none text-gray-400">
                    Votes
                </div>
            </div>

            <button type="button"
                class="w-32 px-6 py-3 text-xs font-bold uppercase bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                <span>Vote</span>
            </button>
        </div>
    </div>

    <div class="relative pt-6 my-8 mt-1 ml-0 space-y-6 comments-container md:ml-22">
        <div class="relative flex mt-4 bg-white comment-container rounded-xl">
            <div class="flex flex-col flex-1 py-6 mx-4 md:flex-row md:mx-0 md:px-4">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                </div>
                <div class="mx-0 md:mx-4 md:w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <p class="mt-3 text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center justify-between space-x-2 font-semibold text-gray-400 text-xxs">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button type="button" @click="isOpen = !isOpen" type="button"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.150ms
                                    @click.away="isOpen = false" @keydown.escape.window="isOpen = false"
                                    class="absolute right-0 z-10 py-3 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl md:ml-8 top-8 md:top-6 md:left-0">
                                    <li>
                                        <a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Mark as spam
                                        </a>
                                        <a href="#"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
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

        <div class="relative flex mt-4 bg-white border-2 is-admin comment-container rounded-xl border-blue">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                    <div class="mt-1 font-bold text-center uppercase text-blue text-xxs">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <p class="mt-3 text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center justify-between space-x-2 font-semibold text-gray-400 text-xxs">
                            <div class="font-bold text-blue">Andreea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="button"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                {{-- <ul
                                class="absolute py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                        Mark as spam
                                    </a>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
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

        <div class="relative flex mt-4 bg-white comment-container rounded-xl">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="Avatar"
                            class="w-14 h-14 rounded-xl" />
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <p class="mt-3 text-gray-600">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s
                    </p>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center justify-between space-x-2 font-semibold text-gray-400 text-xxs">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button type="button"
                                class="relative px-3 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                {{-- <ul
                                class="absolute py-3 ml-8 font-semibold text-left bg-white w-44 shadow-dialog rounded-xl">
                                <li>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                        Mark as spam
                                    </a>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
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
