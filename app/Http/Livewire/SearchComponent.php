<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use cart;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount() {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
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
            $data = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'.$this->product_cat_id .'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if($this->sorting == 'price') {
            $data = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'.$this->product_cat_id .'%')->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if($this->sorting == 'price-desc') {
            $data = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%'.$this->product_cat_id .'%')->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $data = Product::paginate(12);
        }

        $categories = Category::all();

        return view('livewire.search-component', ['data' => $data, 'categories' => $categories])->layout('layouts.base');
    }
}
