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
        //     'trainess' => $trainess
        // ]);
    }
    public function show($id)
    {
        
    }
}
