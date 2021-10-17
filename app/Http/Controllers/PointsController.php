<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePointsRequest;
use App\Http\Requests\UpdatePointsRequest;
use App\Models\Points;
use App\Repositories\PointsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;
use Response;

class PointsController extends AppBaseController
{
    /** @var  PointsRepository */
    private $pointsRepository;

    public function __construct(PointsRepository $pointsRepo)
    {
        $this->pointsRepository = $pointsRepo;
    }

    /**
     * Display a listing of the Points.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $points = Points::with('user')->latest()->paginate(15);

        return view('points.index')
            ->with('points', $points);
    }

    public function changeStatus(Request $request, $id)
    {
        $point = Points::find($id);
        $point->status = 1;
        $point->save();
        return redirect(route('points.index'));
    }

    /**
     * Show the form for creating a new Points.
     *
     * @return Response
     */
    public function create()
    {
        return view('points.create');
    }

    /**
     * Store a newly created Points in storage.
     *
     * @param CreatePointsRequest $request
     *
     * @return Response
     */
    public function store(CreatePointsRequest $request)
    {
        $input = $request->all();

        $points = $this->pointsRepository->create($input);

        Flash::success('Points saved successfully.');

        return redirect(route('points.index'));
    }

    /**
     * Display the specified Points.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $points = $this->pointsRepository->find($id);

        if (empty($points)) {
            Flash::error('Points not found');

            return redirect(route('points.index'));
        }

        return view('points.show')->with('points', $points);
    }

    /**
     * Show the form for editing the specified Points.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $points = $this->pointsRepository->find($id);

        if (empty($points)) {
            Flash::error('Points not found');

            return redirect(route('points.index'));
        }

        return view('points.edit')->with('points', $points);
    }

    /**
     * Update the specified Points in storage.
     *
     * @param int $id
     * @param UpdatePointsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePointsRequest $request)
    {
        $points = $this->pointsRepository->find($id);

        if (empty($points)) {
            Flash::error('Points not found');

            return redirect(route('points.index'));
        }

        $points = $this->pointsRepository->update($request->all(), $id);

        Flash::success('Points updated successfully.');

        return redirect(route('points.index'));
    }

    /**
     * Remove the specified Points from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $points = $this->pointsRepository->find($id);

        if (empty($points)) {
            Flash::error('Points not found');

            return redirect(route('points.index'));
        }

        if (Storage::exists($points->video)){
            Storage::delete($points->video);
        }

        $this->pointsRepository->delete($id);

        Flash::success('Points deleted successfully.');

        return redirect(route('points.index'));
    }
}
