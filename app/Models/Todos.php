<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todos extends Model

{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'description',
        'completed',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
