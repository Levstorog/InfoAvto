<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

    .product-price {
        font-size: 16px;
    }

    .color-strike {
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

    @media screen and (max-width:425px) {
    .product-card {
        width: 182px;
    }

    .product-card img {
        height: 180px;
    }
    }
</style>

@props(['product'])

<div class="product-card">
    @if($product->image)
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
    @else
        <img src="{{ asset('img/product-img.png') }}" alt="{{ $product->name }}">
    @endif
    <div>
        <p>{{ $product->name }}</p>
        @if($product->description)
            <span>{{ Str::limit($product->description, 50) }}</span>
        @endif
    </div>
    <p class="product-price">
        {{ number_format($product->price, 2, '.', ' ') }}₽
        @if($product->old_price)
            <strike class="color-strike">{{ number_format($product->old_price, 2, '.', ' ') }}₽</strike>
        @endif
    </p>
    <button>Купить</button>
</div>