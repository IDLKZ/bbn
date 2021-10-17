<?php

namespace App\Models;

use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class InfoDrug
 * @package App\Models
 * @version October 16, 2021, 5:00 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $city
 * @property string $address
 * @property string $text
 * @property string $image
 * @property integer $status
 */
class InfoDrug extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use FileUpload;
    public $table = 'info_drug_trafficking';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'address' => 'string',
        'text' => 'string',
        'image' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'text' => 'nullable|string',
        'image' => 'nullable|string|max:255',
        'status' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
