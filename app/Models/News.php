<?php

namespace App\Models;

use App\FileUpload;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class News
 * @package App\Models
 * @version October 15, 2021, 5:46 am UTC
 *
 * @property string $title
 * @property string $alias
 * @property string $description
 * @property string $image
 */
class News extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use Sluggable;
    use FileUpload;

    public $table = 'news';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title'
            ]
        ];
    }

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'alias',
        'description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'alias' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
