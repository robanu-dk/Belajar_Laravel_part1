<?php

namespace App\Http\Controllers;
use App\Models\Event;

class EventController
{
    public function index()
    {
        return view('events',Event::kilas_info());
    }

    public function detail_event()
    {
        return view('event_detail.event_detail',Event::event_detail());
    }

}
