<?php

namespace App;

use App\Helpers\GenerateTrackingId;
use Illuminate\Database\Eloquent\Model;

class FitbitApp extends Model
{
    protected static function boot() {
	    parent::boot();

	    self::creating(function($model) {
	    	$gen = new GenerateTrackingId();
            $model->tracking_id = $gen();
	    });
    }
}
