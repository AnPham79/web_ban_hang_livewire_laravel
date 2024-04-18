<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminAddCategoryComponent extends Component
{
    public $category_name;
    public $category_slug;

    public function generateslug() {
        $this->category_slug = Str::slug($this->category_name);
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);
    }

    public function storeCategory() {
        $this->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);
        $data = new Category;
        $data->category_name = $this->category_name;
        $data->category_slug = $this->category_slug;
        $data->save();
        session()->flash('message', 'Category has been created successfully.');
    }
    

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
