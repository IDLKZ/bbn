<?php

namespace App\Models;

use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Partners
 * @package App\Models
 * @version October 15, 2021, 10:04 am UTC
 *
 * @property string $title
 * @property string $link
 * @property string $logo
 */
class Partners extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use FileUpload;

    public $table = 'partners';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'link',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'link' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'link' => 'required|string|max:255',
        'logo' => 'required|image',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
