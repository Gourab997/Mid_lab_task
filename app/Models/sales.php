<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;

    // protected $table = null;
     
    protected $primaryKey = "s_id";
   
    public $timestamps = false;
     //const CREATED_AT =null;
     //const CREATED_AT ="create_time";
     //const UPDATED_AT =null;
}
