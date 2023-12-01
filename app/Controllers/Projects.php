<?php

namespace App\Controllers;


use App\Models\EstimatedModel;
use App\Models\ProjectsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use DateTime;

class Projects extends BaseController
{


    public function index()
    {
        return view('projects/projects');
    }

    public function view($page = 'projects')
    {
        if (!is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $projects = model(ProjectsModel::class);

        $data = [
            'project_prepare' => $projects->getProjectPrepare(),
            'project_process' => $projects->getProjectProcess(),
            'project_completed' => $projects->getProjectCompleted(),
            'title' => 'Проекты'];


        $total_prepare = 0;
        $total_process = 0;
        $total_completed = 0;

        foreach ($data['project_prepare'] as $project_item) :
            $total_prepare += $project_item['total'];
        endforeach;

        foreach ($data['project_process'] as $project_item) :
            $total_process += $project_item['total'];
        endforeach;

        foreach ($data['project_completed'] as $project_item) :
            $total_completed += $project_item['total'];
        endforeach;

        $data['total_prepare'] = $total_prepare;
        $data['total_process'] = $total_process;
        $data['total_completed'] = $total_completed;


        return view('templates/header', $data)
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }


    public function view_add($page = 'add_project')
    {
        helper('form');
        if (!is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
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
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }


    public function view_archive($page = 'archive_projects')
    {
        if (!is_file(APPPATH . 'Views/projects/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $projects = model(ProjectsModel::class);

        $data = [
            'project_archive' => $projects->getProjectArchive(),
            'title' => 'Архив проектов'];

        return view('templates/header', $data)
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a news item'])
            . view('projects/add_project')
            . view('templates/footer');
    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        helper('form');

        // Checks whether the submitted data passed the validation rules.
        if (!$this->validate([
            'customer' => 'required|max_length[255]|min_length[3]',
            'project' => 'required|max_length[5000]|min_length[10]',
            'address' => 'required|max_length[5000]|min_length[10]',
            'date_finish' => 'required|max_length[5000]|min_length[10]',
            'garanty' => 'required|max_length[5000]|min_length[2]',
            'response_person' => 'required|max_length[5000]|min_length[10]',
            'vat' => 'required|max_length[5000]|min_length[2]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(ProjectsModel::class);

        $currentDate = new DateTime();
        $currentDateFormatted = $currentDate->format('Y-m-d');
        $post['date_start'] = $currentDateFormatted;
        $post['status']  = 'Подготавливается';
        $post['0'] = 0;

        $model->save([
            'slug' => url_title($post['project'], '-', true),
            'customer' => $post['customer'],
            'project' => $post['project'],
            'date_start' => $post['date_start'],
            'date_finish' => $post['date_finish'],
            'total' => $post['0'],
            'status' => $post['status'],
            'address' => $post['address'],
            'garanty' => $post['garanty'],
            'vat' => $post['vat'],
            'response_person' => $post['response_person']]);


        $projects = model(ProjectsModel::class);

        $data = [
            'project_prepare' => $projects->getProjectPrepare(),
            'project_process' => $projects->getProjectProcess(),
            'project_completed' => $projects->getProjectCompleted(),
            'title' => 'Проекты'];


        $total_prepare = 0;
        $total_process = 0;
        $total_completed = 0;

        foreach ($data['project_prepare'] as $project_item) :
            $total_prepare += $project_item['total'];
        endforeach;

        foreach ($data['project_process'] as $project_item) :
            $total_process += $project_item['total'];
        endforeach;

        foreach ($data['project_completed'] as $project_item) :
            $total_completed += $project_item['total'];
        endforeach;

        $data['total_prepare'] = $total_prepare;
        $data['total_process'] = $total_process;
        $data['total_completed'] = $total_completed;

        $page = 'projects';
        return view('templates/header', $data)
            . view('projects/' . $page, $data)
            . view('templates/footer');
    }

}

//php spark serve
