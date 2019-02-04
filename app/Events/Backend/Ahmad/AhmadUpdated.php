<?php namespace App\Events\Backend\Ahmad;

use Illuminate\Queue\SerializesModels;
/**
 * Class AhmadUpdated.
 */
class AhmadUpdated
{
    use SerializesModels;
    /**
     * @var
     */

    public $ahmad;

    /**
     * @param $ahmad
     */
    public function __construct($ahmad)
    {
        $this->ahmad = $ahmad;
    }
}
