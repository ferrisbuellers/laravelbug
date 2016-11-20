<?php namespace laravelbug\Errors;

use Session;
use Illuminate\Support\MessageBag;

class ErrorManager extends MessageBag implements Contracts\ErrorManagerInterface {
    /**
     * Check if there are any errors
     * 
     * @return boolean
     */
    public function hasErrors()
    {
        return 'I WORK!';
    }

}