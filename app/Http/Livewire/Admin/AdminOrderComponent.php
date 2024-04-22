<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $order = Order::orderBy('created_at', 'DESC')->paginate(8);
        return view('livewire.admin.admin-order-component', ['order' => $order])->layout('layouts.base');
    }
}
