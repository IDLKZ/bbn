<?php

namespace App\Repositories;

use App\Models\InfoDrug;
use App\Repositories\BaseRepository;

/**
 * Class InfoDrugRepository
 * @package App\Repositories
 * @version October 16, 2021, 5:00 pm UTC
*/

class InfoDrugRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'city',
        'address',
        'text',
        'image',
        'status'
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
        return InfoDrug::class;
    }
}
