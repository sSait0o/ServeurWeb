<?php

namespace App\Models;

use PDO;

class Product extends CoreModel
{
   protected $table = 'product';

   public function find($id)
   {
      return $this->pdo->where('id', $id)->getOne($this->table);
   }

   public function finpdoyCategory($categoryId)
   {
      return $this->pdo->where('category_id', $categoryId)->get($this->table);
   }

   public function finpdoyBrand($brandId)
   {
      return $this->pdo->where('brand_id', $brandId)->get($this->table);
   }

   public function finpdoyType($typeId)
   {
      return $this->pdo->where('type_id', $typeId)->get($this->table);
   }

   public function findRecent()
   {
      return $this->pdo->orderBy('created_at', 'DESC')->get($this->table, 5); // Derniers 5 produits
   }
}
