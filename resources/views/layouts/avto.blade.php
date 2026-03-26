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
                <div class="hide hide_block2 justify-center">
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

        <div class="card-container">
    @forelse($products->take(4) as $product)
        <x-product-card :product="$product" />
    @empty
        <p>Товары не найдены</p>
    @endforelse
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
                        <form action="" class="block_inp">

                            <select name="" id="usl">
                                <option value="" >Услуги</option>
                                <option value="">Диагностика</option>
                                <option value="">ремонт</option>
                            </select>
                            
                            <select name="" id="mark">
                                <option value="">Марка</option>
                                <option value="">BMW</option>
                                <option value="">LADA</option>
                            </select>
                            <!-- Дата и время
                            <select name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select> -->
                            <input type="date" id="date">
                            <select name="" id="fil">
                                <option value="">Филиал</option>
                                <option value="">Челябинск</option>
                                <option value="">Не Челябинск</option>
                            </select>
                            <input id="email" class="text-black" type="text" placeholder="E-mail">
                            <input id="name" class="text-black" type="text" placeholder="Имя">
                            <button type="reset" id="submit-btn" class="but_color px-[28px] py-2">Отправить</button>
                        </form>

                </div>
            </div>

<div class="block_6 p-10">
    <div class="flex justify-between mb-[50px]">
        <p class="text-[32px]">Новости</p>
        <div class="text-xl flex items-center gap-3">
            <button id="prevBtn" class="w-10 h-10 rounded-full bg-white shadow-md hover:bg-gray-100 flex items-center justify-center text-xl transition">&lt;</button>
            |
            <button id="nextBtn" class="w-10 h-10 rounded-full bg-white shadow-md hover:bg-gray-100 flex items-center justify-center text-xl transition">&gt;</button>
        </div>
    </div>
    
    <div class="slider-container overflow-hidden w-full">
        <div class="slider-track flex transition-transform duration-500 ease-out gap-[30px]" id="sliderTrack"></div>
    </div>
    
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cardsData = [
        {
            img: "{{ asset('img/block6img1.svg') }}",
            title: "Новая поставка оригинальных запчастей",
            desc: "Мы обновили склад — в наличии новые позиции. Быстрая отгрузка и гарантия качества на все детали.",
            date: "21.11.2025"
        },
        {
            img: "{{ asset('img/block6img3.svg') }}",
            title: "Теперь доставка в день заказа!",
            desc: "Для клиентов из Челябинска и области - экспресс-доставка автозапчастей прямо в ваш сервис или на стоянку.",
            date: "18.11.2025"
        },
        {
            img: "{{ asset('img/block6img4.svg') }}",
            title: "Теперь доставка в день заказа!",
            desc: "Для клиентов из Челябинска и области - экспресс-доставка автозапчастей прямо в сервис или стоянку.",
            date: "12.11.2025"
        },
        {
            img: "{{ asset('img/block6img2.svg') }}",
            title: "Новая поставка оригинальных запчастей",
            desc: "Мы обновили склад — в наличии новые позиции. Быстрая отгрузка и гарантия качества на все детали.",
            date: "11.11.2025"
        }
    ];
    
    const track = document.getElementById('sliderTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    let slidesPerView = 4;
    let cardWidth = 0;
    const gap = 30;
    let autoPlayInterval;
    
    if (!track) {
        console.error('Элемент sliderTrack не найден');
        return;
    }
    
    function createCard(data) {
        const card = document.createElement('div');
        card.className = 'card flex-shrink-0 bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all';
        card.innerHTML = `
            <img src="${data.img}" alt="${data.title}" class="w-full h-48 object-cover" onerror="this.src='https://via.placeholder.com/400x200?text=Image+not+found'">
            <div class="px-[17px] py-5">
                <p class="text-lg font-semibold mb-2">${data.title}</p>
                <p class="text-sm text-[#707070]">${data.desc}</p>
                <p class="text-sm text-[#707070] mt-3">${data.date}</p>
            </div>
        `;
        return card;
    }
    
    function fillSlider() {
        track.innerHTML = '';
        
        const totalCards = cardsData.length;
        const cloneCount = slidesPerView;
        
        for (let i = totalCards - cloneCount; i < totalCards; i++) {
            if (cardsData[i]) {
                track.appendChild(createCard(cardsData[i]));
            }
        }
        
        cardsData.forEach(card => {
            track.appendChild(createCard(card));
        });
        
        for (let i = 0; i < cloneCount; i++) {
            if (cardsData[i]) {
                track.appendChild(createCard(cardsData[i]));
            }
        }
        
        currentIndex = slidesPerView;
    }
    
    function calculateWidths() {
        const width = window.innerWidth;
        if (width < 640) {
            slidesPerView = 1;
        } else if (width < 768) {
            slidesPerView = 2;
        } else if (width < 1024) {
            slidesPerView = 3;
        } else {
            slidesPerView = 4;
        }
        
        const container = document.querySelector('.slider-container');
        if (!container) return;
        
        const containerWidth = container.clientWidth;
        
        cardWidth = (containerWidth - (gap * (slidesPerView - 1))) / slidesPerView;
        
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.width = `${cardWidth}px`;
        });
    }
    
    function updateSlider(animate = true) {
        if (!animate) {
            track.style.transition = 'none';
        }
        
        const offset = -currentIndex * (cardWidth + gap);
        track.style.transform = `translateX(${offset}px)`;
        
        if (!animate) {
            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease-out';
            }, 50);
        }
        
        updateDots();
    }
    
    function checkInfinite() {
        const totalCards = cardsData.length;
        
        if (currentIndex >= totalCards + slidesPerView) {
            track.style.transition = 'none';
            currentIndex = slidesPerView;
            const offset = -currentIndex * (cardWidth + gap);
            track.style.transform = `translateX(${offset}px)`;
            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease-out';
            }, 50);
        }
        
        if (currentIndex < slidesPerView) {
            track.style.transition = 'none';
            currentIndex = totalCards + slidesPerView - 1;
            const offset = -currentIndex * (cardWidth + gap);
            track.style.transform = `translateX(${offset}px)`;
            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease-out';
            }, 50);
        }
    }
    
    
    function nextSlide() {
        currentIndex++;
        updateSlider(true);
        setTimeout(() => {
            checkInfinite();
        }, 500);
    }
    
    function prevSlide() {
        currentIndex--;
        updateSlider(true);
        setTimeout(() => {
            checkInfinite();
        }, 500);
    }
    
    function startAutoPlay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(() => {
            nextSlide();
        }, 5000);
    }
    
    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }
    
    function resetAutoPlay() {
        stopAutoPlay();
        startAutoPlay();
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoPlay();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoPlay();
        });
    }
    
    const sliderContainer = document.querySelector('.slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopAutoPlay);
        sliderContainer.addEventListener('mouseleave', startAutoPlay);
    }
    
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            const oldSlidesPerView = slidesPerView;
            calculateWidths();
            
            if (oldSlidesPerView !== slidesPerView) {
                const currentOriginalIndex = currentIndex - oldSlidesPerView;
                fillSlider();
                calculateWidths();
                currentIndex = slidesPerView + currentOriginalIndex;
                updateSlider(false);
                createDots();
            } else {
                updateSlider(false);
            }
        }, 200);
    });
    
    function init() {
        fillSlider();
        calculateWidths();
        createDots();
        updateSlider(false);
        startAutoPlay();
        
        console.log('Слайдер инициализирован, карточек:', document.querySelectorAll('.card').length);
    }
    
    init();
});
</script>
        </main>
        <x-footer></x-footer>
    </body>
</html>
