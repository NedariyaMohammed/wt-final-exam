<?php

function greeting(){

    $timeOfDay = date('a');
    if($timeOfDay == 'am'){
        return 'Good morning, welcome to our site';
    }else{
        return 'Good afternoon, welcome to our site';
    }

}



?>