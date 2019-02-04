<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFirstAPIRequest;
use App\Http\Requests\API\UpdateFirstAPIRequest;
use App\Models\First;
use App\Repositories\Backend\FirstRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class FirstAPIController
 * @package App\Http\Controllers\API
 */
class FirstAPIController extends Controller
{
    /** @var  FirstRepository */
    private $firstRepository;
    /** @var  FirstModel */
    private $firstModel;

    public function __construct(FirstRepository $firstRepo, First $first)
    {
        $this->firstRepository = $firstRepo->skipCache(true);
        $this->firstModel = $first;
    }

    /**
     * Display a listing of the First.
     * GET|HEAD /firsts
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $firsts = $this->firstRepository->all();
        return response()->json([
            'data' => $firsts,
            'Firsts retrieved successfully'
        ]);
    }

    /**
     * Store a newly created First in storage.
     * POST /firsts
     *
     * @param CreateFirstAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateFirstAPIRequest $request)
    {
        $input = $request->all();
        $this->firstRepository->create($input);
        return response()->json(['First saved successfully']);
    }

    /**
     * Display the specified First.
     * GET|HEAD /firsts/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var First $first */
        //   $first = $this->firstRepository->findByField('id',$id);
        $first = $this->firstModel->find($id);
        return response()->json([
            'data' => $first,
            'First retrieved successfully'
        ]);
    }

    /**
     * Update the specified First in storage.
     * PUT/PATCH /firsts/{id}
     *
     * @param  int $id
     * @param UpdateFirstAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateFirstAPIRequest $request)
    {
        $input = $request->all();
        /** @var First $first */
        $first = $this->firstModel->find($id);
        $first = $this->firstRepository->update($first, $input);
        return response()->json(['First updated successfully']);
    }

    /**
     * Remove the specified First from storage.
     * DELETE /firsts/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var First $first */
        $first = $this->firstModel->find($id);
        $first->delete();

        return response()->json('First deleted successfully');
    }
}
