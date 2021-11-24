<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Article extends Model
{
    use HasFactory, HasKey;

    const DRAFT_ARTICLE = false;
    const PUBLISH_ARTICLE = true;

    protected $fillable = [
        'title',
        'content',
        'picture',
        'status',
        'resume',
        'user_id'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
