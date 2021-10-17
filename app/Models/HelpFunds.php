<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HelpFunds
 * @package App\Models
 * @version October 17, 2021, 7:55 am UTC
 *
 * @property string $login
 * @property string $email
 * @property string $phone
 * @property string $title
 * @property string $text
 */

class HelpFunds extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'help_funds';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'login',
        'email',
        'phone',
        'title',
        'text',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'login' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'title' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'login' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'text' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
