<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Wildside\Userstamps\Userstamps;

class Book extends Model
{
    use HasFactory, Userstamps, LogsActivity;

    protected $table = 'tmbook';
    protected $primaryKey = 'i_id_book';

    const CREATED_BY = 'i_entry';
    const UPDATED_BY = 'i_update';
    const CREATED_AT = 'd_entry';
    const UPDATED_AT = 'd_update';

    protected $fillable = [
        'title',
        'author',
        'rating',
    ];

    protected $maps = [
        'id'            => 'i_id_book',
        'title'         => 'n_title',
        'author'        => 'n_author',
        'rating'        => 'i_rating',
        'created_by'    => 'i_entry',
        'updated_by'    => 'i_update',
        'created_at'    => 'd_entry',
        'updated_at'    => 'd_update',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('model');
    }
}
