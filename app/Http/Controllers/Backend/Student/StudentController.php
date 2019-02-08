<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Student\CreateStudent;
use App\Http\Requests\Backend\Student\UpdateStudent;
use App\Repositories\Backend\StudentRepository;
use App\Events\Backend\Student\StudentCreated;
use App\Events\Backend\Student\StudentUpdated;
use App\Events\Backend\Student\StudentDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Student;

class StudentController extends Controller
{
    /** @var $studentRepository */
    private $studentRepository;

    public function __construct(StudentRepository $studentRepo)
    {
        $this->studentRepository = $studentRepo;
    }

    /**
     * Display a listing of the Student.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->studentRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->studentRepository->getPaginatedAndSortable(10);

        return view('backend.students.index')->with('students', $data);
    }

    /**
     * Show the form for creating a new Student.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created Student in storage.
     *
     * @param CreateStudent $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateStudent $request)
    {
        $obj = $this->studentRepository->create(
            $request->only(["name", "l_name", "email", "sms"])
        );

        event(new StudentCreated($obj));
        return redirect()
            ->route('admin.student.index')
            ->withFlashSuccess(__('alerts.frontend.student.saved'));
    }

    /**
     * Display the specified Student.
     *
     * @param Student $student
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Student $student)
    {
        return view('backend.students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified Student.
     *
     * @param Student $student
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Student $student)
    {
        return view('backend.students.edit')->with('student', $student);
    }

    /**
     * Update the specified Student in storage.
     *
     * @param UpdateStudent $request
     *
     * @param Student $student
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateStudent $request, Student $student)
    {
        $obj = $this->studentRepository->update($request->all(), $student);

        event(new StudentUpdated($obj));
        return redirect()
            ->route('admin.student.index')
            ->withFlashSuccess(__('alerts.frontend.student.updated'));
    }

    /**
     * Remove the specified Student from storage.
     *
     * @param Student $student
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Student $student)
    {
        $obj = $this->studentRepository->delete($student);
        event(new StudentDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.student.deleted'));
    }
}
