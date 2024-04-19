<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class AdminCouponComponent extends Component
{
    use WithPagination;
    public function deleteCoupon($coupon_id) {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message', 'Coupon deleted successfully');
    }

    public function render()
    {   $coupons = Coupon::paginate(8);
        return view('livewire.admin.admin-coupon-component', ['coupons' => $coupons])->layout('layouts.base');
    }
}
