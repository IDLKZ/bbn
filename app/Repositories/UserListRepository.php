<?php

namespace App\Repositories;

use App\Models\UserList;
use App\Repositories\BaseRepository;

/**
 * Class UserListRepository
 * @package App\Repositories
 * @version October 25, 2021, 4:56 am UTC
*/

class UserListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_id',
        'login',
        'email',
        'email_verified_at',
        'phone',
        'image',
        'password',
        'remember_token'
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
        return UserList::class;
    }
}
