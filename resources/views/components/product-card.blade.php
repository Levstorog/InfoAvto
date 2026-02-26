<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

    .product-price {
        font-size: 16px;
    }

    .product-price div strike {
        color: #707070;
        font-size: 12px;
    }

    .product-card div span {
        color: #707070;
        font-size: 12px;
    }

    .product-card {
        display: flex;
        flex-direction: column;
        width: 250px;
        font-family: "Inter", sans-serif;
        font-size: 14px;
        gap: 12px;
    }

    .product-card img {
        height: 252px;
        border-radius: 10px;
    }

    .product-card button {
        width: 72px;
        height: 36px;
        background-color: #0075B1;
        color: white;
        border-radius: 6px;
    }
</style>

<div class="product-card">
    <img src="img/product-img.png" alt="">
    <div>
    <p>Предохранитель круглый 40А (36VDC)</p>
    <span>пласт. (уп. по 50шт)</span>
    </div>
    <p class="product-price">908.00$ <strike>15 000$</strike></p>
    <button>Купить</button>
</div>