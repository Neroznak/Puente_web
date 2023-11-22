<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralTasksModel extends Model
{
    protected $table = 'general_tasks';

    public function getTask($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}