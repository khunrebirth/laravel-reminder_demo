<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected   $table          = 'Reminder';
    public      $primaryKey     = 'id';
    public      $timestamps     = true;

    public function getType()
    {
        return $this->belongsTo(ReminderType::class, 'ReminderType', 'id');
    }
}
