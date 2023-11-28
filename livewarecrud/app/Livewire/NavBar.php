<?php

namespace App\Livewire;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public function logout(Request $request)
    {
        // dd('logi out');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
