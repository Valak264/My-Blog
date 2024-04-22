<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;
use App\Models\Article;

class Blog extends BaseController
{
    public function index(): string
    {
        if (!is_file(APPPATH . "Views/pages/home.php")) {
            throw new PageNotFoundException('page');
        }

        $model = model(Article::class);
        $data = [
            'title' => 'Welcome to My Blog',
            'articles' => $model->getAllArticles(),
        ];
        
        return view('template/header', $data) . view('pages/home') . view('template/footer');
    }

    public function newArticle(): string
    {
        if (!is_file(APPPATH . "Views/pages/newArticle.php")) {
            throw new PageNotFoundException('page');
        }
        $data['title'] = 'New Article'; 
        return view('template/header', $data) . view('pages/newArticle') . view('template/footer');
    }

    public function aboutMe(): string {
        if (!is_file(APPPATH . "Views/pages/aboutMe.php")) {
            throw new PageNotFoundException('page');
        }
        $data['title'] = 'About Me';
        return view('template/header', $data) . view('pages/aboutMe') . view('template/footer'); 
    }

    public function article(int $id): string
    {
        if (!is_file(APPPATH . "Views/pages/article.php")) {
            throw new PageNotFoundException('page');
        }
        $model = model(Article::class);
        $article = $model->getOneArticle($id);
        $data = [
            'title' => $article['title'],
            'article' => $article['article']
        ];

        return view('template/header', $data) . view('pages/article') . view('template/footer');
    } 

    public function save(): RedirectResponse {
        helper('form');

        $data = $this->request->getPost(['title', 'article']);

        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[1]',
            'article' => 'required|max_length[5000]|min_length[1]'
        ])) {
            return $this->newArticle();
        }

        $post = $this->validator->getValidated();
        $model = model(Article::class);

        $model->save([
            'title' => $post['title'],
            'article' => $post['article']
        ]);

        return redirect()->to('/');
    }
}
