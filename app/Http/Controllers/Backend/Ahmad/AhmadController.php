<?php

namespace App\Http\Controllers\Backend\Ahmad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Ahmad\CreateAhmad;
use App\Http\Requests\Backend\Ahmad\UpdateAhmad;
use App\Repositories\Backend\AhmadRepository;
use App\Events\Backend\Ahmad\AhmadCreated;
use App\Events\Backend\Ahmad\AhmadUpdated;
use App\Events\Backend\Ahmad\AhmadDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Ahmad;

class AhmadController extends Controller
{
    /** @var $ahmadRepository */
    private $ahmadRepository;

    public function __construct(AhmadRepository $ahmadRepo)
    {
        $this->ahmadRepository = $ahmadRepo;
    }

    /**
     * Display a listing of the Ahmad.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->ahmadRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->ahmadRepository->getPaginatedAndSortable(10);

        return view('backend.ahmads.index')->with('ahmads', $data);
    }

    /**
     * Show the form for creating a new Ahmad.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.ahmads.create');
    }

    /**
     * Store a newly created Ahmad in storage.
     *
     * @param CreateAhmad $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateAhmad $request)
    {
        $obj = $this->ahmadRepository->create(
            $request->only(["name", "l_name", "email", "sms"])
        );

        event(new AhmadCreated($obj));
        return redirect()
            ->route('admin.ahmad.index')
            ->withFlashSuccess(__('alerts.frontend.ahmad.saved'));
    }

    /**
     * Display the specified Ahmad.
     *
     * @param Ahmad $ahmad
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Ahmad $ahmad)
    {
        return view('backend.ahmads.show')->with('ahmad', $ahmad);
    }

    /**
     * Show the form for editing the specified Ahmad.
     *
     * @param Ahmad $ahmad
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Ahmad $ahmad)
    {
        return view('backend.ahmads.edit')->with('ahmad', $ahmad);
    }

    /**
     * Update the specified Ahmad in storage.
     *
     * @param UpdateAhmad $request
     *
     * @param Ahmad $ahmad
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateAhmad $request, Ahmad $ahmad)
    {
        $obj = $this->ahmadRepository->update($request->all(), $ahmad);

        event(new AhmadUpdated($obj));
        return redirect()
            ->route('admin.ahmad.index')
            ->withFlashSuccess(__('alerts.frontend.ahmad.updated'));
    }

    /**
     * Remove the specified Ahmad from storage.
     *
     * @param Ahmad $ahmad
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Ahmad $ahmad)
    {
        $obj = $this->ahmadRepository->delete($ahmad);
        event(new AhmadDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.ahmad.deleted'));
    }
}
