<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text',
        'status'
    ];

    /**
     * User relationship
     *
     * @return BelongsTo
     */
    public function checklist(): BelongsTo
    {
        return $this->belongsTo(CheckList::class);
    }
}
