<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased catalog">
    <x-header></x-header>
    <div class="catalog-main bg-[#F7F7F7]">
        <div class="catalog-left-panel">
            <p class="route">Главная / Каталог товаров</p>
            <h3 class="text-[24px] font-semibold my-[12px]">Каталог товаров</h3>
            <div class="filter__section mb-[32px]">
                <div class="filter-delivery">
                    <div class="filter-delivery__container">
                        <div class="filter-delivery__slider">
                            <div class="filter-delivery__progress"></div>
                        </div>
                        <input type="range" class="filter-delivery__range min" min="0" max="100000" value="30000" tabindex="0">
                        <input type="range" class="filter-delivery__range min" min="0" max="99999" value="70000" tabindex="0">
                    </div>
                    <div class="filter-delivery__values">
      <div class="filter-deliver-container-sec"><input type="text" class="filter-delivery__min" value="30000" disabled>₽</div>
      <div class="filter-deliver-container-sec"><input type="text" class="filter-delivery__max" value="70000" disabled>₽</div>
                    </div>
                </div>
            </div>
            <div class="checkbox-div">
                <h5 class="text-[18px] mb-[20px] font-semibold">Категория</h5>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
            </div>
            <div class="checkbox-div">
                <h5 class="text-[18px] mb-[20px] font-semibold">Брэнд</h5>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
                <div>
                <input type="checkbox">Option
                </div>
            </div>
        </div>
        <div class="catalog-right-panel">
        <div class="card-container">
    @forelse($products as $product)
        <x-product-card :product="$product" />
    @empty
        <p>Товары не найдены</p>
    @endforelse
</div>
            <div class="flex items-center gap-2 mb-[60px]">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                1
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                2
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                3
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
<script>
    const rangeInput = document.querySelectorAll('.filter-delivery__range');
const progress = document.querySelector('.filter-delivery__progress');
const minValue = document.querySelector('.filter-delivery__min');
const maxValue = document.querySelector('.filter-delivery__max');

rangeInput.forEach(input => {
    input.addEventListener('input', e => {
        let minVal = parseInt(rangeInput[0].value);
        let maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < 0) {
            if (e.target.classList.contains('min')) {
                rangeInput[0].value = maxVal;
            } else {
                rangeInput[1].value = minVal;
            }
        } else {
            minValue.value = minVal;
            maxValue.value = maxVal;
            
            progress.style.left = (minVal / rangeInput[0].max) * 100 + '%';
            progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + '%';
        }
    });
});
</script>

</html>