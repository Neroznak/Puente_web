<?php

namespace App\Models;

use CodeIgniter\Model;


class ProjectsModel extends Model
{
    protected $table = 'projects';

//    protected $primaryKey = 'id'; // Укажите первичный ключ, если он отличается от 'id'
//    protected $allowedFields = ['customer', 'project', 'date_start', 'date_finish', 'total', 'status']; // Укажите разрешенные поля для вставки/обновления


    public function getProjectPrepare()
    {
        return $this->where('status', 'Подготавливается')->findAll();
    }

    public function getProjectProcess()
    {
        return $this->where('status', 'В работе')->findAll();
    }

    public function getProjectCompleted()
    {
        return $this->where('status', 'В оплате')->findAll();
    }

    public function getProjectArchive()
    {
        return $this->where('status', 'Оплачено')->findAll();
    }


    public function getProjectBySlug($slug)
    {
        return $this->where('slug', $slug)->findAll();
    }

    public function insert_project($data) {
        $this->db->insert('projects', $data);
        return $this->db->insert_id(); // Возвращает ID вставленной записи
    }



}