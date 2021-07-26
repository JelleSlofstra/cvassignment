<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;
use PDO;


class HomeController {

    public function index()
    {
        $statement = MySql::query('select * from users');

        $results = $statement->fetchAll(PDO::FETCH_OBJ);

        return View::render('home.view', $results);
    }
}