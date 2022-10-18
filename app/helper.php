<?php 

 function createDateFormat($date,$date_format)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d',$date)->format($date_format); 
}

function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name); 
}

function showCustomLog($msg)
{
    
    \Log::channel('helperlog')->info($msg);
    
}

?>