<?php

namespace App\class;

use App\Entity\Category;

class Search // représente la recherche des utilisateurs
{
    /**
     * @var string
     */

    public $string = '';

    /**
    * @var Category[]
    */
    public $categories = [];
}