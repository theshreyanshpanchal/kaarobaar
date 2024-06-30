<?php

namespace App\Livewire;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        return view('livewire.pages.forgot-password')->layout('layouts.guest');
    }
}
