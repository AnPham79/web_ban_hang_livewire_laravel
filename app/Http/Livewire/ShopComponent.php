<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use cart;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount() {
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    use WithPagination;

    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        if($this->sorting == 'date') {
            $data = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if($this->sorting == 'price') {
            $data = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if($this->sorting == 'price-desc') {
            $data = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $data = Product::paginate(12);
        }

        $categories = Category::all();

        return view('livewire.shop-component', ['data' => $data, 'categories' => $categories])->layout('layouts.base');
    }
}
