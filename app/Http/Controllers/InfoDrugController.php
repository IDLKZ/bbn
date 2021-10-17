<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfoDrugRequest;
use App\Http\Requests\UpdateInfoDrugRequest;
use App\Models\InfoDrug;
use App\Repositories\InfoDrugRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InfoDrugController extends AppBaseController
{
    /** @var  InfoDrugRepository */
    private $infoDrugRepository;

    public function __construct(InfoDrugRepository $infoDrugRepo)
    {
        $this->infoDrugRepository = $infoDrugRepo;
    }

    /**
     * Display a listing of the InfoDrug.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $infoDrugs = $this->infoDrugRepository->all();

        return view('info_drugs.index')
            ->with('infoDrugs', $infoDrugs);
    }

    public function change($id)
    {
        $info = InfoDrug::find($id);
        if ($info->status){
            $info->status = 0;
        } else {
            $info->status = 1;
        }
        $info->save();
        return redirect(route('infoDrugs.index'));
    }

    /**
     * Show the form for creating a new InfoDrug.
     *
     * @return Response
     */
    public function create()
    {
        return view('info_drugs.create');
    }

    /**
     * Store a newly created InfoDrug in storage.
     *
     * @param CreateInfoDrugRequest $request
     *
     * @return Response
     */
    public function store(CreateInfoDrugRequest $request)
    {
        $input = $request->all();

        $infoDrug = $this->infoDrugRepository->create($input);

        Flash::success('Info Drug saved successfully.');

        return redirect(route('infoDrugs.index'));
    }

    /**
     * Display the specified InfoDrug.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infoDrug = $this->infoDrugRepository->find($id);

        if (empty($infoDrug)) {
            Flash::error('Info Drug not found');

            return redirect(route('infoDrugs.index'));
        }

        return view('info_drugs.show')->with('infoDrug', $infoDrug);
    }

    /**
     * Show the form for editing the specified InfoDrug.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infoDrug = $this->infoDrugRepository->find($id);

        if (empty($infoDrug)) {
            Flash::error('Info Drug not found');

            return redirect(route('infoDrugs.index'));
        }

        return view('info_drugs.edit')->with('infoDrug', $infoDrug);
    }

    /**
     * Update the specified InfoDrug in storage.
     *
     * @param int $id
     * @param UpdateInfoDrugRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfoDrugRequest $request)
    {
        $infoDrug = $this->infoDrugRepository->find($id);

        if (empty($infoDrug)) {
            Flash::error('Info Drug not found');

            return redirect(route('infoDrugs.index'));
        }

        $infoDrug = $this->infoDrugRepository->update($request->all(), $id);

        Flash::success('Info Drug updated successfully.');

        return redirect(route('infoDrugs.index'));
    }

    /**
     * Remove the specified InfoDrug from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infoDrug = $this->infoDrugRepository->find($id);

        if (empty($infoDrug)) {
            Flash::error('Info Drug not found');

            return redirect(route('infoDrugs.index'));
        }

        $this->infoDrugRepository->delete($id);

        Flash::success('Info Drug deleted successfully.');

        return redirect(route('infoDrugs.index'));
    }
}
