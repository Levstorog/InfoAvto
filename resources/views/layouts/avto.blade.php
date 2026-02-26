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
    <body class="font-sans antialiased">   
        <x-header></x-header>
        <main>
            <div class="block_1">
                <p class="title mb-5">Запчасти <br>для коммерческой <br>техники и спецтехники</p>
                <p class="main_text mb-10">Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. <br>Мы помогаем механикам, автопаркам и сервисным центрам держать технику <br>в строю, поставляя качественные запчасти для грузовиков, автобусов, спецтехники <br>и прицепов — точно в срок и по лучшей цене.</p>
                <button class="but_color px-12 py-3">Стать клиентом</button>
            </div>
            <div class="block_2">
                <div class="w-44">
                    <p class="tsize-14">Широкий ассортимент</p>
                    <p class="tsize-12">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</p>
                </div>
                    <div class="line_vert"></div>
                <div class="w-44">
                    <p class="tsize-14">Проверенные поставщики</p>
                    <p class="tsize-12">Оригинал и надежные аналоги от ведущих брендов.</p>
                </div>
                    <div class="line_vert"></div>
                <div class="w-44">
                    <p class="tsize-14">Быстрая доставка по РФ</p>
                    <p class="tsize-12">Работаем с надежными ТК, отправляем в день заказа.</p>
                </div>
                    <div class="line_vert"></div>
                <div class="w-44">
                    <p class="tsize-14">Помощь в подборе</p>
                    <p class="tsize-12">Наши специалисты помогут найти нужную деталь по VIN, артикулу или фото.</p>
                </div>
                    <div class="line_vert"></div>
                <div class="w-44">
                    <p class="tsize-14">Оплата, как удобно</p>
                    <p class="tsize-12">Для юрлиц и ИП, безналичный расчет, отсрочка постоянным клиентам.</p>
                </div>
            </div>
            <div class="block_3">
                <p class="text-3xl pt-10 pb-4 pl-28">Акции и скидки</p>
                <div class="flex gap-2.5 px-10 mb-5 justify-center"><!--justify-center центрация по центру но по макету должно быть отступами по бокам 40px-->

                    <div class="left">
                        <div class="flex items-center gap-8 pt-7 pl-7">
                            <div class="">
                                <p class="mini">Новинка 2025</p>
                                <p class="osnov">Мега скидка 30% на все <br>фильтры</p>
                            </div>
                            <p class="blue">-30%</p>
                        </div>
                        <button class="but_podrob pl-7">Подробнее ➜</button>
                    </div>
                    <div class="cent p-7">
                        <div class="pb-10">
                            <p class="mini">Мега скидки</p>
                            <p class="osnov">Бесплатная <br> доставка при <br> заказе от 10 000 ₽</p>
                        </div>
                        <img src="./img/tool.svg" alt="">
                        <button class="but_podrob">Подробнее ➜</button>
                    </div>
                    <div class="right">
                        <div class="up flex">
                            <div class="pt-[30px] pl-[30px]">
                                <p class="text-xs text-[#F7F7F7] pb-[10px]">Мега скидки</p>
                                <p class="text-lg font-semibold text-white pb-7">Сезонное ТО со<br>скидкой</p>
                                <button class="text-white">Подробнее ➜</button>
                            </div>
                            <img src="./img/wheel.svg" alt="">
                        </div>
                        <div class="down">
                            <div class="">
                                <div class="float-right p-[30px]">
                                    <p class="mini">Мега скидки</p>
                                    <p class="osnov">Второй товар —<br>со скидкой 50%</p>
                                </div>
                                <button class="but_podrob pl-[30px] pt-[137px]">Подробнее ➜</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_4 px-10 py-5 bg-[#F7F7F7]">
                <div class="flex justify-between mb-[50px]">
                    <p class="text-3xl">Популярные товары</p>
                    <div class="text-xl">
                        <button>&lt;</button>
                        |
                        <button>&gt;</button>
                    </div>
                </div>
                <div class="cards flex gap-7 justify-center">

                    <div class="card">
                        <img class="rounded-[10px]" src="./img/populity_product.svg" alt="">
                        <p class="title_card text-sm">Предохранитель Круглый 40A (36VDC)</p>
                        <p class="count text-xs text-[#929292]">пласт. (уп. по 50 шт)</p>
                        <div class="flex gap-[10px] items-center">
                            <p class="price text-[16px]">908.00₽</p>
                            <strike class="sale text-[#929292] text-[12px]">15 000₽</strike>
                        </div>
                        <button class="but_color px-[12px] py-[8px]">Купить</button>
                    </div>
                    <div class="card">
                        <img class="rounded-[10px]" src="./img/populity_product.svg" alt="">
                        <p class="title_card text-sm">Предохранитель Круглый 40A (36VDC)</p>
                        <p class="count text-xs text-[#929292]">пласт. (уп. по 50 шт)</p>
                        <div class="flex gap-[10px] items-center">
                            <p class="price text-[16px]">908.00₽</p>
                            <strike class="sale text-[#929292] text-[12px]">15 000₽</strike>
                        </div>
                        <button class="but_color px-[12px] py-[8px]">Купить</button>
                    </div>
                    <div class="card">
                        <img class="rounded-[10px]" src="./img/populity_product.svg" alt="">
                        <p class="title_card text-sm">Предохранитель Круглый 40A (36VDC)</p>
                        <p class="count text-xs text-[#929292]">пласт. (уп. по 50 шт)</p>
                        <div class="flex gap-[10px] items-center">
                            <p class="price text-[16px]">908.00₽</p>
                            <strike class="sale text-[#929292] text-[12px]">15 000₽</strike>
                        </div>
                        <button class="but_color px-[12px] py-[8px]">Купить</button>
                    </div>
                    <div class="card">
                        <img class="rounded-[10px]" src="./img/populity_product.svg" alt="">
                        <p class="title_card text-sm">Предохранитель Круглый 40A (36VDC)</p>
                        <p class="count text-xs text-[#929292]">пласт. (уп. по 50 шт)</p>
                        <div class="flex gap-[10px] items-center">
                            <p class="price text-[16px]">908.00₽</p>
                            <strike class="sale text-[#929292] text-[12px]">15 000₽</strike>
                        </div>
                        <button class="but_color px-[12px] py-[8px]">Купить</button>
                    </div>
                    <div class="card">
                        <img class="rounded-[10px]" src="./img/populity_product.svg" alt="">
                        <p class="title_card text-sm">Предохранитель Круглый 40A (36VDC)</p>
                        <p class="count text-xs text-[#929292]">пласт. (уп. по 50 шт)</p>
                        <div class="flex gap-[10px] items-center">
                            <p class="price text-[16px]">908.00₽</p>
                            <strike class="sale text-[#929292] text-[12px]">15 000₽</strike>
                        </div>
                        <button class="but_color px-[12px] py-[8px]">Купить</button>
                    </div>
                </div>
            </div>
            <div class="block_5">
                <div class="form">

                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>
