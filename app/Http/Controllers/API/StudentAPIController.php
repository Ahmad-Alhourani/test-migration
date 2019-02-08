<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStudentAPIRequest;
use App\Http\Requests\API\UpdateStudentAPIRequest;
use App\Models\Student;
use App\Repositories\Backend\StudentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class StudentAPIController
 * @package App\Http\Controllers\API
 */
class StudentAPIController extends Controller
{
    /** @var  StudentRepository */
    private $studentRepository;
    /** @var  StudentModel */
    private $studentModel;

    public function __construct(
        StudentRepository $studentRepo,
        Student $student
    ) {
        $this->studentRepository = $studentRepo->skipCache(true);
        $this->studentModel = $student;
    }

    /**
     * Display a listing of the Student.
     * GET|HEAD /students
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $students = $this->studentRepository->all();
        return response()->json([
            'data' => $students,
            'Students retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Student in storage.
     * POST /students
     *
     * @param CreateStudentAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateStudentAPIRequest $request)
    {
        $input = $request->all();
        $this->studentRepository->create($input);
        return response()->json(['Student saved successfully']);
    }

    /**
     * Display the specified Student.
     * GET|HEAD /students/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Student $student */
        //   $student = $this->studentRepository->findByField('id',$id);
        $student = $this->studentModel->find($id);
        return response()->json([
            'data' => $student,
            'Student retrieved successfully'
        ]);
    }

    /**
     * Update the specified Student in storage.
     * PUT/PATCH /students/{id}
     *
     * @param  int $id
     * @param UpdateStudentAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateStudentAPIRequest $request)
    {
        $input = $request->all();
        /** @var Student $student */
        $student = $this->studentModel->find($id);
        $student = $this->studentRepository->update($student, $input);
        return response()->json(['Student updated successfully']);
    }

    /**
     * Remove the specified Student from storage.
     * DELETE /students/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Student $student */
        $student = $this->studentModel->find($id);
        $student->delete();

        return response()->json('Student deleted successfully');
    }
}
