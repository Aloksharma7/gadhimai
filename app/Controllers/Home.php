<?php

namespace App\Controllers;
use App\Models\EventModel;

class Home extends BaseController
{
    public function index(): string
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->orderBy('event_date', 'DESC')->findAll(4); // Get the latest 4 events
        return view('index', $data); // Load your home vie
    }
    public function history()
    {
        return view('history');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
