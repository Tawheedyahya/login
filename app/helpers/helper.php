<?php
if(!function_exists('pp')){
    function pp($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
        die;
    }
}
