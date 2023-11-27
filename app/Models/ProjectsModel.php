<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id'; // Укажите первичный ключ, если он отличается от 'id'
    protected $allowedFields = ['customer', 'project', 'date_start', 'date_finish', 'total', 'status']; // Укажите разрешенные поля для вставки/обновления


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


//    public function getProject()
//    {
//        $mysqli = new mysqli('localhost', 'root', '', 'kinomonster');
//        if (mysqli_connect_errno()) {
//            printf("Соединение не установлено");
//            exit();
//        }
//        $mysqli->set_charset('utf8');
//        $query = $mysqli->query('SELECT * FROM "projects" WHERE "status" = "Подготавливается"');
//        $mysqli->query($query); // Отправляем запрос в SQL
//        return $query->result_array();
//    }
}