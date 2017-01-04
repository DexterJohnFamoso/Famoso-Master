<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {
    	return $this->belongsTo('App/User');
    }

    public function likes()
    {
    	return $this->hasMany('\App\Like');
    }
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {
    	return $this->belongsTo('App/User');
    }

    public function likes()
    {
    	return $this->hasMany('\App\Like');
    }
}
>>>>>>> f2ab3543ca0be9f9350c2378ac02fa9e6dfeed6e
