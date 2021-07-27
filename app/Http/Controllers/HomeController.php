<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;
use PDO;


class HomeController {

    public function index()
    {
        $statement = MySql::query('select * from users');
        $userinfo = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = MySql::query('select * FROM `jobs` WHERE user_id = 1');
        $jobs = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = MySql::query('select * FROM `educations` WHERE user_id = 1');
        $educations = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = MySql::query('select * FROM `volunteerjobs` WHERE user_id = 1');
        $volunteerjobs = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = MySql::query('select * FROM `skills` WHERE user_id = 1');
        $skills = $statement->fetchAll(PDO::FETCH_OBJ);

        $statement = MySql::query('select * FROM `hobbies` WHERE user_id = 1');
        $hobbies = $statement->fetchAll(PDO::FETCH_OBJ);

        $cv = [$userinfo, $jobs, $educations, $volunteerjobs, $skills, $hobbies];

        //dd($cv);

        return View::render('home.view', $cv);
    }
}