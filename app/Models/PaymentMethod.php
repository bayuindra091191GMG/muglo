<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 07 Nov 2017 08:09:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PaymentMethod
 * 
 * @property int $id
 * @property string $code
 * @property string $description
 * @property float $fee
 * 
 * @property \Illuminate\Database\Eloquent\Collection $transactions
 *
 * @package App\Models
 */
class PaymentMethod extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'fee' => 'float'
	];

	protected $fillable = [
		'code',
		'description',
		'fee'
	];

	public function transactions()
	{
		return $this->hasMany(\App\Models\Transaction::class);
	}
}
