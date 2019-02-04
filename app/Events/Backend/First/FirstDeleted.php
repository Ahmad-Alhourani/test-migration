<?php namespace App\Events\Backend\First;

use Illuminate\Queue\SerializesModels;
/**
 * Class FirstDeleted.
 */

class FirstDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $first;

    /**
     * @param $first
     */
    public function __construct($first)
    {
        $this->first = $first;
    }
}
