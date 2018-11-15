<?php

use Carbon\Carbon;


function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}



function sourceImage($path) {
    return  $path != null && file_exists('storage/'.$path) ? asset('storage/'.$path) :  asset('storage/assets/imgs/no-img.jpg');
    }