<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $studentId = 5;
    $round = 65;
    return view('pages.welcome', [
        'id' => $studentId,
        'round' => $round
    ]);
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/students', function () {
    $students = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'address' => 'Jl. Raya No. 1'
        ],
        [
            'id' => 2,
            'name' => 'Mina',
            'address' => 'Mirpur Road No. 2'
        ],
        [
            'id' => 3,
            'name' => 'Raju',
            'address' => 'Palta Road No. 3'
        ]
    ];
    return view('pages.students.index', [
        'students' => $students
    ]);
});
Route::get('/student/{id}', function ($id) {
    $students = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'address' => 'Jl. Raya No. 1'
        ],
        [
            'id' => 2,
            'name' => 'Mina',
            'address' => 'Mirpur Road No. 2'
        ],
        [
            'id' => 3,
            'name' => 'Raju',
            'address' => 'Palta Road No. 3'
        ]
    ];
    $student = $students[$id - 1];
    // dd($student);
    return view('pages.students.show', compact('student'));
});
