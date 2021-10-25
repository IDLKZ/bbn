<?php

namespace App\Models;


use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery
 * @package App\Models
 * @version October 25, 2021, 4:50 am UTC
 *
 * @property string $image
 */
class Gallery extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use FileUpload;
    public $table = 'galleries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
