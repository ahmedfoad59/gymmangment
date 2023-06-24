<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;


    protected $table = 'muscles';
    protected $fillable = [
        'id'  ,  'name' , 'description' , 'image' , 'created_at', 'updated_at',
    ];

    public  function exercises(){
        return $this -> hasMany(Exercise::class,'muscle_id','id');
    }

}
