<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventListenerController extends Controller
{
    public function triggerEvent()
    {

        dd('Event Listener Triggered Successfully');
    }
}
