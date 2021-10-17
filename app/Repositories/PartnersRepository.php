<?php

namespace App\Repositories;

use App\Models\Partners;
use App\Repositories\BaseRepository;

/**
 * Class PartnersRepository
 * @package App\Repositories
 * @version October 15, 2021, 10:04 am UTC
*/

class PartnersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'link',
        'logo'
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
        return Partners::class;
    }
}
