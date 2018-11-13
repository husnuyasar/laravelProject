<?php

namespace App\Helpers;

class ErrorHelper{

    public static $ERROR_TYPE_DANGER = 'danger';
    public static $ERROR_TYPE_INFO = 'info';
    public static $ERROR_TYPE_WARNING = 'warning';
    public static $ERROR_TYPE_SUCCESS = 'success';
    
    public static function pushErrorMessage($request,$error_type,$error_description){
        $request->session()->push('managementerrors',['type'=>$error_type,'message'=>$error_description]);
    }
}
