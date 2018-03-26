<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //whitelist fields for mass assignment
    protected $fillable =['name','description'];

}
