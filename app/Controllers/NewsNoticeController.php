<?php

namespace App\Controllers;

use App\Models\NewsNoticeModel;
use CodeIgniter\Controller;

class NewsNoticeController extends Controller
{
    public function NewsNotices()
    {
        $newsNoticeModel = new NewsNoticeModel();
        $data['newsnotices'] = $newsNoticeModel->findAll();  // Fetch all news/notices

        return view('newsnotice/news_notices', $data);  // Load the view
    }

    public function view($slug)
    {
        $newsNoticeModel = new NewsNoticeModel();

        // Fetch the news or notice post by slug
        $data['newsnotice'] = $newsNoticeModel->where('slug', $slug)->first();

        if (!$data['newsnotice']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('newsnotice/singlenewsnotice', $data); // Pass the news/notice data to the view
    }

    public function index()
    {
        $newsNoticeModel = new NewsNoticeModel();
        $data['newsnotices'] = $newsNoticeModel->findAll();
        return view('newsnotice/index', $data);
    }

    public function create()
    {
        return view('newsnotice/create');
    }

    public function store()
    {
        helper(['form', 'url']);
        
        $newsNoticeModel = new NewsNoticeModel();
        $slug = url_title($this->request->getPost('title'), '-', true);

        // Validate form input
        $validation = $this->validate([
            'title' => 'required|max_length[255]',
            'title_nepali' => 'required|max_length[255]',
            'content' => 'required',
            'content_nepali' => 'required',
            'category' => 'required',
            'status' => 'required',
            'img_url' => [
                'uploaded[img_url]',
                'mime_in[img_url,image/jpg,image/jpeg,image/png]',
                'max_size[img_url,2048]'
            ]
        ]);

        if (!$validation) {
            // Pass validation errors and old input data to the view
            return view('newsnotice/create', [
                'validation' => $this->validator,
                'old_input' => $this->request->getPost()
            ]);
        }

        // Handle image upload
        $img = $this->request->getFile('img_url');
        if ($img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads/newsnotice', $imageName);
            $img_url = base_url('uploads/newsnotice/' . $imageName);
        } else {
            $img_url = '';
        }

        // Insert into database
        $newsNoticeModel->save([
            'title' => $this->request->getPost('title'),
            'title_nepali' => $this->request->getPost('title_nepali'),
            'content' => $this->request->getPost('content'),
            'content_nepali' => $this->request->getPost('content_nepali'),
            'category' => $this->request->getPost('category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
            'img_url' => $img_url
        ]);

        return redirect()->to('admin/newsnotice');
    }

    public function edit($id)
    {
        $newsNoticeModel = new NewsNoticeModel();
        $data['newsnotice'] = $newsNoticeModel->find($id);
        return view('newsnotice/edit', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
        
        $newsNoticeModel = new NewsNoticeModel();
        $slug = url_title($this->request->getPost('title'), '-', true);

        // Validate form input
        $validation = $this->validate([
            'title' => 'required|max_length[255]',
            'content' => 'required',
            'category' => 'required',
            'status' => 'required',
            'img_url' => [
                'mime_in[img_url,image/jpg,image/jpeg,image/png]',
                'max_size[img_url,2048]'
            ]
        ]);

        if (!$validation) {
            // Pass validation errors and the post data to the view
            return view('newsnotice/edit', [
                'validation' => $this->validator,
                'newsnotice' => $newsNoticeModel->find($id)
            ]);
        }

        // Handle image upload (optional)
        $img_url = $this->request->getPost('current_img_url'); // Default to current image
        $img = $this->request->getFile('img_url');
        if ($img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads/newsnotice', $imageName);
            $img_url = base_url('uploads/newsnotice/' . $imageName); // New image URL
        }

        // Update the database
        $newsNoticeModel->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
            'img_url' => $img_url
        ]);

        return redirect()->to('admin/newsnotice');
    }

    public function delete($id)
    {
        $newsNoticeModel = new NewsNoticeModel();
        $newsNoticeModel->delete($id);
        return redirect()->to('admin/newsnotice');
    }
}
