<?php

/**
 * School Management
 * All route names are prefixed with 'admin.school'.
 */
Route::group(
    [
        'namespace' => 'School',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * School CRUD
         */
        Route::resource('school', 'SchoolController');
    }
);
