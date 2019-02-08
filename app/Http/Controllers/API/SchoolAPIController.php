<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSchoolAPIRequest;
use App\Http\Requests\API\UpdateSchoolAPIRequest;
use App\Models\School;
use App\Repositories\Backend\SchoolRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class SchoolAPIController
 * @package App\Http\Controllers\API
 */
class SchoolAPIController extends Controller
{
    /** @var  SchoolRepository */
    private $schoolRepository;
    /** @var  SchoolModel */
    private $schoolModel;

    public function __construct(SchoolRepository $schoolRepo, School $school)
    {
        $this->schoolRepository = $schoolRepo->skipCache(true);
        $this->schoolModel = $school;
    }

    /**
     * Display a listing of the School.
     * GET|HEAD /schools
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $schools = $this->schoolRepository->all();
        return response()->json([
            'data' => $schools,
            'Schools retrieved successfully'
        ]);
    }

    /**
     * Store a newly created School in storage.
     * POST /schools
     *
     * @param CreateSchoolAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateSchoolAPIRequest $request)
    {
        $input = $request->all();
        $this->schoolRepository->create($input);
        return response()->json(['School saved successfully']);
    }

    /**
     * Display the specified School.
     * GET|HEAD /schools/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var School $school */
        //   $school = $this->schoolRepository->findByField('id',$id);
        $school = $this->schoolModel->find($id);
        return response()->json([
            'data' => $school,
            'School retrieved successfully'
        ]);
    }

    /**
     * Update the specified School in storage.
     * PUT/PATCH /schools/{id}
     *
     * @param  int $id
     * @param UpdateSchoolAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateSchoolAPIRequest $request)
    {
        $input = $request->all();
        /** @var School $school */
        $school = $this->schoolModel->find($id);
        $school = $this->schoolRepository->update($school, $input);
        return response()->json(['School updated successfully']);
    }

    /**
     * Remove the specified School from storage.
     * DELETE /schools/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var School $school */
        $school = $this->schoolModel->find($id);
        $school->delete();

        return response()->json('School deleted successfully');
    }
}
