<?php

namespace App\Controllers;

use App\Models\GeneralTasksModel;
use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        return view('start');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $news = model(NewsModel::class);
        $tasks = model(GeneralTasksModel::class);

        $data = [
            'news'  => $news->getNews(),
            'news_title' => 'Новости',
            'task' => $tasks->getTask(),
            'task_title' => 'Общие задачи'];

        return view('templates/header')
            . view('pages/' . $page, $data)
            . view('templates/footer');
    }
}

//php spark serve
