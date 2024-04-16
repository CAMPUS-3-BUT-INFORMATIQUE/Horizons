<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class FAQCategory extends Model
{
    use HasFactory;

    public $table = 'faq_categories';

    public $fillable = ['name'];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(FAQQuestion::class);
    }
}
