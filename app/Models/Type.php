<?php

namespace App\Models;

use PDO;

class Type extends CoreModel
{
   protected $table = 'type';

   public function find($id)
   {
      return $this->pdo->where('id', $id)->getOne($this->table);
   }
}
