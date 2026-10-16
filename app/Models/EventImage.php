<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

    /*
      Attendize.com   - Event Management & Ticketing
     */

/**
 * Description of EventImage.
 *
 * @author Dave
 */
class EventImage extends MyBaseModel
{
    use SoftDeletes,Uuids;
    protected $primaryKey = "id";
    protected $casts = [
        'id' => 'string',
    ];
    //put your code here.
}
