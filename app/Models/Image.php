<?php

namespace App\Models;

use CodeIgniter\Model;

class Image extends Model
{
    public function getAll()
    {
        $builder = $this->db->table('tb_image');
        $builder->select('*');
        return $builder->get();
    }
}
