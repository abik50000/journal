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


    public function getDiaryJson(Request $request)
    {
        //dd($request->all());
        $student = Student::where('user_id', Auth::user()->id)->first();
        //dd(Mark::whereMonth('day', '=', Carbon::createFromFormat('m', $request->month)->format('m'))->where('student_id', $student->id)->get());

        $subject_array = [];
        $subjects = Subject::where('class', $student->grade_id)->get();
            
        $days = Day::whereMonth('day', '=', Carbon::createFromFormat('m', $request->month)->format('m'))->orderBy('day', 'asc')->get();

        foreach ($subjects as $subject) {
            $subject_array[] = [
                'subject' => $subject->name,
                'marks' => $subject->marks($student->id, $days)
            ];

        }


        return [
            [
                'subject_array' => $subject_array,
                'days' => $days
            ]
        ];
    }

   
  
}
