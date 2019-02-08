<?php
namespace App\Listeners\Backend;

/**
 * Class SchoolEventListener.
 */
/**
 * Class SchoolCreated.
 */
class SchoolEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('School Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('School  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('School Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\School\SchoolCreated::class,
            'App\Listeners\Backend\SchoolEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\School\SchoolUpdated::class,
            'App\Listeners\Backend\SchoolEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\School\SchoolDeleted::class,
            'App\Listeners\Backend\SchoolEventListener@onDeleted'
        );
    }
}
