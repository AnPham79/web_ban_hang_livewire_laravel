<div>
    <div class="wrap-icon-section wishlist">
        <a href="{{ route('product.wishlist') }}" class="link-direction">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <div class="left-info">
                @if(Cart::instance('wishlist')->count() > 0)
                    <span class="index">{{ Cart::instance('wishlist')->count() }} item</span>
                @else
                    <span class="index">0 item</span>
                @endif
                <span class="title">Wishlist</span>
            </div>
        </a>
    </div>
</div>
