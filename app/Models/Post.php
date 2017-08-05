<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body', 'created_at', 'updated_at', 'deleted_at'];
    protected $casts = [
        'created_at' => 'date',
        'updated_at' => 'date',
        'deleted_at' => 'date',
    ];

    protected $guarded = ['id'];

    public function user() : BelongsTo
    {
        $this->belongsTo('App\Models\User', 'user_id');
    }
}
