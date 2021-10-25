<?php

namespace App\Models;


use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class About
 * @package App\Models
 * @version October 25, 2021, 4:52 am UTC
 *
 * @property string $text
 */
class About extends Model
{
//    use SoftDeletes;
    use FileUpload;
    use HasFactory;

    public $table = 'about';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
