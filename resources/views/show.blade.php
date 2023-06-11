<x-app-layout>
    <div class="">
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex mt-4">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none"><a href="#"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a></div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go
                        here</a></h4>
                <div class="text-gray-600 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Culpa
                    repellat a
                    mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt
                    consequatur
                    deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis
                    consequatur
                    distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi,
                    amet blanditiis
                    veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero
                    fugit officiis
                    ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque!
                    Tenetur non
                    modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt
                    veritatis, culpa
                    doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            open</div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6">
                                <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                            </svg>
                            <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark
                                        as
                                        Spam</a>
                                </li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete
                                        Post</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End of idea-container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button" class="text-white flex items-center justify-center w-32 h-11 text-xs bg-blue text-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                <span class="ml-1">Reply</span>
            </button>
            <button type="button" class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 text-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button" class="w-32 h-11 text-xs uppercase bg-gray-200 text-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>vote</span>


            </button>
        </div>
    </div> <!-- End of buttons-container -->
    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none"><a href="#"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl"></a></div>
                <div class="w-full mx-4">
                    <!-- <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go
                            here</a></h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Culpa
                        repellat a
                        mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt
                        consequatur
                        deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis
                        consequatur
                        distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi,
                        amet blanditiis
                        veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero
                        fugit officiis
                        ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque!
                        Tenetur non
                        modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt
                        veritatis, culpa
                        doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark
                                            as
                                            Spam</a>
                                    </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of comment-container -->
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none"><a href="#"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                    <div class="text-center text-blue uppercase text-xs font-bold mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Status changed to "Under Construction"</a></h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Culpa
                        repellat a
                        mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt
                        consequatur
                        deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis
                        consequatur
                        distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi,
                        amet blanditiis
                        veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero
                        fugit officiis
                        ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque!
                        Tenetur non
                        modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt
                        veritatis, culpa
                        doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark
                                            as
                                            Spam</a>
                                    </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of comment-container -->
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none"><a href="#"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl"></a></div>
                <div class="w-full mx-4">
                    <!-- <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go
                            here</a></h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Culpa
                        repellat a
                        mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt
                        consequatur
                        deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis
                        consequatur
                        distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi,
                        amet blanditiis
                        veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero
                        fugit officiis
                        ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque!
                        Tenetur non
                        modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt
                        veritatis, culpa
                        doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark
                                            as
                                            Spam</a>
                                    </li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of comment-container -->
    </div> <!-- End of comments-container -->
</x-app-layout>