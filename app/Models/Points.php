<?php

namespace App\Models;

use App\FileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class Points
 * @package App\Models
 * @version October 16, 2021, 7:12 am UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $bookmarks
 * @property string $graffiti
 * @property string $smoking_products
 * @property string $address
 * @property string $video
 * @property integer $status
 */
class Points extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use FileUpload;

    public $table = 'points';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'bookmarks',
        'graffiti',
        'smoking_products',
        'address',
        'video',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'bookmarks' => 'string',
        'graffiti' => 'string',
        'smoking_products' => 'string',
        'address' => 'string',
        'video' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'bookmarks' => 'nullable|string|max:255',
        'graffiti' => 'nullable|string|max:255',
        'smoking_products' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'video' => 'nullable|string|max:255',
        'status' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public static function addPoint($fields)
    {
        $point = new static();
        $point->user_id = Auth::id();
        if (isset($fields['bookmarks'])){
            $point->bookmarks = $fields['bookmarks'];
        }
        if (isset($fields['graffiti'])) {
            $point->graffiti = $fields['graffiti'];
        }
        if (isset($fields['smoking_products'])) {
            $point->smoking_products = $fields['smoking_products'];
        }
        $point->address = $fields['address'];
        $point->video = $fields['video']->store('videos', ['disk' => 'my_files']);
        $point->save();
    }
}
