<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacher;
use App\User;
use App\Timetable;
use App\MarkType;
use App\MarkComment;
use App\Homework;
use App\Mark;
use App\Day;
use App\Grade;
use App\Student;
use App\Subject;
use App\Notification;
use Redirect;
use Carbon\Carbon;

class StudentJSONController extends Controller
{
   
    public function getJson()
    {
        return [
            [
                'title' => 'DKA-develop',
                'url' => 'https://dka-develop.ru',
            ],
            [
                'title' => 'Youtube',
                'url' => 'https://youtube.com',
            ]
        ];
    }

   
  
}
