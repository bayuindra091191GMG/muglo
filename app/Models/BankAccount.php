<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 08 Nov 2017 07:37:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BankAccount
 * 
 * @property int $id
 * @property string $bank_name
 * @property string $branch
 * @property string $acc_name
 * @property string $acc_number
 * @property \Carbon\Carbon $created_at
 * @property string $created_by
 * @property \Carbon\Carbon $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class BankAccount extends Eloquent
{
	protected $fillable = [
		'bank_name',
		'branch',
		'acc_name',
		'acc_number',
		'created_by',
		'updated_by'
	];
}
