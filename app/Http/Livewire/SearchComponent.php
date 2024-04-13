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

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    use WithPagination;

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $query = Product::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->product_cat_id) {
            $query->where('category_id', $this->product_cat_id);
        }

        switch ($this->sorting) {
            case 'date':
                $query->orderBy('created_at', 'DESC');
                break;
            case 'price':
                $query->orderBy('regular_price', 'ASC');
                break;
            case 'price-desc':
                $query->orderBy('regular_price', 'DESC');
                break;
            default:
                // Không cần làm gì, mặc định đã được xử lý bởi query đầu tiên
                break;
        }

        $data = $query->paginate($this->pagesize);

        $categories = Category::all();

        return view('livewire.search-component', ['data' => $data, 'categories' => $categories])->layout('layouts.base');
    }
}
