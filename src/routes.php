<?php

Route::get('add/{a}/{b}', 'Parag\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Parag\Calculator\CalculatorController@subtract');