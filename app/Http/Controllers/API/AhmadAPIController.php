<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAhmadAPIRequest;
use App\Http\Requests\API\UpdateAhmadAPIRequest;
use App\Models\Ahmad;
use App\Repositories\Backend\AhmadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\First;

/**
 * Class AhmadAPIController
 * @package App\Http\Controllers\API
 */
class AhmadAPIController extends Controller
{
    /** @var  AhmadRepository */
    private $ahmadRepository;
    /** @var  AhmadModel */
    private $ahmadModel;

    public function __construct(AhmadRepository $ahmadRepo, Ahmad $ahmad)
    {
        $this->ahmadRepository = $ahmadRepo->skipCache(true);
        $this->ahmadModel = $ahmad;
    }

    /**
     * Display a listing of the Ahmad.
     * GET|HEAD /ahmads
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $ahmads = $this->ahmadRepository->all();
        return response()->json([
            'data' => $ahmads,
            'Ahmads retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Ahmad in storage.
     * POST /ahmads
     *
     * @param CreateAhmadAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateAhmadAPIRequest $request)
    {
        $input = $request->all();
        $this->ahmadRepository->create($input);
        return response()->json(['Ahmad saved successfully']);
    }

    /**
     * Display the specified Ahmad.
     * GET|HEAD /ahmads/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Ahmad $ahmad */
        //   $ahmad = $this->ahmadRepository->findByField('id',$id);
        $ahmad = $this->ahmadModel->find($id);
        return response()->json([
            'data' => $ahmad,
            'Ahmad retrieved successfully'
        ]);
    }

    /**
     * Update the specified Ahmad in storage.
     * PUT/PATCH /ahmads/{id}
     *
     * @param  int $id
     * @param UpdateAhmadAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateAhmadAPIRequest $request)
    {
        $input = $request->all();
        /** @var Ahmad $ahmad */
        $ahmad = $this->ahmadModel->find($id);
        $ahmad = $this->ahmadRepository->update($ahmad, $input);
        return response()->json(['Ahmad updated successfully']);
    }

    /**
     * Remove the specified Ahmad from storage.
     * DELETE /ahmads/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Ahmad $ahmad */
        $ahmad = $this->ahmadModel->find($id);
        $ahmad->delete();

        return response()->json('Ahmad deleted successfully');
    }
}
