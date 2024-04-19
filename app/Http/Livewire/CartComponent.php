<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Coupon;

class CartComponent extends Component
{
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function increaseQuantity($rowId) 
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId) 
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId) 
    {
        Cart::instance('cart')->remove($rowId);
        session()->flash('success', 'item has been removed');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroyAll() 
    {
        Cart::instance('cart')->destroy();
        session()->flash('success', 'item has been removed');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function switchToSaveForLater($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($product->id, $product->name, 1, $product->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function moveToCart($rowId)
    {
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function applyCouponCode()
    {
        $coupon = Coupon::where('code', $this->couponCode)->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if(!$coupon) 
        {
            session()->flash('coupon_message', 'Coupon Code is invalid');
            return;
        }

        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'cart_value' => $coupon->cart_value
        ]);
    }

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
    }

    public function calculateDiscount()
    {
        if(Session()->get('coupon')['type'] == 'fixed')
        {
            $this->discount = session()->get('coupon')['value'];
        }
        else
        {
            $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
        }
        $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
        $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax' == 21))/100;
        $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }

    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'])
            {
                session()->forget('coupon');
            }else {
                $this->calculateDiscount();
            }
        }
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
