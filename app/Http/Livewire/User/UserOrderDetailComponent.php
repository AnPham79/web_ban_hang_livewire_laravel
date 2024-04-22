<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function cancelOrder()
    {
        $order = Order::find($this->order_id);
        $order->status = 'canceled';
        $order->canceled_date = DB::raw('CURRENT_DATE');
        $order->save();
        session()->flash('message', 'Your order has been canceled successfully');
    }

    public function render()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('id', $this->order_id)->first();
        return view('livewire.user.user-order-detail-component', ['orders' => $orders])->layout('layouts.base');
    }
}
