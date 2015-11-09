<?php
//Idiorm & Paris
$app->get('/list', function () use ($app) {
   $users = ORM::for_table('users')
    ->select('*')
    ->where_equal('address', 'HanDan')
    ->find_many();
	foreach ($users as $user) {
	    echo "<p>{$user->username}</p>";
	}
});

$app->get('/add',function() use ($app){
	$user = ORM::for_table('user')
	    ->where_equal('username', 'j4mie')
	    ->find_one();
	 
	$user->first_name = 'Jamie';
	$user->save();
});

$app->get('/update',function() use ($app){
	$user = ORM::for_table('user')
	    ->where_equal('username', 'j4mie')
	    ->find_one();
	 
	$user->first_name = 'Jamie';
	$user->save();
});