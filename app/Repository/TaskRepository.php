<?php
/**
 * Created by PhpStorm.
 * User: erik
 * Date: 1/26/16
 * Time: 10:52 AM
 */

namespace App\Repository;

use App\User;
use App\Task;

class TaskRepository
{

    public function forUser(User $user){
        return Task::where('user_id' , $user->id)->orderBy('created_at' , 'asc')->get() ;
    }

}