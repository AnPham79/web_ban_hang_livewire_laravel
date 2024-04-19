<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use cart;
use Livewire\WithPagination;

class DetailComponent extends Component
{
    public $slug;
    public $qty = 1;

    //  chúng ta sử dụng phương thức mount() để nhận giá trị của $slug từ bên ngoài và gán nó vào thuộc tính $slug của component.
    // mout là 1 phương thức mạnh của livewire cung cấp
    public function mount($slug) {
        $this->slug = $slug;
        $this->qty = 1;
    }

    use WithPagination;

    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, $this->qty, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    public function increaseQuantity()
    {
        $this->qty++;
    }

    public function decreaseQuantity()
    {
        if($this->qty > 1)
        {
            $this->qty--;
        }
    }

    public function render()
    {
        $sale = Sale::find(1);
        $data = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id', $data->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.detail-component', 
        [
            'data' => $data,
            'popular_products' => $popular_products,
            'related_products' => $related_products,
            'sale' => $sale
        ])->layout('layouts.base');
    }
}
