<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}   
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}   
}
>>>>>>> f2ab3543ca0be9f9350c2378ac02fa9e6dfeed6e
