<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coin extends Model
{
    //
		
		protected $table = 'coin';
		
		protected $fillable = [
														'user_id',
														'name',
														'description',
														'picture',
														'state',
														'year',
														'metal',
														'defects',
														'description_defects',
														'restoration',
														'description_restoration',
														
		];
		
		public function cost(){
			return $this->hasMany('App\Cost', 'coin_id', 'id');
		}
}
