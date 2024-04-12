<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComposer extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-composer')->layout('layouts.base');
    }
}
