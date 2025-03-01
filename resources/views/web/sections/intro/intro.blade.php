<section aria-labelledby="intro-title" aria-describedby="intro-description"
    class="w-full pt-[150px] md:pt-[200px] bg-no-repeat bg-cover bg-center"
    style="background-image: url({{ asset('images/petcare-large.jpg') }})">
    <x-container>
        <div class="w-full grid-cols-1 gap-4 md:grid-cols-3 pb-12 md:pb-[96p]">
            {{-- колонка слева --}}
            <div class="gap-y-6 col-span-1 md:col-span-2 w-full text-center">
                <h1 class="text-black font-bold text-[52px] leading-[64px] md:text-[80px] md:leading-[88px] text-center w-full"
                    id="intro-title">Lifestyle</h1>
                <div class="text-black font-normal justify-center">
                    <p id="intro-description">The latest and best lifestyle articles selected <br> by our editorial office </p>
                </div>
            </div>
        </div>
    </x-container>
    <div class="bg-gray-200 py-[64px]">
        <x-container>
            <div class="justify-between flex">
                <div class="">
                    <img src="{{ asset('images/Logo 1.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </div>
                <div class="">
                    <img src="{{ asset('images/Logo 2.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </div>
                <div class="">
                    <img src="{{ asset('images/Logo 1.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </div>
                <div class="">
                    <img src="{{ asset('images/Logo 2.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </div>
                <div class="">
                    <img src="{{ asset('images/Logo 1.svg') }}" alt="Логтип сайта {{ config('app.name')}}" class="">
                </div>
            </div>
        </x-container>
    </div>
</section>
