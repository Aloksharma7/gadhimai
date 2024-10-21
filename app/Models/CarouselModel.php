<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table = 'carousel'; // Your database table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['image_url', 'title', 'description'];

    public function getCarouselItems()
    {
        return $this->findAll(); // Fetch all carousel items
    }

    public function getCarouselItem($id)
    {
        return $this->find($id); // Fetch a single carousel item by ID
    }
    
    public function countAll()
    {
        return $this->countAllResults();
    }

    public function getLatest($limit)
    {
        return $this->orderBy('created_at', 'DESC')->findAll($limit);
    }
}
