<?php namespace App\Events\Backend\School;

use Illuminate\Queue\SerializesModels;
/**
 * Class SchoolUpdated.
 */
class SchoolUpdated
{
    use SerializesModels;
    /**
     * @var
     */

    public $school;

    /**
     * @param $school
     */
    public function __construct($school)
    {
        $this->school = $school;
    }
}
