<?php

Route::set('login', function() {
    $login = new Login();
    $login->CreateView('login');
});

Route::set('home', function() {
    $home = new Home();
    $home->CreateView('home');
    $home->ShowSongs();
});