<?php

namespace App\Models;

use CodeIgniter\Model;

class RakModel extends Model
{
    protected $table = 'tbrak';
    protected $primaryKey = 'id_rak';
    protected $allowedFields = ['nmrak'];
}
