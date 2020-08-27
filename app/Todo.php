<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    protected $appends = [
        'links',
    ];

    public function getLinksAttribute()
    {
        return [
            'show' => route('todos.show', $this),
            'destroy' => route('todos.destroy', $this),
        ];
    }
}
