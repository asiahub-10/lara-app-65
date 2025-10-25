<?php

use Illuminate\Support\Facades\Route;
use App\Models\Trainee;
use App\Http\Controllers\TraineeController;

Route::get('/', function () {
    return view('pages.welcome',[
        'name' => 'Mina',
        'country' => 'BD'
    ]);
});
Route::get('/users/{username}/profile/{id?}', function ($username, $id=null) {
    return view('pages/users',[
        'user' => $username,
        'id' => $id
    ]);
});

// Route::get('/about', function () {
//     return view('pages/about');
// });

// OR
Route::view('/about', 'pages/about');

// Route::get('/trainees', function () {
//     // $trainees = [
//     //         [
//     //             'id' => 1,
//     //             'name' => 'Mina',
//     //             'email' => 'MvXbM@example.com',
//     //             'country' => 'BD',
//     //             'is_active' => true
//     //         ],
//     //         [
//     //             'id' => 2,
//     //             'name' => 'Raju',
//     //             'email' => 'raju@example.com',
//     //             'country' => 'IN',
//     //             'is_active' => false
//     //         ],
//     //         [
//     //             'id' => 3,
//     //             'name' => 'Rani',
//     //             'email' => 'rani@example.com',
//     //             'country' => 'US',
//     //             'is_active' => true
//     //         ]
//     //     ];
//     return view('pages.trainees.index',[
//         // 'trainees' => $trainees
//         'trainees' => Trainee::all()
//     ]);
// });

Route::get('/trainees', [TraineeController::class, 'index'])->name("trainees.index");

// Route::get('/trainees/{id}', function ($id) {
//     // $trainees = [
//     //         [
//     //             'id' => 1,
//     //             'name' => 'Mina',
//     //             'email' => 'MvXbM@example.com',
//     //             'country' => 'BD',
//     //             'is_active' => true
//     //         ],
//     //         [
//     //             'id' => 2,
//     //             'name' => 'Raju',
//     //             'email' => 'raju@example.com',
//     //             'country' => 'IN',
//     //             'is_active' => false
//     //         ],
//     //         [
//     //             'id' => 3,
//     //             'name' => 'Rani',
//     //             'email' => 'rani@example.com',
//     //             'country' => 'US',
//     //             'is_active' => true
//     //         ]
//     //     ];
//     // $single = array_filter($trainees, fn($item) => $item['id'] == $id);
//     // $single = reset($single);
//     // dd($single);

//     return view('pages.trainees.show', [
//         // 'id' => $id,
//         // 'trainee' => $single
//         'trainee' => Trainee::findTrainee($id)
//     ]);
// });

Route::get('/trainees/{id}', [TraineeController::class, 'show'])->name('trainee-details');