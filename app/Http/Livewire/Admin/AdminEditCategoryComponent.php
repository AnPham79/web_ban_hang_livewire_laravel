<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_name;
    public $category_id;

    public function mount($category_slug) {
        $this->category_slug = $category_slug;
        $category = Category::where('category_slug', $this->category_slug)->first();
        $this->category_id = $category->id;
        $this->category_name = $category->category_name;
    }

    public function generateslug() {
        $this->category_slug = Str::slug($this->category_name);
    }

    public function updateCategory() {
        $category = Category::find($this->category_id);
        $category->category_name = $this->category_name;
        $category->category_slug = $this->category_slug;
        $category->save();
        session()->flash('message', 'Category has been updated successfully.');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
