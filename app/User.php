<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
	public function posts()
	{
		return $this->hasMany('App\Post');
	}    

	public function likes()
    {
    	return $this->hasMany('\App\Like');
    }
}
=======
<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
	public function posts()
	{
		return $this->hasMany('App\Post');
	}    

	public function likes()
    {
    	return $this->hasMany('\App\Like');
    }
}
>>>>>>> f2ab3543ca0be9f9350c2378ac02fa9e6dfeed6e
