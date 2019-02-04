<?php
namespace App\Listeners\Backend;

/**
 * Class FirstEventListener.
 */
/**
 * Class FirstCreated.
 */
class FirstEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('First Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('First  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('First Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\First\FirstCreated::class,
            'App\Listeners\Backend\FirstEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\First\FirstUpdated::class,
            'App\Listeners\Backend\FirstEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\First\FirstDeleted::class,
            'App\Listeners\Backend\FirstEventListener@onDeleted'
        );
    }
}
