<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
		protected $table = 'address';
		
		protected $fillable = [
			'counterparty_id',
			'country',
			'region',
			'city',
			'type',
			'name',
			'block',
			'number',
			'room'
		];
		
		public function counterparty(){
			return $this->belongsTo('App\Counterparty');
		}
}
