<?php

/**
 * Student Management
 * All route names are prefixed with 'admin.student'.
 */
Route::group(
    [
        'namespace' => 'Student',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Student CRUD
         */
        Route::resource('student', 'StudentController');
        Route::get('school/{id}/students', 'StudentController@school')->name(
            'student.school'
        );
    }
);
