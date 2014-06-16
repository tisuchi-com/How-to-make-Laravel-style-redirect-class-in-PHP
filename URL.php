<?php

class URL{

    
    
    //static function to redirect to other page
    public static function to($url){
        return header('Location: ' . $url ) ;
    }
    
    
    // static function to make HTML link
    public static function link($url, $label){ 
        return '<li><a href="'.$url.'">'. $label .'</a></li>';
        
    }
    

}