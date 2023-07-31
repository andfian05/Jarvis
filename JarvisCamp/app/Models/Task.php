<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Task extends Model
{
    use HasFactory;
    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 6 Laravel',
            'desc' => 'Hari Ahad, 23/07/2023',
            'deadline' => '2023-07-23',
            'status' => 'Selesai'
        ],
        [
            'id' => 2,
            'name' => 'Tugas 7 Laravel',
            'desc' => 'Hari Ahad, 30/07/2023',
            'deadline' => '2023-07-30',
            'status' => 'Proses'
        ],
    ];

    public static function getAll(){
        return self::$tasks;
    }

    protected $fillable = ['id', 'name', 'desc', 'deadline', 'status'];

    // public static function getById($id){
    //     return static::find($id);
    // }
}
