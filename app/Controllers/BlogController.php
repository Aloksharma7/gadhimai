<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->findAll();  // Fetch all posts

        return view('blog/index', $data);  // Load the view
    }

    public function create()
    {
        return view('blog/create');  // Load the create form view
    }

    public function store()
    {
        helper(['form', 'url']);
        
        $postModel = new PostModel();

        $slug = url_title($this->request->getPost('post_title'), '-', true);  // Generate a slug

        // Validate form input
        $validation = $this->validate([
            'post_title' => 'required|max_length[255]',
            'post_content' => 'required'
        ]);

        if (!$validation) {
            return view('blog/create', ['validation' => $this->validator]);
        }

        // Insert into the database
        $postModel->save([
            'post_title' => $this->request->getPost('post_title'),
            'post_content' => $this->request->getPost('post_content'),
            'category' => $this->request->getPost('category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('admin/blog');  // Redirect to the blog index
    }

    public function edit($id)
    {
        $postModel = new PostModel();
        $data['post'] = $postModel->find($id);  // Fetch the specific post by ID

        return view('blog/edit', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
        
        $postModel = new PostModel();

        $slug = url_title($this->request->getPost('post_title'), '-', true);  // Generate a slug

        // Validate form input
        $validation = $this->validate([
            'post_title' => 'required|max_length[255]',
            'post_content' => 'required'
        ]);

        if (!$validation) {
            return view('blog/edit', [
                'validation' => $this->validator,
                'post' => $postModel->find($id)
            ]);
        }

        // Update the post
        $postModel->update($id, [
            'post_title' => $this->request->getPost('post_title'),
            'post_content' => $this->request->getPost('post_content'),
            'category' => $this->request->getPost('category'),
            'slug' => $slug,
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('admin/blog');
    }

    public function delete($id)
    {
        $postModel = new PostModel();
        $postModel->delete($id);  // Delete the post

        return redirect()->to('admin/blog');
    }
}
