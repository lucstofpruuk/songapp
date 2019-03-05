<?php

Route::set('index.php', function() {
    index::CreateView('index');
});

Route::set('home', function() {
    home::CreateView('home');
    home::test();
});

Route::set('test', function() {
    test::CreateView('test');
});

?>