<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $images;

    public function mount() {
        $this->stock_status = 'in_stock';
        $this->featured = 0;
    }

    public function generateslug() {
        $this->slug = Str::slug($this->name, '-');
    }

    public function addProduct() {
        $product = new Product;
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->featured = $this->featured;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;

        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;

        if($this->images)
        {
            $imagesNames = '';
            foreach ($this->images as $key => $image) {
                $imgName = Carbon::now()->timestamp. $key . '.' .$image->extension();
                $image->storeAs('products', $imgName);
                $imagesNames = $imagesNames . ',' . $imgName;
        }
        $product->images = $imagesNames;
    }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been created successfully');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-add-product-component', ['categories' => $categories])->layout('layouts.base');
    }
}
