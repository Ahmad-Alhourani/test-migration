<?php namespace App\Events\Backend\Student;

use Illuminate\Queue\SerializesModels;
/**
 * Class StudentUpdated.
 */
class StudentUpdated
{
    use SerializesModels;
    /**
     * @var
     */

    public $student;

    /**
     * @param $student
     */
    public function __construct($student)
    {
        $this->student = $student;
    }
}
