<?php

Route::get('/', function () {
    return View('content');
});

Route::resource('tasks', 'Tasks');
