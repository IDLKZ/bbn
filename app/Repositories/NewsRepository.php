<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\BaseRepository;

/**
 * Class NewsRepository
 * @package App\Repositories
 * @version October 15, 2021, 5:46 am UTC
*/

class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'alias',
        'description',
        'image'
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
        return News::class;
    }
}
