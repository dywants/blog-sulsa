<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Qirolab\Laravel\Reactions\Traits\Reactable;

class Post extends \TCG\Voyager\Models\Post
{
    use HasFactory, Reactable;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getDescriptionAttribute()
    {
        return Str::limit($this->body, 200, '...');
    }
}
