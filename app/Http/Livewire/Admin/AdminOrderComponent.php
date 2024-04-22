<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class AdminOrderComponent extends Component
{
    use WithPagination;

    public function updateOrderStatus($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if ($status == 'delivered') {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        } else if ($status == 'canceled') {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('message', 'Status has been updated successfully');
    }

    public function render()
    {
        $order = Order::orderBy('created_at', 'DESC')->paginate(8);
        return view('livewire.admin.admin-order-component', ['order' => $order])->layout('layouts.base');
    }
}
