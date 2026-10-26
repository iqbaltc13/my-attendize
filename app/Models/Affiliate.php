<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/*
  Attendize.com   - Event Management & Ticketing
 */

class Affiliate extends Model
{
    use Uuids;
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
