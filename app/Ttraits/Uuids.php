<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuids
{
    protected static function bootUuids()
    {
        static::creating(function ($model) {
            if ($model->getIncrementing()) {
                return; // model yang memakai integer dilewati
            }
            if (empty($model->getKey())) {
                $model->setAttribute($model->getKeyName(), (string) Str::orderedUuid());
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}