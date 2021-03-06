<?php

/**
 * Ahmad Management
 * All route names are prefixed with 'admin.ahmad'.
 */
Route::group(
    [
        'namespace' => 'Ahmad',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Ahmad CRUD
         */
        Route::resource('ahmad', 'AhmadController');
    }
);
