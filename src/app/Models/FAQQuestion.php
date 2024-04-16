<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FAQQuestion extends Model
{
    use HasFactory;

    public $table = 'faq_questions';

    public $fillable = ['title', 'answer'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(FAQCategory::class);
    }
}
