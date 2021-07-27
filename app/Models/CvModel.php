<?php

namespace App\Models;

use App\Libraries\MySql;
use PDO;

class CvModel extends Model
{
    // Name of the table
    protected $table = "cv";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->table, 
            $this->limit, 
            $this->guarded,
        );
    }

    public static function findUserInfo($user)
    {
        $statement = MySql::query("select * FROM `users` WHERE id = $user");
        return  $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public static function findInfo($table, $user)
    {
        $statement = MySql::query("select * FROM `$table` WHERE user_id = $user");
        return  $statement->fetchAll(PDO::FETCH_OBJ);
    }
}