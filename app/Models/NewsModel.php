<?php namespace App\Models;

use CodeIgniter\Model;

Class NewsModel extends Model
{
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if($slug === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['slug'=>$slug])
                    ->first();
    }
}




?>