<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $tables='todos';

    protected $fillable = [
        'title', 'completed', 'priority', 'user_id'
    ];

    protected $casts = [
        'completed' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
}
