<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SlugFormat implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    protected $pass = 'pass';

    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    
    public function passes($attribute, $value)
    {
        //Check slug if submitted slug is in correct format & length
        if(strlen($value) < 3 || strlen($value) > 255)
        {
            $this->pass = 'wrong length';
            return false;
        }
        echo 'pass length';
        $value = iconv("utf-8", "ascii//TRANSLIT", $value);
        if($value == 'create')// Reserved words such create are not allowed
        {
            $this->pass = 'reserved word';
            return false;
        }

        if(preg_match("/[\s]+/",$value)) //Contains space
        {
            $this->pass = 'contain space';
            return false;
        }

        if(preg_match("/[^a-z0-9-]+/",$value)) //Check contain invalid characters
        {
            $this->pass = 'broke regex';
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'The validation error message.';
        // $msg = $this->pass;
        $msg .= "<strong>Incorrect Format for slug</strong>. Slug must be :";
        $msg .= "<ul>";
        $msg .= " <li>between 3 and 255 characters long</li>";
        $msg .= " <li>contain only lower letters, hypens and numbers</li>";
        $msg .= " <li>Cannot be create. Create is reserved.</li>";
        $msg .= "</ul><br>";
        $msg .= "Valid format Examples: ";
        $msg .= "<ul>";
        $msg .= " <li>beer-and-beer</li>";
        $msg .= " <li>nur</li>";
        $msg .= " <li>bed-2-bed</li>";
        $msg .= "</ul>";
        // $msg .= " Or Leave blank and a slug will be auto generated from restaurant name";
        return $msg;
    }
}
