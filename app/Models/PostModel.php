<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'blog_posts';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'post_title',
        'post_title_nepali',
        'post_content',
        'post_content_nepali',
        'post_category',
        'slug',
        'status',
        'updated_at',
        'img_url'
    ];

    public function getPosts($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
