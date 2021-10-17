<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHelpFundsRequest;
use App\Http\Requests\UpdateHelpFundsRequest;
use App\Models\HelpFunds;
use App\Repositories\HelpFundsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HelpFundsController extends AppBaseController
{
    /** @var  HelpFundsRepository */
    private $helpFundsRepository;

    public function __construct(HelpFundsRepository $helpFundsRepo)
    {
        $this->helpFundsRepository = $helpFundsRepo;
    }

    /**
     * Display a listing of the HelpFunds.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $helpFunds = $this->helpFundsRepository->all();

        return view('help_funds.index')
            ->with('helpFunds', $helpFunds);
    }

    public function changeFunds($id)
    {
        $info = HelpFunds::find($id);
        if ($info->status){
            $info->status = 0;
        } else {
            $info->status = 1;
        }
        $info->save();
        return redirect(route('helpFunds.index'));
    }
    /**
     * Show the form for creating a new HelpFunds.
     *
     * @return Response
     */
    public function create()
    {
        return view('help_funds.create');
    }

    /**
     * Store a newly created HelpFunds in storage.
     *
     * @param CreateHelpFundsRequest $request
     *
     * @return Response
     */
    public function store(CreateHelpFundsRequest $request)
    {
        $input = $request->all();

        $helpFunds = $this->helpFundsRepository->create($input);

        Flash::success('Help Funds saved successfully.');

        return redirect(route('helpFunds.index'));
    }

    /**
     * Display the specified HelpFunds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $helpFunds = $this->helpFundsRepository->find($id);

        if (empty($helpFunds)) {
            Flash::error('Help Funds not found');

            return redirect(route('helpFunds.index'));
        }

        return view('help_funds.show')->with('helpFunds', $helpFunds);
    }

    /**
     * Show the form for editing the specified HelpFunds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $helpFunds = $this->helpFundsRepository->find($id);

        if (empty($helpFunds)) {
            Flash::error('Help Funds not found');

            return redirect(route('helpFunds.index'));
        }

        return view('help_funds.edit')->with('helpFunds', $helpFunds);
    }

    /**
     * Update the specified HelpFunds in storage.
     *
     * @param int $id
     * @param UpdateHelpFundsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHelpFundsRequest $request)
    {
        $helpFunds = $this->helpFundsRepository->find($id);

        if (empty($helpFunds)) {
            Flash::error('Help Funds not found');

            return redirect(route('helpFunds.index'));
        }

        $helpFunds = $this->helpFundsRepository->update($request->all(), $id);

        Flash::success('Help Funds updated successfully.');

        return redirect(route('helpFunds.index'));
    }

    /**
     * Remove the specified HelpFunds from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $helpFunds = $this->helpFundsRepository->find($id);

        if (empty($helpFunds)) {
            Flash::error('Help Funds not found');

            return redirect(route('helpFunds.index'));
        }

        $this->helpFundsRepository->delete($id);

        Flash::success('Help Funds deleted successfully.');

        return redirect(route('helpFunds.index'));
    }
}
