<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counterparty extends Model
{
    //
		protected $table = 'counterparty';
		
		protected $fillable = [
			'name',
			'user_id',
			'status_id',
			'comments'
		];
		
		
		public function contact(){
			return $this->hasMany('App\Contact')->orderBy('type_id');
		}
		
		public function address(){
			return $this->hasOne('App\Address');
		}
		
		public function project(){
			return $this->hasMany('App\Project');
		}
		

}
