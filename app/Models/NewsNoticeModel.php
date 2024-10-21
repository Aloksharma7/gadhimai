<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsNoticeModel extends Model
{
    protected $table = 'news_notices';  // Change the table name to reflect news_notices
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',              // Changed from 'post_title' to 'title'
        'title_nepali',        // Changed from 'post_title_nepali' to 'title_nepali'
        'content',             // Changed from 'post_content' to 'content'
        'content_nepali',      // Changed from 'post_content_nepali' to 'content_nepali'
        'category',            // Changed from 'post_category' to 'category'
        'slug',
        'status',
        'img_url'
    ];

    public function getNewsNotices($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
