<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //
    ];

    /**
     * Class event subscribers.
     *
     * @var array
     */
    protected $subscribe = [
        /*
         * Frontend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Frontend\Auth\UserEventListener::class,

        /*
         * Backend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \App\Listeners\Backend\Auth\User\UserEventListener::class,
        \App\Listeners\Backend\Auth\Role\RoleEventListener::class,

        //start_Test_start
        \App\Listeners\Backend\TestEventListener::class,
        //end_Test_end

        //start_Ahmad_start
        \App\Listeners\Backend\AhmadEventListener::class,
        //end_Ahmad_end

        //start_School_start
        \App\Listeners\Backend\SchoolEventListener::class,
        //end_School_end

        //start_Student_start
        \App\Listeners\Backend\StudentEventListener::class,
        //end_Student_end

        //start_Company_start
        \App\Listeners\Backend\CompanyEventListener::class,
        //end_Company_end

        //start_Branch_start
        \App\Listeners\Backend\BranchEventListener::class
        //end_Branch_end

        // Do not delete me :) I'm used for auto-generation
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
