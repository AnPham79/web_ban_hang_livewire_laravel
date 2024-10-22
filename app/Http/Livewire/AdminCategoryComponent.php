<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id) {
        $categories = Category::find($id);
        $categories->delete();
        session()->flash('message', 'Category has been deleted successfully.');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
