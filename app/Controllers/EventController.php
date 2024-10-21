<?php

namespace App\Controllers;

use App\Models\EventModel;

class EventController extends BaseController
{
    public function index()
    {
        $model = new EventModel();
        $data['events'] = $model->orderBy('event_date', 'DESC')->findAll();
        return view('events/index', $data); // Create this view file
    }

    public function create()
    {
        return view('events/create'); // Create this view file
    }

    public function store()
    {
        $model = new EventModel();
        $data = [
            'event_title' => $this->request->getPost('event_title'),
            'event_description' => $this->request->getPost('event_description'),
            'event_date' => $this->request->getPost('event_date'),
        ];
        $model->insert($data);
        return redirect()->to('/admin/events'); // Redirect to the events list
    }

    public function edit($id)
    {
        $model = new EventModel();
        $data['event'] = $model->find($id);
        
        // Check if the event exists
        if (!$data['event']) {
            return redirect()->to('/events')->with('error', 'Event not found.');
        }

        return view('events/edit', $data); // Create this view file
    }

    public function update($id)
    {
        $model = new EventModel();
        $data = [
            'event_title' => $this->request->getPost('event_title'),
            'event_description' => $this->request->getPost('event_description'),
            'event_date' => $this->request->getPost('event_date'),
        ];

        // Update the event in the database
        $model->update($id, $data);
        return redirect()->to('/admin/events')->with('message', 'Event updated successfully');
    }

    public function delete($id)
    {
        $model = new EventModel();
        
        // Check if the event exists
        if (!$model->find($id)) {
            return redirect()->to('/admin/events')->with('error', 'Event not found.');
        }

        // Delete the event
        $model->delete($id);
        return redirect()->to('/admin/events')->with('message', 'Event deleted successfully');
    }
}
