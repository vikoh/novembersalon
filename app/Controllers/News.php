<?php namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        //$data['news'] = $model->getNews();
        $data =[
            'news' => $model->getNews(),
            'title' => 'new archive'

        ];

        echo view('layouts/header', $data);
        echo view('news/overview', $data);
        echo view('layouts/header');
    }

    public function view($slug=null)
    {
        $model = new NewsModel();
        $data['news'] = $model->getNews($slug);
    }
    public function rock()
    {
        echo "this is a rock method from news controller";
    }
}