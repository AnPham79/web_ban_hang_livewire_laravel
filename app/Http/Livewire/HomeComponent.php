<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $slider = HomeSlider::where('status', 1)->get();
        $products = Product::orderBy('created_at', 'DESC')->get()->take(8);
        
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;

        return view('livewire.home-component', ['slider' => $slider, 'products' => $products, 'categories' => $categories, 'no_of_products' => $no_of_products])->layout('layouts.base');
    }
}
