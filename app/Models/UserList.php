<?php

namespace App\Models;

use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserList
 * @package App\Models
 * @version October 25, 2021, 4:56 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $points
 * @property integer $role_id
 * @property string $login
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $phone
 * @property string $image
 * @property string $password
 * @property string $remember_token
 */
class UserList extends Model
{
//    use SoftDeletes;
    use FileUpload;
    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'login' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'phone' => 'string',
        'image' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_id' => 'required|integer',
        'login' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'phone' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function points()
    {
        return $this->hasMany(\App\Models\Point::class, 'user_id');
    }
}
