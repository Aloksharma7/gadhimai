<?php

namespace App\Controllers;

use App\Models\CarouselModel;

class CarouselController extends BaseController
{
    public function index()
    {
        $model = new CarouselModel();
        $data['carouselItems'] = $model->findAll(); // Fetch all carousel entries
        return view('carousel/index', $data); // Create this view file
    }

    public function create()
    {
        return view('carousel/create');
    }

    public function store()
    {
        $model = new CarouselModel();

        // Handle file upload
        $file = $this->request->getFile('image_url');
        
        // Check if the file is valid
        if ($file->isValid() && !$file->hasMoved()) {
            // Generate a unique name for the file
            $newFileName = $file->getRandomName();
            // Move the uploaded file to the 'uploads/carousel' directory
            $file->move(ROOTPATH . 'public/uploads/carousel', $newFileName);
            // Get the file path for the database
            $imagePath = base_url('uploads/carousel/' . $newFileName);

            // Prepare data to insert
            $data = [
                'image_url' => $imagePath,
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
            ];
            
            // Insert the data into the database
            $model->insert($data);
            return redirect()->to('/carousel'); // Redirect to the carousel list page
        } else {
            // Handle the case where the file is not valid
            return redirect()->back()->withInput()->with('errors', ['image_url' => 'Invalid file upload.']);
        }
    }
    public function edit($id)
    {
        $model = new CarouselModel();
        $data['carouselItem'] = $model->getCarouselItem($id);
        return view('carousel/edit', $data); // View for editing a carousel item
    }

    public function update($id)
    {
        $model = new CarouselModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        // Check if a new file has been uploaded
        if ($this->request->getFile('image_url')->isValid()) {
            $file = $this->request->getFile('image_url');
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/carousel', $newName);
            $data['image_url'] = base_url('uploads/carousel/' . $newName);
        }

        $model->update($id, $data);
        return redirect()->to('/admin/carousel');
    }

    public function delete($id)
    {
        $model = new CarouselModel();
        $carouselItem = $model->getCarouselItem($id);

        // Delete the image file from the server if it exists
        if (file_exists(ROOTPATH . '../' . $carouselItem['image_url'])) {
            unlink(ROOTPATH . '../' . $carouselItem['image_url']);
        }

        $model->delete($id);
        return redirect()->to('/admin/carousel');
    }
}
