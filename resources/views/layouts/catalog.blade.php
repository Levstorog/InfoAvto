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
    <div class="catalog-main">
        <div class="catalog-left-panel">
            <p class="route">Главная / Каталог товаров</p>
            <h3>Каталог товаров</h3>
            <div class="filter__section">
                <h3>Срок поставки</h3>
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
                <h5>Категория</h5>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
            </div>
            <div class="checkbox-div">
                <h5>Брэнд</h5>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
                <input type="checkbox">Option</br>
            </div>
        </div>
        <div class="catalog-right-panel">
            @for($i = 0; $i < 12; $i++)
                <x-product-card></x-product-card>
                @endfor

        </div>
    </div>
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