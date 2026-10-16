<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;
    /*
      Attendize.com   - Event Management & Ticketing
     */

/**
 * Description of ReservedTickets.
 *
 * @author Dave
 */
class ReservedTickets extends Model
{
    use SoftDeletes,Uuids;


    protected $casts = [
        'id' => 'string',
    ];
    protected $primaryKey = "id";
    //put your code here
}
