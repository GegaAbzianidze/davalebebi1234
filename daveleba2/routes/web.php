<?php

use Illuminate\Support\Facades\Route;

$array = [
    "message" => "unknown"
];


Route::get('/name', function () {
    return 'gega abzianidze';
});


Route::get('/age', function () {
    return '20';
});

Route::get('/hobby', function () {
    return 'FPV drone racing';
});

Route::get('/height', function () {
    return '1.85';
});


Route::get('/EyeColor', function () {
   return 'Brown';
    
});

Route::match(['post', 'get'],'/post', function () {
    $array["message"] = "Updated!";
    return json_encode($array);
    
});


Route::match(['put', 'get'],'/put', function () {
    $array["message"] = "Added!";
    return json_encode($array);
    
});

Route::match(['delete', 'get'],'/delete', function () {
    $array["message"] = "Deleted!";
    return json_encode($array);
    
});