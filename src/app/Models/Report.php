<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * Get the title of the report.
     * Composed of the start date and the end date.
     * 
     * @return string
     */
    public function title()
    {
        if ($this->start_date->isSameDay($this->end_date)) {
            return __('Reunion du :date de :start_time a :end_time', [
                'date' => $this->start_date->format('d/m/Y'),
                'start_time' => $this->start_date->format('H:i'),
                'end_time' => $this->end_date->format('H:i'),
            ]);
        } else {
            return __('Reunion du :start_date a :end_date', [
                'start_date' => $this->start_date->format('d/m/Y H:i'),
                'end_date' => $this->end_date->format('d/m/Y H:i'),
            ]);
        }
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
