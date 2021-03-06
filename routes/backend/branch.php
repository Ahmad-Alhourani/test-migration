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
        Route::get('company/{id}/branches', 'BranchController@company')->name(
            'branch.company'
        );
        Route::get('company2/{id}/branches', 'BranchController@company2')->name(
            'branch.company2'
        );
    }
);
