<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;


    protected $table = 'exercises';
    protected $fillable = [
        'id'  ,  'name' , 'description' , 'image' , 'groups' , 'group_count' , 'muscle_id'  , 'created_at', 'updated_at',
    ];

    public  function muscle(){
        return $this -> belongsTo(Muscle::class,'muscle_id','id');
    }

}
