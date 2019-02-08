<?php

/**
 * Branch Management
 * All route names are prefixed with 'admin.branch'.
 */
Route::group(
    [
        'namespace' => 'Branch',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Branch CRUD
         */
        Route::resource('branch', 'BranchController');
    }
);
