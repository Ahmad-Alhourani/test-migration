<?php
namespace App\Listeners\Backend;

/**
 * Class AhmadEventListener.
 */
/**
 * Class AhmadCreated.
 */
class AhmadEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Ahmad Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Ahmad  Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Ahmad Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Ahmad\AhmadCreated::class,
            'App\Listeners\Backend\AhmadEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Ahmad\AhmadUpdated::class,
            'App\Listeners\Backend\AhmadEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Ahmad\AhmadDeleted::class,
            'App\Listeners\Backend\AhmadEventListener@onDeleted'
        );
    }
}
