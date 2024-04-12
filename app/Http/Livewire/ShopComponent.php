<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use cart;

class ShopComponent extends Component
{
    use WithPagination;
    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $data = Product::paginate(12);
        return view('livewire.shop-component', ['data' => $data])->layout('layouts.base');
    }
}
