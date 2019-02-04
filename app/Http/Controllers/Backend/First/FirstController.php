<?php

namespace App\Http\Controllers\Backend\First;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\First\CreateFirst;
use App\Http\Requests\Backend\First\UpdateFirst;
use App\Repositories\Backend\FirstRepository;
use App\Events\Backend\First\FirstCreated;
use App\Events\Backend\First\FirstUpdated;
use App\Events\Backend\First\FirstDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\First;

class FirstController extends Controller
{
    /** @var $firstRepository */
    private $firstRepository;

    public function __construct(FirstRepository $firstRepo)
    {
        $this->firstRepository = $firstRepo;
    }

    /**
     * Display a listing of the First.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->firstRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->firstRepository->getPaginatedAndSortable(10);

        return view('backend.firsts.index')->with('firsts', $data);
    }

    /**
     * Show the form for creating a new First.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.firsts.create');
    }

    /**
     * Store a newly created First in storage.
     *
     * @param CreateFirst $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateFirst $request)
    {
        $obj = $this->firstRepository->create(
            $request->only(["name", "l_name", "email", "des", "sms"])
        );

        event(new FirstCreated($obj));
        return redirect()
            ->route('admin.first.index')
            ->withFlashSuccess(__('alerts.frontend.first.saved'));
    }

    /**
     * Display the specified First.
     *
     * @param First $first
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(First $first)
    {
        return view('backend.firsts.show')->with('first', $first);
    }

    /**
     * Show the form for editing the specified First.
     *
     * @param First $first
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(First $first)
    {
        return view('backend.firsts.edit')->with('first', $first);
    }

    /**
     * Update the specified First in storage.
     *
     * @param UpdateFirst $request
     *
     * @param First $first
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateFirst $request, First $first)
    {
        $obj = $this->firstRepository->update($request->all(), $first);

        event(new FirstUpdated($obj));
        return redirect()
            ->route('admin.first.index')
            ->withFlashSuccess(__('alerts.frontend.first.updated'));
    }

    /**
     * Remove the specified First from storage.
     *
     * @param First $first
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(First $first)
    {
        $obj = $this->firstRepository->delete($first);
        event(new FirstDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.first.deleted'));
    }
}
