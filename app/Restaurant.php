<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //whitelist fields for mass assignment
    protected $fillable =['name','slug','description','address1','address2','city','county','postcode'];

    function slugify($string)
    {
        $slug = strtolower($string);
        $slug = preg_replace("/\s-?&-?\s/", "-and-", $slug); // & with -and-
        $slug = iconv("utf-8", "ascii//TRANSLIT", $slug); //Replace utf-8 characters with 7-bit ASCII equivalents
        $slug = preg_replace("/[^a-z0-9-]+/", "-", $slug);// Replace any non-alphanumeric character with hypens
        return trim($slug,"-"); //Remove leading or trailing hypens
    }

    function not_blank($element)
    {
        $element = trim($element);
        return (strlen($element) > 0);
    }

    function full_address()
    {
        $parts = [
        $this->address1,
        $this->address2,
        $this->city,
        $this->county,
        $this->postcode,
        ];
        $address = array_filter($parts, [$this,'not_blank']);
        return implode(', ',$address);
    }

    //mutators
    /*
        Mutator allow us to maniuplate data before it gets inserted into the database and are called
        when we attempt to set the value of the column attribute on the model

        Mutator define the following format set[cased name of the column you wish to access]Attribute
        E.g. For column first_name  function would called setFirstNameAttribute
    */
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function setAddress1Attribute($value){
        $this->attributes['address1'] = ucwords($value);
    }

    public function setAddress2Attribute($value){
        $this->attributes['address2'] = ucwords($value);
    }

    public function setCityAttribute($value){
        $this->attributes['city'] = ucwords($value);
    }

    public function setCountyAttribute($value){
        $this->attributes['county'] = ucwords($value);
    }

    public function setPostcodeAttribute($value){
        $this->attributes['postcode'] = strtoupper($value);
    }



}
