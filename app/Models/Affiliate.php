<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\Ticket;



/*
  Attendize.com   - Event Management & Ticketing
 */

class Affiliate extends MyBaseModel
{
    use SoftDeletes,Uuids;
    protected $primaryKey = "id";
    protected $casts = [
        'id' => 'string',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'visits',
        'tickets_sold',
        'event_id',
        'account_id',
        'sales_volume'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @return array $dates
     */
    public function getDates()
    {
        return ['created_at', 'updated_at'];
    }
}
