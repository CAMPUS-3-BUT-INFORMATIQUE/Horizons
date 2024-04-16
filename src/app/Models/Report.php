<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * Retrieve the type of the report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function report_type()
    {
        return $this->belongsTo(ReportType::class);
    }

    /**
     * Retrieve decisions of the report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function decisions()
    {
        return $this->hasMany(ReportDecision::class);
    }

    /**
     * Retrieve participants of the report.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants()
    {
        return $this->belongsToMany(User::class, 'report_participants');
    }
}
