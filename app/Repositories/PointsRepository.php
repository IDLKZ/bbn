<?php

namespace App\Repositories;

use App\Models\Points;
use App\Repositories\BaseRepository;

/**
 * Class PointsRepository
 * @package App\Repositories
 * @version October 16, 2021, 7:12 am UTC
*/

class PointsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'bookmarks',
        'graffiti',
        'smoking_products',
        'address',
        'video',
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
        return Points::class;
    }
}
