<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text',
        'user_id',
        'restaurant_id',
    ];

    /**
     * Get the user related to this comment.
     *
     * @return User
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the restaurant related to this comment.
     *
     * @return Restaurant
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
