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
        <header>
            <div class="header">
                
                <div class="">
                    <p>Ваш город:
                        <select name="" id="">
                            <option value="Челябинск">Челябинск</option>
                            <option value="Екатеренбург">Екатеренбург</option>
                            <option value="Москва">Москва</option>
                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                            <option value="Саратов">Саратов</option>
                        </select></p>
                    </div>
                    <div class="header-menu">
                        <a href="">Акции</a>
                        <a href="">О компании</a>
                        <a href="">Адреса</a>
                        <a href="">Контакты</a>
                    </div>
                    <p class="">8 (900) 000 00 00</p>
            </div>
            <div class="line"></div>
            <div class="header">
                <img src="../resources/view/img/logo.svg" alt="">
                <!-- настроить картинку лого(не отображается возможно проблема в путе) -->
                 <div class="flex gap-2">
                    <button class="but_color px-2.5 py-2"><img src="" alt="">Каталог</button><!--картинка бургерного меню-->
                    <div class="search">
                        <img src="" alt=""><!--картинка лупы-->
                        <input class="rounded-lg inp_sear" type="text" placeholder="Поиск">
                    </div>
                 </div>
                 <div class="">
                    <button class=""><img src="" alt=""></button><!--картинка Покупки -->
                    <button><img src="" alt=""></button><!--картинка Профиль-->
                 </div>
            </div>
        </header>
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
                <p class="text-3xl pt-10 pb-4 pl-10">Акции и скидки</p>
                <div class="flex gap-2.5 px-10">

                    <div class="left">
                        <div class="flex items-center gap-8 px-7">
                            <div class="">
                                <p class="mini">Новинка 2025</p>
                                <p class="osnov">Мега скидка 30% на все <br>фильтры</p>
                            </div>
                            <p class="blue">-30%</p>
                        </div>
                        <button class="but_podrob">Подробнее -></button>
                    </div>
                    <div class="cent">
                        <div class="">
                            <p class="mini">Мега скидки</p>
                            <p class="osnov">Бесплатная <br> доставка при <br> заказе от 10 000 ₽</p>
                        </div>
                        <img src="" alt=""><!--картинка шестерни и гаяного ключа-->
                        <button class="but_podrob">Подробнее -></button>
                    </div>
                    <div class="right"></div>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>
