<header class="border-b border-gray-700 py-2.5">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="">
                <a href=" {{route('page.home') }}" class="text-2xl">
                    <i class='bx bxl-sketch'></i>
                </a>
            </div>
            <nav>
                <ul class="flex text-gray-400 text-lg gap-2">
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Web</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Sports</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Opinion</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Lifestyle</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Business</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Culture</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Fashion</a>
                    </li>
                    <li class="">
                        <a href="" class="hover:text-gray-800 hover:font-semibold">Tech</a>
                    </li>
                </ul>
            </nav>
            <div class="">
                <img class="w-[50px] h-[50px] rounded-full" src="{{ asset('storage/image/prod1.jpg') }}" alt="">
            </div>
        </div>
    </x-container>
</header>
