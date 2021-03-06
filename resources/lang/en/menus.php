<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles'
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
                'view' => 'View User'
            ]
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs'
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'General',
            'history' => 'History',
            'system' => 'System',

            //begin_Test_begin
            'tests' => ' Tests',
            //finish_Test_finish

            //begin_Ahmad_begin
            'ahmads' => ' Ahmads',
            //finish_Ahmad_finish
            //begin_School_begin
            'schools' => ' Schools',
            //finish_School_finish
            //begin_Student_begin
            'students' => ' Students',
            //finish_Student_finish
            //begin_Company_begin
            'companies' => ' Companies',
            //finish_Company_finish

            //begin_Branch_begin
            'branches' => ' Branches'
            //finish_Branch_finish
            // **********Do_Not_Delete_me****************
        ],

        //start_Test_start
        'tests' => [
            'view' => 'View Test',
            'all' => 'All  Tests',
            'create' => 'Create Test',
            'edit' => 'Edit Test',
            'management' => 'Test Management',
            'main' => ' Tests'
        ],
        //end_Test_end

        //start_Ahmad_start
        'ahmads' => [
            'view' => 'View Ahmad',
            'all' => 'All  Ahmads',
            'create' => 'Create Ahmad',
            'edit' => 'Edit Ahmad',
            'management' => 'Ahmad Management',
            'main' => ' Ahmads'
        ],
        //end_Ahmad_end

        //start_School_start
        'schools' => [
            'view' => 'View School',
            'all' => 'All  Schools',
            'create' => 'Create School',
            'edit' => 'Edit School',
            'management' => 'School Management',
            'main' => ' Schools'
        ],
        //end_School_end

        //start_Student_start
        'students' => [
            'view' => 'View Student',
            'all' => 'All  Students',
            'create' => 'Create Student',
            'edit' => 'Edit Student',
            'management' => 'Student Management',
            'main' => ' Students'
        ],
        //end_Student_end

        //start_Company_start
        'companies' => [
            'view' => 'View Company',
            'all' => 'All  Companies',
            'create' => 'Create Company',
            'edit' => 'Edit Company',
            'management' => 'Company Management',
            'main' => ' Companies'
        ],
        //end_Company_end

        //start_Branch_start
        'branches' => [
            'view' => 'View Branch',
            'all' => 'All  Branches',
            'create' => 'Create Branch',
            'edit' => 'Edit Branch',
            'management' => 'Branch Management',
            'main' => ' Branches'
        ]
        //end_Branch_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'zh' => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da' => 'Danish',
            'de' => 'German',
            'el' => 'Greek',
            'en' => 'English',
            'es' => 'Spanish',
            'fa' => 'Persian',
            'fr' => 'French',
            'he' => 'Hebrew',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'nl' => 'Dutch',
            'no' => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru' => 'Russian',
            'sv' => 'Swedish',
            'th' => 'Thai',
            'tr' => 'Turkish'
        ]
    ]
];
