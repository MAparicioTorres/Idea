<?php

namespace App\Models;

use App\IdeaStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Idea extends Model
{
    /** @use HasFactory<\Database\Factories\IdeaFactory> */
    use HasFactory;

    protected function casts()
    {
        return [
            'links' => 'array',
            'status' => IdeaStatus::class
        ];
    }

    protected $attributes = [
        'links' => '[]',
        'status' => IdeaStatus::PENDING->value,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(related: Step::class);
    }
}
