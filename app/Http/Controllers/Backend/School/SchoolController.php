<?php

namespace App\Http\Controllers\Backend\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\School\CreateSchool;
use App\Http\Requests\Backend\School\UpdateSchool;
use App\Repositories\Backend\SchoolRepository;
use App\Events\Backend\School\SchoolCreated;
use App\Events\Backend\School\SchoolUpdated;
use App\Events\Backend\School\SchoolDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\School;

class SchoolController extends Controller
{
    /** @var $schoolRepository */
    private $schoolRepository;

    public function __construct(SchoolRepository $schoolRepo)
    {
        $this->schoolRepository = $schoolRepo;
    }

    /**
     * Display a listing of the School.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->schoolRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->schoolRepository->getPaginatedAndSortable(10);

        return view('backend.schools.index')->with('schools', $data);
    }

    /**
     * Show the form for creating a new School.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.schools.create');
    }

    /**
     * Store a newly created School in storage.
     *
     * @param CreateSchool $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateSchool $request)
    {
        $obj = $this->schoolRepository->create(
            $request->only(["name", "l_name", "email", "des", "sms"])
        );

        event(new SchoolCreated($obj));
        return redirect()
            ->route('admin.school.index')
            ->withFlashSuccess(__('alerts.frontend.school.saved'));
    }

    /**
     * Display the specified School.
     *
     * @param School $school
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(School $school)
    {
        return view('backend.schools.show')->with('school', $school);
    }

    /**
     * Show the form for editing the specified School.
     *
     * @param School $school
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(School $school)
    {
        return view('backend.schools.edit')->with('school', $school);
    }

    /**
     * Update the specified School in storage.
     *
     * @param UpdateSchool $request
     *
     * @param School $school
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateSchool $request, School $school)
    {
        $obj = $this->schoolRepository->update($request->all(), $school);

        event(new SchoolUpdated($obj));
        return redirect()
            ->route('admin.school.index')
            ->withFlashSuccess(__('alerts.frontend.school.updated'));
    }

    /**
     * Remove the specified School from storage.
     *
     * @param School $school
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(School $school)
    {
        $obj = $this->schoolRepository->delete($school);
        event(new SchoolDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.school.deleted'));
    }
}
