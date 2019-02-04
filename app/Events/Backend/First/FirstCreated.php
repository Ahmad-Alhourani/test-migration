<?php
namespace App\Events\Backend\First;

use Illuminate\Queue\SerializesModels;
/**
 * Class FirstCreated.
 */
class FirstCreated
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
