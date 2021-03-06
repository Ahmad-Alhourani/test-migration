<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update'
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
        'none' => 'None'
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total'
                ]
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total'
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History'
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone'
                        ]
                    ]
                ],

                'view' => 'View User'
            ]
        ],

        //start_Test_start
        'tests' => [
            'management' => ' Tests Management',
            'create' => 'Create Test',
            'view' => 'View Test',
            'edit' => 'Edit Test',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'name5' => "Name5",
                'l_name' => "Last Name",
                'email' => "Email",
                'sms' => "SMS",
                'sort' => 'Sort',
                'total' => ' Tests total| Tests total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Test_end

        //start_Ahmad_start
        'ahmads' => [
            'management' => ' Ahmads Management',
            'create' => 'Create Ahmad',
            'view' => 'View Ahmad',
            'edit' => 'Edit Ahmad',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'l_name' => "Last Name",
                'email' => "Email",
                'sms' => "SMS",
                'sort' => 'Sort',
                'total' => ' Ahmads total| Ahmads total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Ahmad_end

        //start_School_start
        'schools' => [
            'management' => ' Schools Management',
            'create' => 'Create School',
            'view' => 'View School',
            'edit' => 'Edit School',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'l_name' => "Last Name",
                'email' => "Email",
                'des' => "Des",
                'sms' => "SMS",
                'sort' => 'Sort',
                'total' => ' Schools total| Schools total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_School_end

        //start_Student_start
        'students' => [
            'management' => ' Students Management',
            'create' => 'Create Student',
            'view' => 'View Student',
            'edit' => 'Edit Student',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'school_id' => "School",
                'l_name' => "Last Name",
                'email' => "Email",
                'sms' => "SMS",
                'sort' => 'Sort',
                'total' => ' Students total| Students total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Student_end

        //start_Company_start
        'companies' => [
            'management' => ' Companies Management',
            'create' => 'Create Company',
            'view' => 'View Company',
            'edit' => 'Edit Company',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'sms' => "SMS",
                'sort' => 'Sort',
                'total' => ' Companies total| Companies total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ],
        //end_Company_end

        //start_Branch_start
        'branches' => [
            'management' => ' Branches Management',
            'create' => 'Create Branch',
            'view' => 'View Branch',
            'edit' => 'Edit Branch',

            'table' => [
                'id' => "Id",
                'name' => "Name",
                'comp0_id' => "Company Name",
                'comp2_id' => "Company Name",
                'sort' => 'Sort',
                'total' => ' Branches total| Branches total'
            ],

            'content' => [
                'created_at' => 'Created At',
                'deleted_at' => 'Deleted At',
                'last_updated' => 'Last Update'
            ]
        ]
        //end_Branch_end

        // Do not delete me :) I'm used for auto-generation
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me'
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information'
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link'
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password'
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information'
            ]
        ]
    ]
];
