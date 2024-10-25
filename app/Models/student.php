<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // protected $table = "table name"; // In case if table name is different.

    function testFun(){
        return "This is dummy function";
    }
}
