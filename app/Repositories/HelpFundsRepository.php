<?php

namespace App\Repositories;

use App\Models\HelpFunds;
use App\Repositories\BaseRepository;

/**
 * Class HelpFundsRepository
 * @package App\Repositories
 * @version October 17, 2021, 7:55 am UTC
*/

class HelpFundsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'login',
        'email',
        'phone',
        'title',
        'text'
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
        return HelpFunds::class;
    }
}
