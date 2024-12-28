<?php

namespace App\Models;

use App\Utils\Database;
use App\Models\Category;




class Brand extends CoreModel
{

   protected $table = 'brand';

   public function find($id)
   {
      return $this->pdo->where('id', $id)->getOne($this->table);
   }
}
