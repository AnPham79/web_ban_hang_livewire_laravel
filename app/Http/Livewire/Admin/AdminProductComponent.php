<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductComponent extends Component
{
    use WithPagination;
    public function deleteProduct($id) 
    {
        $products = Product::find($id);
        if($product->image)
        {
            unlink('assets/images/products'.'/'.$product->image);
        }
        if($product->images)
        {
            $images = explode(',',$product->images);
            foreach($images as $image)
            {
                unlink('assets/images/products'.'/'.$product->image);
            }
        }

        $products->delete();
        session()->flash('message', 'Category has been deleted successfully.');

    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
