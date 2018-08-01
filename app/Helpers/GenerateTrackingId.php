<?php
/**
 * Created by PhpStorm.
 * User: cperko
 * Date: 8/1/18
 * Time: 5:05 PM
 */

namespace App\Helpers;


class GenerateTrackingId {
	public function __invoke() {
		return str_random(32);
	}
}