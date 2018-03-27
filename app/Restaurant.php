<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //whitelist fields for mass assignment
    protected $fillable =['name','description'];

    public function setNameAttribute($value){

        /*
        Mutator define the following format set[cased name of the column you wish to access]Attribute
        E.g. For column first_name  function would called setFirstNameAttribute
        This mutator will be automatically called when we attempt to set the 
        value of the column attribute on the model
        */

        $this->attributes['name'] = ucwords($value);
    }
}
