<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 04:10:51 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StoreDatum
 * 
 * @property int $id
 * @property string $address_name
 * @property string $address_detail
 * @property int $province_id
 * @property string $province_name
 * @property int $city_id
 * @property string $city_name
 * @property int $subdistrict_id
 * @property string $subdistrict_name
 * @property string $postal_code
 *
 * @package App\Models
 */
class StoreDatum extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int',
		'city_id' => 'int',
		'subdistrict_id' => 'int'
	];

	protected $fillable = [
		'address_name',
		'address_detail',
		'province_id',
		'province_name',
		'city_id',
		'city_name',
		'subdistrict_id',
		'subdistrict_name',
		'postal_code'
	];
}
