<x-app-layout>
  <div class="filters flex space-x-6">
    <div class="w-1/3">
      <select name="category" id="category " class="w-full rounded-xl px-4 py-2 border-none">
        <option value="Category One">Category One</option>
        <option value="Category Two">Category Two</option>
        <option value="Category Three">Category Three</option>
        <option value="Category Four">Category Four</option>
      </select>
    </div>
    <div class="w-1/3">
      <select name="other_filters" id="other_filters " class="w-full rounded-xl px-4 py-2 border-none">
        <option value="Filter One">Filter One</option>
        <option value="Filter Two">Filter Two</option>
        <option value="Filter Three">Filter Three</option>
        <option value="Filter Four">Filter Four</option>
      </select>
    </div>
    <div class="w-2/3 relative">


      <input type="search" placeholder="Find an idea"
        class="placeholder:text-gray-900 w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">
      <div class="absolute top-0 flex items-center h-full ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-4 text-gray-700">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
      </div>
    </div>

  </div>

  <div class="ideas-container space-y-6 my-6">
    <div
      class="idea-container hover:shadow-md  cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
            class="w-14 h-14 rounded-xl"></a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go here</a></h4>
          <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
            repellat a
            mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt consequatur
            deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis consequatur
            distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi, amet blanditiis
            veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero fugit officiis
            ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque! Tenetur non
            modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt veritatis, culpa
            doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div
                class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                open</div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                <svg fill="currentColor" width="24" height="6">
                  <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                    style="color: rgba(163, 163, 163, .5)">
                </svg>
                <ul class="absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                  <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as
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
    </div> <!-- End of idea container -->
    <div
      class="idea-container hover:shadow-md  cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button
            class="w-20 bg-cyan-700 text-white border border-white hover:border-cyan-900 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Voted</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
            class="w-14 h-14 rounded-xl"></a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go here</a></h4>
          <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
            repellat a
            mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt consequatur
            deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis consequatur
            distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi, amet blanditiis
            veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero fugit officiis
            ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque! Tenetur non
            modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt veritatis, culpa
            doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div
                class="bg-amber-400 text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                In Progress</div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                <svg fill="currentColor" width="24" height="6">
                  <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                    style="color: rgba(163, 163, 163, .5)">
                </svg>
                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                  <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as
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
    </div> <!-- End of idea container -->
    <div
      class="idea-container hover:shadow-md  cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 border border-blue-200 hover:border-blue-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
            class="w-14 h-14 rounded-xl"></a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go here</a></h4>
          <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
            repellat a
            mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt consequatur
            deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis consequatur
            distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi, amet blanditiis
            veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero fugit officiis
            ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque! Tenetur non
            modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt veritatis, culpa
            doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div
                class="bg-red text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                closed</div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                <svg fill="currentColor" width="24" height="6">
                  <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                    style="color: rgba(163, 163, 163, .5)">
                </svg>
                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                  <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as
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
    </div> <!-- End of idea container -->
    <div
      class="idea-container hover:shadow-md  cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 border border-blue-200 hover:border-blue-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
            class="w-14 h-14 rounded-xl"></a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go here</a></h4>
          <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
            repellat a
            mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt consequatur
            deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis consequatur
            distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi, amet blanditiis
            veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero fugit officiis
            ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque! Tenetur non
            modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt veritatis, culpa
            doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div
                class="bg-green text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                implemented</div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                <svg fill="currentColor" width="24" height="6">
                  <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                    style="color: rgba(163, 163, 163, .5)">
                </svg>
                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                  <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as
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
    </div> <!-- End of idea container -->
    <div
      class="idea-container hover:shadow-md  cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 border border-blue-200 hover:border-blue-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
            class="w-14 h-14 rounded-xl"></a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random title can go here</a></h4>
          <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa
            repellat a
            mollitia. Eius ea placeat eos eum, nostrum ullam expedita aliquam, provident nisi nesciunt consequatur
            deserunt suscipit est perspiciatis earum! Quia neque suscipit natus non labore facilis consequatur
            distinctio numquam ullam doloribus aperiam similique delectus reprehenderit, pariatur animi, amet blanditiis
            veritatis consequuntur repellendus nesciunt? Corporis reiciendis voluptate magnam ipsa libero fugit officiis
            ad asperiores vel, tempore mollitia voluptatem inventore corrupti numquam iste maxime itaque! Tenetur non
            modi voluptas labore fugiat quasi saepe eveniet eos dolorem autem molestias odit incidunt veritatis, culpa
            doloribus libero? Repellendus laborum praesentium quae doloribus, deserunt aut!
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div
                class="bg-purple text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                Considering</div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                <svg fill="currentColor" width="24" height="6">
                  <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                    style="color: rgba(163, 163, 163, .5)">
                </svg>
                <ul class="hidden absolute w-40 text-left font-semibold bg-white shadow-xl rounded-xl py-3 ">
                  <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as
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
    </div> <!-- End of idea container -->
  </div> <!--  End of ideas container-->
</x-app-layout>