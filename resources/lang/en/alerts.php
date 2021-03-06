<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.'
        ],

        'users' => [
            'cant_resend_confirmation' =>
                'The application is currently set to manually approve users.',
            'confirmation_email' =>
                'A new confirmation e-mail has been sent to the address on file.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'The user was successfully created.',
            'deleted' => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored' => 'The user was successfully restored.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'The user was successfully updated.',
            'updated_password' =>
                "The user's password was successfully updated."
        ]
    ],

    'frontend' => [
        'contact' => [
            'sent' =>
                'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.'
        ],

        //start_Test_start
        'test' => [
            'saved' => 'Test saved successfully.',
            'updated' => 'Test updated successfully.',
            'deleted' => 'Test deleted successfully.'
        ],
        //end_Test_end

        //start_Ahmad_start
        'ahmad' => [
            'saved' => 'Ahmad saved successfully.',
            'updated' => 'Ahmad updated successfully.',
            'deleted' => 'Ahmad deleted successfully.'
        ],
        //end_Ahmad_end

        //start_School_start
        'school' => [
            'saved' => 'School saved successfully.',
            'updated' => 'School updated successfully.',
            'deleted' => 'School deleted successfully.'
        ],
        //end_School_end

        //start_Student_start
        'student' => [
            'saved' => 'Student saved successfully.',
            'updated' => 'Student updated successfully.',
            'deleted' => 'Student deleted successfully.'
        ],
        //end_Student_end

        //start_Company_start
        'company' => [
            'saved' => 'Company saved successfully.',
            'updated' => 'Company updated successfully.',
            'deleted' => 'Company deleted successfully.'
        ],
        //end_Company_end

        //start_Branch_start
        'branch' => [
            'saved' => 'Branch saved successfully.',
            'updated' => 'Branch updated successfully.',
            'deleted' => 'Branch deleted successfully.'
        ]
        //end_Branch_end

        // Do not delete me :) I'm used for auto-generation
    ]
];
