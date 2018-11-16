<?php

use Carbon\Carbon;


function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}



function sourceImage($path) {
    return  file_exists('storage/public/'.$path) ? asset('storage/public/'.$path) :  asset('storage/assets/imgs/no-img.jpg');
    }