<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

    use HasFactory; 


    protected $table = 'plans';

    protected $fillable = [
        'id'  ,'exercises', 'muscles', 'user_id' , 'muscle_id' , 'exercise_id' , 'day' , 'created_at', 'updated_at',
    ];


    public  function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }



    public  function exercise(){
        return $this -> belongsTo(Exercise::class,'exercise_id','id');
    }
    
    public  function muscle(){
        return $this -> belongsTo(Muscle::class,'muscle_id','id');
    }


}