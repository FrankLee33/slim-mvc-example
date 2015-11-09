<?php
$app->get('/', function () use ($app) {
    $app->render('index.html', array('hello' =>'FL.'));
});
$app->get('/setSession', function () use ($app) {
   $app->session->set('myname','franklee');
});

$app->get('/getSession', function () use ($app) {
  $v= $app->session->get('myname');
  echo $v;
});


$app->get('/testjson', function() use ($app) {
  $app->render(200, ['Hello' => 'World']);
});

$app->get('/testerror', function() use ($app) {
  throw new \Exception('This is an error');
});