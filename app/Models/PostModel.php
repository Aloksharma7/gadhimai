<?php 

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts'; // Assuming your table is named `posts`
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'post_title', 
        'post_content', 
        'category', 
        'slug', 
        'status',
        'created_at', 
        'updated_at'
    ];
}
