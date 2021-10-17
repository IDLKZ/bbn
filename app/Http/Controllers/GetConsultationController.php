<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGetConsultationRequest;
use App\Http\Requests\UpdateGetConsultationRequest;
use App\Models\GetConsultation;
use App\Repositories\GetConsultationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GetConsultationController extends AppBaseController
{
    /** @var  GetConsultationRepository */
    private $getConsultationRepository;

    public function __construct(GetConsultationRepository $getConsultationRepo)
    {
        $this->getConsultationRepository = $getConsultationRepo;
    }

    /**
     * Display a listing of the GetConsultation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $getConsultations = $this->getConsultationRepository->all();

        return view('get_consultations.index')
            ->with('getConsultations', $getConsultations);
    }

    public function changeConsultation($id)
    {
        $info = GetConsultation::find($id);
        if ($info->status){
            $info->status = 0;
        } else {
            $info->status = 1;
        }
        $info->save();
        return redirect(route('getConsultations.index'));
    }
    /**
     * Show the form for creating a new GetConsultation.
     *
     * @return Response
     */
    public function create()
    {
        return view('get_consultations.create');
    }

    /**
     * Store a newly created GetConsultation in storage.
     *
     * @param CreateGetConsultationRequest $request
     *
     * @return Response
     */
    public function store(CreateGetConsultationRequest $request)
    {
        $input = $request->all();

        $getConsultation = $this->getConsultationRepository->create($input);

        Flash::success('Get Consultation saved successfully.');

        return redirect(route('getConsultations.index'));
    }

    /**
     * Display the specified GetConsultation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $getConsultation = $this->getConsultationRepository->find($id);

        if (empty($getConsultation)) {
            Flash::error('Get Consultation not found');

            return redirect(route('getConsultations.index'));
        }

        return view('get_consultations.show')->with('getConsultation', $getConsultation);
    }

    /**
     * Show the form for editing the specified GetConsultation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $getConsultation = $this->getConsultationRepository->find($id);

        if (empty($getConsultation)) {
            Flash::error('Get Consultation not found');

            return redirect(route('getConsultations.index'));
        }

        return view('get_consultations.edit')->with('getConsultation', $getConsultation);
    }

    /**
     * Update the specified GetConsultation in storage.
     *
     * @param int $id
     * @param UpdateGetConsultationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGetConsultationRequest $request)
    {
        $getConsultation = $this->getConsultationRepository->find($id);

        if (empty($getConsultation)) {
            Flash::error('Get Consultation not found');

            return redirect(route('getConsultations.index'));
        }

        $getConsultation = $this->getConsultationRepository->update($request->all(), $id);

        Flash::success('Get Consultation updated successfully.');

        return redirect(route('getConsultations.index'));
    }

    /**
     * Remove the specified GetConsultation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $getConsultation = $this->getConsultationRepository->find($id);

        if (empty($getConsultation)) {
            Flash::error('Get Consultation not found');

            return redirect(route('getConsultations.index'));
        }

        $this->getConsultationRepository->delete($id);

        Flash::success('Get Consultation deleted successfully.');

        return redirect(route('getConsultations.index'));
    }
}
