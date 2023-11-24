<?php

namespace App\Controllers;


use App\Models\ProjectsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Projects extends BaseController
{
    public function index()
    {
        return view('projects/projects');
    }

    public function view($page = 'projects')
    {
        if (! is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $projects = model (ProjectsModel::class);

        $data = [
            'project_prepare'  => $projects->getProjectPrepare(),
            'project_process'  => $projects->getProjectProcess(),
            'project_completed'  => $projects->getProjectCompleted(),
            'project_title' => 'Проекты'];

        return view('templates/header')
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }


    public function view_add($page = 'add_project')
    {
        if (! is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $projects = model (ProjectsModel::class);

        $data = [
            'project_prepare'  => $projects->getProjectPrepare(),
            'project_process'  => $projects->getProjectProcess(),
            'project_completed'  => $projects->getProjectCompleted(),
            'project_title' => 'Проекты'];

        return view('templates/header')
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }

    public function view_project($page = 'project_page')
    {
        if (! is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $projects = model (ProjectsModel::class);

        $data = [
            'project_prepare'  => $projects->getProjectPrepare(),
            'project_process'  => $projects->getProjectProcess(),
            'project_completed'  => $projects->getProjectCompleted(),
            'project_title' => 'Проекты'];

        return view('templates/header')
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }
}

//php spark serve
