<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
		protected $table = 'contact';
		
		protected $fillable = [
			'counterparty_id',
			'type_id',
			'value',
		];
		
		public function counterparty(){
			return $this->belongsTo('App\Counterparty');
		}
}
