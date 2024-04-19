<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
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

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
