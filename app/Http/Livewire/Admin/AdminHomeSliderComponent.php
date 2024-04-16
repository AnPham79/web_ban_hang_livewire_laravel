<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlider($id) {
        $slider = HomeSlider::find($id);
        $slider->delete();
        session()->flash('message', 'Slider has been deleted successfully');
    }

    public function render()
    {
        $sliders = HomeSlider::All();
        return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
