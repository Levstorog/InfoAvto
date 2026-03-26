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
        <div class="flex gap-2 media-catalog">
            <h3 class="text-[24px] font-semibold my-[12px]">Каталог товаров</h3>
            <div class="flex flex-row items-center gap-1">
                <div class="search catalog-search">
                    <div class="flex items-center catalog-search">
                        <input class="img_search rounded-lg inp_sear catalog-search" type="text" placeholder="Поиск">
                    </div>
                </div>
                <button class="but_color px-2.5 py-2 flex items-center gap-1 h-max filter-btn" id="filterBtn">
                    <img src="./img/catalog-menu.png" alt="">
                </button>
            </div>
        </div>

        <div class="filter-modal-overlay" id="filterModalOverlay">
            <div class="filter-modal">
                <div class="filter-modal-header">
                    <h4 class="filter-modal-title">Фильтры</h4>
                    <button class="filter-modal-close" id="closeFilterModal">&times;</button>
                </div>
                <div class="filter-modal-body">
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
                <div class="filter-modal-footer">
                    <span class="filter-clear-text" id="clearFilters">Очистить фильтры</span>
                </div>
            </div>
        </div>

        <div class="catalog-left-panel desktop-only">
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
            @if(method_exists($products, 'links'))
            <div class="flex items-center justify-center gap-2 mb-[60px] mt-8">
                @if ($products->onFirstPage())
                <span class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
                @else
                <a href="{{ $products->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                @endif
                @php
                $currentPage = $products->currentPage();
                $lastPage = $products->lastPage();
                $start = max(1, $currentPage - 2);
                $end = min($lastPage, $currentPage + 2);
                @endphp

                @if ($start > 1)
                <a href="{{ $products->url(1) }}" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">1</a>
                @if ($start > 2)
                <span class="px-2 text-gray-400">...</span>
                @endif
                @endif

                @for ($i = $start; $i <= $end; $i++)
                    @if ($i==$currentPage)
                    <span class="w-10 h-10 flex items-center justify-center rounded-lg border border-blue-500 bg-blue-500 text-white font-semibold">
                    {{ $i }}
                    </span>
                    @else
                    <a href="{{ $products->url($i) }}" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                        {{ $i }}
                    </a>
                    @endif
                    @endfor

                    @if ($end < $lastPage)
                        @if ($end < $lastPage - 1)
                        <span class="px-2 text-gray-400">...</span>
                        @endif
                        <a href="{{ $products->url($lastPage) }}" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                            {{ $lastPage }}
                        </a>
                        @endif
                        @if ($products->hasMorePages())
                        <a href="{{ $products->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-white text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        @else
                        <span class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                        @endif
            </div>
            @endif
        </div>
    </div>
    <x-footer></x-footer>
</body>
<script>
    const rangeInput = document.querySelectorAll('.filter-delivery__range');
    const progress = document.querySelectorAll('.filter-delivery__progress');

    function updateProgress() {
        rangeInput.forEach(input => {
            const container = input.closest('.filter-delivery');
            if (!container) return;
            const progressBar = container.querySelector('.filter-delivery__progress');
            const minValue = container.querySelector('.filter-delivery__min');
            const maxValue = container.querySelector('.filter-delivery__max');
            const minInput = container.querySelectorAll('.filter-delivery__range')[0];
            const maxInput = container.querySelectorAll('.filter-delivery__range')[1];

            if (minInput && maxInput && progressBar && minValue && maxValue) {
                let minVal = parseInt(minInput.value);
                let maxVal = parseInt(maxInput.value);

                if (maxVal - minVal < 0) {
                } else {
                    minValue.value = minVal;
                    maxValue.value = maxVal;
                    progressBar.style.left = (minVal / minInput.max) * 100 + '%';
                    progressBar.style.right = 100 - (maxVal / maxInput.max) * 100 + '%';
                }
            }
        });
    }

    rangeInput.forEach(input => {
        input.addEventListener('input', e => {
            const container = e.target.closest('.filter-delivery');
            const minInput = container.querySelectorAll('.filter-delivery__range')[0];
            const maxInput = container.querySelectorAll('.filter-delivery__range')[1];
            let minVal = parseInt(minInput.value);
            let maxVal = parseInt(maxInput.value);

            if (maxVal - minVal < 0) {
                if (e.target.classList.contains('min')) {
                    minInput.value = maxVal;
                } else {
                    maxInput.value = minVal;
                }
            }
            updateProgress();
        });
    });

    const filterBtn = document.getElementById('filterBtn');
    const modalOverlay = document.getElementById('filterModalOverlay');
    const closeModalBtn = document.getElementById('closeFilterModal');
    const clearFiltersText = document.getElementById('clearFilters');

    function openModal() {
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    filterBtn.addEventListener('click', openModal);
    closeModalBtn.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) closeModal();
    });

    clearFiltersText.addEventListener('click', () => {
        document.querySelectorAll('.filter-delivery__range').forEach(input => {
            if (input.classList.contains('min')) {
                input.value = input.min;
            } else {
                input.value = input.max;
            }
        });
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.checked = false;
        });
        updateProgress();
    });

    updateProgress();
</script>

</html>