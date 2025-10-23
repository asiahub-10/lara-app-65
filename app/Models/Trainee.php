<?php
namespace App\Models;

class Trainee {
    public static $trainees = [
            [
                'id' => 1,
                'name' => 'Mina',
                'email' => 'MvXbM@example.com',
                'country' => 'BD',
                'is_active' => true
            ],
            [
                'id' => 2,
                'name' => 'Raju',
                'email' => 'raju@example.com',
                'country' => 'IN',
                'is_active' => false
            ],
            [
                'id' => 3,
                'name' => 'Rani',
                'email' => 'rani@example.com',
                'country' => 'US',
                'is_active' => true
            ]
    ];
    public static function all(){
        // return $this->$trainees;
        // return Trainee::$trainees;
        return self::$trainees;
    }
    public static function findTrainee($id){
        // dd(collect(self::$trainees)->firstWhere('id', $id));
        // dd(collect(self::$trainees)->firstWhere('email', $id));

        return collect(self::$trainees)->firstWhere('id', $id);
    }
}

?>