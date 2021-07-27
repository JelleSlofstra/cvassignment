<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\CvModel;
use App\Libraries\MySql;
use PDO;



class HomeController {

    public function index()
    {
        $userinfo = CvModel::findUserInfo(1);

        $jobs = CvModel::findInfo('jobs', 1);
        $educations = CvModel::findInfo('educations', 1);
        $volunteerjobs = CvModel::findInfo('volunteerjobs', 1);
        $skills = CvModel::findInfo('skills', 1);
        $hobbies = CvModel::findInfo('hobbies', 1);

        $cv = [$userinfo, $jobs, $educations, $volunteerjobs, $skills, $hobbies];

        return View::render('home.view', $cv);
    }
}