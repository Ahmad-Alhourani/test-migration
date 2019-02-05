<?php namespace App\Events\Backend\School;

use Illuminate\Queue\SerializesModels;
/**
 * Class SchoolDeleted.
 */

class SchoolDeleted
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
