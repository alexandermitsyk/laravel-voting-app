<x-app-layout>
    <div class="flex flex-col space-y-2 filters md:flex-row md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl py2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select name="other-filters" id="other-filters" class="w-full border-none rounded-xl py2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
            </select>
        </div>

        <div class="relative w-full md:w-2/3">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <input type="search" placeholder="Find an idea"
                class="w-full px-4 py-2 pl-8 placeholder-gray-500 bg-white border-none rounded-xl" />
        </div>
    </div>

    <div class="bg-green bg-red bg-purple"></div>

    <div class="my-6 space-y-6 ideas-container">
        @foreach ($ideas as $idea)
            <div x-data
                @click="const clicked = $event.target
                const target = clicked.tagName.toLowerCase()
                const ignores = ['button', 'svg', 'path', 'a']
                if (! ignores.includes(target)) {
                    clicked.closest('.idea-container').querySelector('.idea-link').click()
                }"
                class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container rounded-xl hover:shadow-card">
                <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
                    <div class="text-center">
                        <div class="text-2xl font-semibold">
                            12
                        </div>
                        <div class="text-gray-500">
                            Vote
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="button"
                            class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 rounded-xl text-xxs hover:border-gray-400">
                            Vote
                        </button>
                    </div>
                </div>

                <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
                    <div class="flex-none mx-2 md:mx-0">
                        <a href="#" class="">
                            <img src="{{ $idea->user->getAvatar() }}" alt="Avatar" class="w-14 h-14 rounded-xl" />
                        </a>
                    </div>
                    <div class="flex flex-col justify-between mx-2 md:w-full">
                        <h4 class="mt-2 text-xl font-semibold md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}"
                                class="idea-link hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <p class="mt-3 text-gray-600 line-clamp-3">
                            {{ $idea->description }}
                        </p>

                        <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                            <div
                                class="flex items-center space-x-2 font-semibold text-gray-400 text-xxs md:justify-between">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>{{ $idea->category->name }}</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div x-data="{ isOpen: false }" class="flex items-center mt-4 space-x-2 md:mt-0">
                                <div
                                    class="{{ $idea->status->classes }} px-4 py-2 font-bold leading-none text-center uppercase rounded-full text-xxs w-28 h-7">
                                    {{ $idea->status->name }}</div>

                                <button type="button" @click="isOpen = !isOpen"
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
        @endforeach
    </div>
    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
