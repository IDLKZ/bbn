<?php

namespace App\Repositories;

use App\Models\GetConsultation;
use App\Repositories\BaseRepository;

/**
 * Class GetConsultationRepository
 * @package App\Repositories
 * @version October 17, 2021, 6:43 am UTC
*/

class GetConsultationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GetConsultation::class;
    }
}
