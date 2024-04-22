<?php

namespace App\Models;

use CodeIgniter\Model;

class Article extends Model {
    protected $table = 'articles';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'article'];

    public function getAllArticles () {
        return $this->findAll();
    }

    public function getOneArticle (int $id) {
        return $this->find($id);
    }
}