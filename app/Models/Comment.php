<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Comment extends Model
{
    use HasFactory, HasKey;

    const DRAFT_COMMENT = false;
    const PUBLISH_COMMENT = false;

    protected $fillable = [
        'comment',
        'article_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
