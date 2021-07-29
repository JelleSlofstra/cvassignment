<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Libraries\View;
use App\Libraries\MySql;
use App\Models\JobsModel;

class UserController extends Controller
{

    public function index()
    {
        $user = UserModel::get(1);
        $jobs = JobsModel::userJobs(1);

        View::render('users/index.view', [
            'users' => $user,
            'jobs' => $jobs
        ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    public function create()
    {
        
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $data = [
            'first_name' => "Code",
            'last_name' => "Gorilla",
            'email' => "toby@codegorilla.nl",
            'password' => "q3234234q3213^^!^w23123",
            'birthday' => "1990-12-31",
            'created' => date("Y-m-d H:i:s"),
        ];

        UserModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

