<?php

namespace App\Controllers;


use App\Models\EstimatedModel;
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



    public function submit_form() {
//        $projects = model(ProjectsModel::class);
        $this->load->model('ProjectsModel');

        $data = array(
            'customer' => $this->input->post('customer'),
            'project' => $this->input->post('project'),
            'address' => $this->input->post('address'),
            'date_finish' => $this->input->post('date_finish'),
            'garanty' => $this->input->post('garanty'),
            'response_person' => $this->input->post('response_person'),
            'vat' => $this->input->post('vat'),
            // Добавьте другие поля в соответствии с вашей таблицей
        );

        $project_id = $this->ProjectsModel->insert_user($data);

        if ($project_id) {
            echo "Данные успешно добавлены в базу данных. Project ID: $project_id";
        } else {
            echo "Произошла ошибка при добавлении данных в базу данных.";
        }
    }


}

//php spark serve
