<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UnquieSlug implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $id;
    protected $pass = 'pass';


    public function __construct($id = null)
    {
        //
        $this->id = $id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    public function createSlug($value) //
    {
        // $slug = strtolower($value);
        $slug = preg_replace("/-?\s&\s-?/", "-and-", $value); // & with -and-
        $slug = iconv("utf-8", "ascii//TRANSLIT", $slug); //Replace utf-8 characters with 7-bit ASCII equivalents
        // $slug = preg_replace("/[^a-z0-9-]+/", "-", $slug);// Replace any non-alphanumeric character with hypens
        $slug =trim($slug,"-"); //Remove leading or trailing hypens
        return $slug;
    }

    public function passes($attribute, $value)
    {        
        $slug = $this->createSlug($value);
        
        if($this->found($slug))
        {
            if($this->id !== $this->getId($slug) )
            {
                $this->pass = $this->id . ' != '.$this->getId($slug) ;
                return false;
            }
        }
        return true;
        // return DB::table('restaurants')->where('slug', $slug)->Exist();
        // return DB::table('restaurants')->where('slug', $slug)->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'The validation error message.';
        return $this->id." Slug is not unquie.";
    }


    public function found($slug)
    {
        return DB::table('restaurants')->where('slug', $slug)->exists();
    }

    public function getId($slug)
    {
        return DB::table('restaurants')->where('slug','=', $slug)->first()->id;
    }
}
