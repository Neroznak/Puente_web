<?php

namespace App\Models;

use CodeIgniter\Model;

class EstimatedModel extends Model
{
    protected $table = 'estimated_items';

//    protected $primaryKey = 'id'; // Укажите первичный ключ, если он отличается от 'id'
//    protected $allowedFields = ['customer', 'project', 'date_start', 'date_finish', 'total', 'status']; // Укажите разрешенные поля для вставки/обновления




    public function getEstimatedBySlug($slug)
    {
//        return $this->where('status', 'Оплачено')->findAll();
        return $this->where('project_slug', $slug)->findAll();
    }



}