<?php

$app->get('/login', function() use ($app) {
    $app->render('auth/login.php');
})->name('login');

$app->post('/login', function() use ($app) {
    echo "Form posted";
})->name('login.post');

?>