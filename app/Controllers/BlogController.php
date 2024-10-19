<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    public function blogs()
    {
        $postModel = new PostModel();
        $data['blogs'] = $postModel->findAll();  // Fetch all posts

        return view('blog/blogs', $data);  // Load the view
    }

    public function view($slug)
{
    $postModel = new PostModel();
    
    // Fetch the blog post by slug
    $data['blog'] = $postModel->where('slug', $slug)->first();
    
    if (!$data['blog']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
    
    return view('blog/singleblog', $data); // Pass the blog data to the view
}

    public function index()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->findAll();
        return view('blog/index', $data);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store()
    {
        helper(['form', 'url']);
        
        $postModel = new PostModel();
        $slug = url_title($this->request->getPost('post_title'), '-', true);

        // Validate form input
        $validation = $this->validate([
            'post_title' => 'required|max_length[255]',
            'post_title_nepali' => 'required|max_length[255]',
            'post_content' => 'required',
            'post_content_nepali' => 'required',
            'post_category' => 'required',
            'status' => 'required',
            'img_url' => [
                'uploaded[img_url]',
                'mime_in[img_url,image/jpg,image/jpeg,image/png]',
                'max_size[img_url,2048]'
            ]
        ]);

        if (!$validation) {
            // Pass validation errors and old input data to the view
            return view('blog/create', [
                'validation' => $this->validator,
                'old_input' => $this->request->getPost()
            ]);
        }

        // Handle image upload
        $img = $this->request->getFile('img_url');
        if ($img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $imageName);
            $img_url = base_url('uploads/' . $imageName);
        } else {
            $img_url = '';
        }

        // Insert into database
        $postModel->save([
            'post_title' => $this->request->getPost('post_title'),
            'post_title_nepali' => $this->request->getPost('post_title_nepali'),
            'post_content' => $this->request->getPost('post_content'),
            'post_content_nepali' => $this->request->getPost('post_content_nepali'),
            'post_category' => $this->request->getPost('post_category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
            'img_url' => $img_url
        ]);

        return redirect()->to('admin/blog');
    }

    public function edit($id)
    {
        $postModel = new PostModel();
        $data['post'] = $postModel->find($id);
        return view('blog/edit', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
        
        $postModel = new PostModel();
        $slug = url_title($this->request->getPost('post_title'), '-', true);

        // Validate form input
        $validation = $this->validate([
            'post_title' => 'required|max_length[255]',
            'post_title_nepali' => 'required|max_length[255]',
            'post_content' => 'required',
            'post_content_nepali' => 'required',
            'post_category' => 'required',
            'status' => 'required',
            'img_url' => [
                'mime_in[img_url,image/jpg,image/jpeg,image/png]',
                'max_size[img_url,2048]'
            ]
        ]);

        if (!$validation) {
            // Pass validation errors and the post data to the view
            return view('blog/edit', [
                'validation' => $this->validator,
                'post' => $postModel->find($id)
            ]);
        }

        // Handle image upload (optional)
        $img_url = $this->request->getPost('current_img_url'); // Default to current image
        $img = $this->request->getFile('img_url');
        if ($img->isValid() && !$img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $imageName);
            $img_url = base_url('uploads/' . $imageName); // New image URL
        }

        // Update the database
        $postModel->update($id, [
            'post_title' => $this->request->getPost('post_title'),
            'post_title_nepali' => $this->request->getPost('post_title_nepali'),
            'post_content' => $this->request->getPost('post_content'),
            'post_content_nepali' => $this->request->getPost('post_content_nepali'),
            'post_category' => $this->request->getPost('post_category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
            'img_url' => $img_url
        ]);

        return redirect()->to('admin/blog');
    }

    public function delete($id)
    {
        $postModel = new PostModel();
        $postModel->delete($id);
        return redirect()->to('admin/blog');
    }
}
