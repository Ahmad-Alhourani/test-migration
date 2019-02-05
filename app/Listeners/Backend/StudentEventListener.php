<?php
namespace App\Listeners\Backend;

/**
 * Class StudentEventListener.
 */
/**
 * Class StudentCreated.
 */
class StudentEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Student Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Student  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Student Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Student\StudentCreated::class,
            'App\Listeners\Backend\StudentEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Student\StudentUpdated::class,
            'App\Listeners\Backend\StudentEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Student\StudentDeleted::class,
            'App\Listeners\Backend\StudentEventListener@onDeleted'
        );
    }
}
