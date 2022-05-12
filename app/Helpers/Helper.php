<?php

namespace App\Helpers;

class Helper{
    public static function format_message($message, $type)
    {
        return '<p class="alert alert-'.$type.'">'.$message.'</p>';
    }
}