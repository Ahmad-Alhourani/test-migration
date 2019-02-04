<?php

/**
 * First Management
 * All route names are prefixed with 'admin.first'.
 */
Route::group(
    [
        'namespace' => 'First',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * First CRUD
         */
        Route::resource('first', 'FirstController');
    }
);
