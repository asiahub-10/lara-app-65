<?php

namespace App\Http\Controllers;
use App\Models\Trainee;

class TraineeController
{
    public function index()
    {
        $trainees = Trainee::all();
        return view('pages.trainees.index', compact('trainees'));
        // return view('pages.about', [
        //     'tr' => $trainess,
        //     'result' => $user
        // ]);
    }
    public function show($id)
    {
        $trainee = Trainee::findTrainee($id);
        return view('pages.trainees.show', compact('trainee'));
    }
}
