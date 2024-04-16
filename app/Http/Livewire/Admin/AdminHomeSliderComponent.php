<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::All();
        return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
