<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SubscriptionDetail extends Component
{

    public $readyToLoadSubscriptionDetails = false;

    public function loadSubscriptionDetails()
    {
        $this->readyToLoadSubscriptionDetails = true;
    }

    public function render()
    {

        return view('livewire.subscription-detail', [
            'subscription' => $this->readyToLoadSubscriptionDetails
                ? Route::dispatch(Request::create('api/subscription', 'GET'))
                : null
        ]);
    }
}
