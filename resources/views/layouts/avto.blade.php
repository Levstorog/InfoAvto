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
                <div class="hide">
                    <p class="title mb-5">Запчасти <br>для коммерческой <br>техники и спецтехники</p>
                    <p class="main_text mb-10">Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. <br>Мы помогаем механикам, автопаркам и сервисным центрам держать технику <br>в строю, поставляя качественные запчасти для грузовиков, автобусов, спецтехники <br>и прицепов — точно в срок и по лучшей цене.</p>
                    <button class="but_color px-12 py-3">Стать клиентом</button>
                </div>
                <div class="no_hide">
                    <p class="text-5xl pb-2">Запчасти для коммерческой техники и спецтехники</p>
                        <p class="text-3xl pb-4">Быстро, надежно, без простоев</p>
                        <button class="but_color px-12 py-3">Стать клиентом</button>
                </div>
            </div>
            <div class="block_2">
                <div class="hide justify-center">
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
                <div class="no_hide">
                    <div class="flex justify-evenly gap-8">
                        <button class="text-[24px]">&lt;</button>
                        <div class="text-center">
                            <p class="tsize-14">Широкий ассортимент</p>
                            <p class="tsize-12">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</p>
                        </div>
                        <button class="text-[24px]">&gt;</button>
                    </div>
                </div>
            </div>
            <div class="block_3">
                <p class="text-3xl pt-10 pb-4 pl-28">Акции и скидки</p>
                <div class="block_sale">
                    <div class="left">
                        <div class="flex items-center gap-8 pt-7 pl-7">
                            <div class="">
                                <p class="mini">Новинка 2025</p>
                                <p class="osnov">Мега скидка 30% на все <br>фильтры</p>
                            </div>
                            <p class="blue">-30%</p>
                        </div>
                        <button class="but_podrob1">Подробнее ➜</button>
                    </div>
                    <div class="cent p-7">
                        <div class="pb-10">
                            <p class="mini">Мега скидки</p>
                            <p class="osnov">Бесплатная <br> доставка при <br> заказе от 10 000 ₽</p>
                        </div>
                        <img src="./img/tool.svg" alt="">
                        <button class="but_podrob2">Подробнее ➜</button>
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
                                <button class="but_podrob3">Подробнее ➜</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_3_adaptiv">
                <p class="text-3xl pt-10 pb-4 pl-28">Акции и скидки</p>
                <div class="flex justify-between bg-[#f1f1f1] mx-[10%] py-[18px] px-[16px] mb-[8px]">
                    <div class="">
                        <p class="mini">Новинка 2025</p>
                        <p class="osnov pb-[20px]">Мега скидка 30% на все <br>фильтры</p>
                        <button class="text-[#0075b1]">Подробнее ➜</button>
                    </div>
                    <p class="blue">-30%</p>
                </div>
                <div class="flex justify-between bg-[#f1f1f1] mx-[10%] py-[18px] px-[16px] mb-[8px]">
                    <div class="">
                        <p class="mini">Мега скидки</p>
                        <p class="osnov pb-[20px]">Бесплатная доставка при заказе<br>от 10 000 ₽</p>
                        <button class="text-[#0075b1]">Подробнее ➜</button>
                    </div>
                    <img src="./img/tool.svg" alt="">
                </div>
                <div class="flex justify-between bg-[#0075B1] mx-[10%] pt-[18px] px-[16px] mb-[8px] text-white">
                    <div class="">
                        <p class="text-[12px]">Мега скидки</p>
                        <p class="osnov pb-[20px]">Мега скидка 30% на все <br>фильтры</p>
                        <button class="text-white">Подробнее ➜</button>
                    </div>
                    <img src="./img/wheel.svg" alt="">
                </div>
                <div class="flex justify-between bg-[#f1f1f1] mx-[10%] py-[18px] px-[16px]">
                    <div class="">
                        <p class="mini">Мега скидки</p>
                        <p class="osnov pb-[20px]">Второй товар - со скидкой 50%</p>
                        <button class="text-[#0075b1]">Подробнее ➜</button>
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
                    <div class="pt-[30px] pb-[35px] text-center">
                        <p class="text-2xl">Работаете с техникой — работайте с профессионалами</p>
                        <p class="text-sm">Оставьте заявку или позвоните нам — наши специалисты быстро подберут запчасти под ваш <br> транспорт.</p>
                        <p class="hide_text">Подберем нужную<br>запчасть за 5 минут</p>
                    </div>
                    <div class="block_inp">

                            <select name="" id="">
                                <option value="" >Услуги</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>

                            <select name="" id="">
                                <option value="">Марка</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            <!-- Дата и время
                            <select name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select> -->
                            <input type="date">
                            <select name="" id="">
                                <option value="">Филиал</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        <input class="text-black" type="text" placeholder="E-mail">
                        <input class="text-black" type="text" placeholder="Имя">
                        <button class="but_color px-[28px] py-2">Отправить</button>
                    </div>
                </div>
            </div>
            <div class="block_6 p-10">
                <div class="flex justify-between mb-[50px]">
                    <p class="text-[32px]">Новости</p>
                    <div class="text-xl flex items-center gap-3">
                        <button>&lt;</button>
                        |
                        <button>&gt;</button>
                    </div>
                </div>
                <div class="cards flex gap-[30px] justify-center">
                    <div class="card">
                        <img src="./img/block6img1.svg" alt="">
                        <div class="px-[17px] py-5">
                            <p class="text-lg">Новая поставка оригинальных запчастей</p>
                            <p class="text-sm text-[#707070]">Мы обновили склад — в наличии новые позиции. 
                                <br>Быстрая отгрузка и гарантия качества на все детали.</p>
                                <p class="text-sm text-[#707070]">21.11.2025</p>
                            </div>
                    </div>
                    <div class="card">
                        <img src="./img/block6img3.svg" alt="">
                        <div class="px-[17px] py-5">
                            <p class="text-lg">Теперь доставка в день заказа!</p>
                            <p class="text-sm text-[#707070]">Для клиентов из Челябинска и области - экспресс-доставка автозапчастей <br>прямо в ваш сервис или на стоянку.</p>
                            <p class="text-sm text-[#707070]">18.11.2025</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/block6img4.svg" alt="">
                        <div class="px-[17px] py-5">
                            <p class="text-lg">Теперь доставка в день заказа!</p>
                            <p class="text-sm text-[#707070]">Для клиентов из Челябинска и области - экспресс-доставка автозапчастей <br>прямо в сервис или стоянку.</p>
                            <p class="text-sm text-[#707070]">12.11.2025</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/block6img2.svg" alt="">
                        <div class="px-[17px] py-5">
                            <p class="text-lg">Новая поставка оригинальных запчастей</p>
                            <p class="text-sm text-[#707070]">Мы обновили склад — в наличии новые позиции. 
                                <br>Быстрая отгрузка и гарантия качества на все детали.</p>
                            <p class="text-sm text-[#707070]">11.11.2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <x-footer></x-footer>
    </body>
</html>
