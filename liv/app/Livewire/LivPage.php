<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\URL;

class LivPage extends Component
{

    public function render()
    {
        return view('livewire.liv-page');
    }

    public $email; // like a placeholder
    public $showSubscribe = false;
    public $showSuccess = false;

    //reserved
    protected $rules = [
        // 'email' => 'required|email:filter|subscribers,email',
        'email' => 'required|email|unique:subscribers,email',
    ];
    public function subscribe()
    {
        // Log::debug($this->email);
        // validation
        $this->validate();

        // Db transaction
        DB::transaction(function () {
            $subscriber = Subscriber::create([
                'email' => $this->email,
            ]);
            // notification
            $notification = new VerifyEmail;
            $notification->createUrlUsing(function ($notifiable) {
                return URL::temporarySignedRoute(
                    'subscribers.verify',
                    now()->addMinutes(20),
                    [
                        'subscriber' => $notifiable->getKey(),

                    ],
                );
            });

            $subscriber->notify($notification);
        }, $deadlockRestries = 5);


        // in build method to reset
        $this->reset('email');
        $this->showSubscribe=false;
        $this->showSuccess= true;
    }
}
