<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class DetailComponent extends Component
{
    public $slug;

    //  chúng ta sử dụng phương thức mount() để nhận giá trị của $slug từ bên ngoài và gán nó vào thuộc tính $slug của component.
    // mout là 1 phương thức mạnh của livewire cung cấp
    public function mount($slug) {
        $this->slug = $slug;
    }

    public function render()
    {
        $data = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id', $data->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.detail-component', 
        [
            'data' => $data,
            'popular_products' => $popular_products,
            'related_products' => $related_products
        ])
        ->layout('layouts.base');
    }
}
