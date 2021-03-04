<?php

class FormSanitizer {


    public static function sanitizeString($inputText) {
        $inputText = strip_tags($inputText);
        //replace all " " with "" 
        $inputText = str_replace(" ", "", $inputText); 
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }

      public static function sanitizeUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText); 
        return $inputText; 
    }

      public static function sanitizePassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText; 
    }

    public static function sanitizeEmail($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText); 
        return $inputText; 
    }





}

?>