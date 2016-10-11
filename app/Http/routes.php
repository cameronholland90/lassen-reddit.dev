<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
	$data['my_name'] = 'Cameron';
	$data['your_name'] = 'Fer';

	// cameron's prefered way of passing data to the view
    return view('my-second-view')->with($data);
});

Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
	if ($name == "Chris") {
        return redirect('/sayhello');
    }

	return 'Hello ' . $name;
});

// route to uppercase word given
Route::get('/uppercase/{word?}', function($word = 'word') {
	return strtoupper($word);
});
// route to add one to number given
Route::get('/increment/{number?}', function($number = 0) {
	return $number + 1;
});
// route to add the two numbers given together
Route::get('/add/{a?}/{b?}', function($a = 2, $b = 2) {
	return $a + $b;
});

Route::get('/rolldice/{guess?}', function($guess = 1) {
	$data['dice_roll'] = mt_rand(1, 6);
	$data['guess'] = $guess;
	$data['correct'] = ($data['dice_roll'] == $data['guess']);
	return view('roll-dice2')->with($data);
});

Route::get('/fizzbuzz', function() {
	return view('fizzbuzz');
});