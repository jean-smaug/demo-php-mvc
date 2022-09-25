<?php

namespace App\Model;

use App\Core\Model;

class Article extends Model
{
    public function __construct()
    {
        parent::__construct("articles");
    }
}
