<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
		
		protected $table = 'project';
		
		protected $fillable = [
			'name',
			'description',
			'status_id',
			'counterparty_id',
			'dateStart',
			'dateEnd'
		];
		
		public function task(){
			return $this->hasMany('App\Task');
		}
		
		public function counterparty(){
			return $this->belongsTo('App\Counterparty');
		}
		
		public function getCountTask(){
			return $this->task()->where('status_id','!=', 2)->count();
		}
		
		public function getActiveTask(){
			return $this->task()->where('status_id', '!=', [2,3])->get();
		}

		
}
