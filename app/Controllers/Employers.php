<?php

namespace App\Controllers;


use App\Models\EstimatedModel;
use App\Models\ProjectsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Employers extends BaseController
{

    public function index()
    {
        $data = ['title' => 'Сотрудники'];
        return view('templates/header', $data)
            . view('employers/employers')
            . view('templates/footer');
    }

    public function view_add($page = 'add_employers')
    {
        if (!is_file(APPPATH . 'Views/employers/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $projects = model(ProjectsModel::class);

        $data = [
//            'project_prepare' => $projects->getProjectPrepare(),
//            'project_process' => $projects->getProjectProcess(),
//            'project_completed' => $projects->getProjectCompleted(),
            'title' => 'Новый проект'];

        return view('templates/header', $data)
            . view('employers/' . $page, $data)
            . view('templates/footer');
    }
}