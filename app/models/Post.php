<?php
use Carbon\Carbon;

class Post extends BaseModel
{
	protected $table = 'posts';

	public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

	/** created an accessor
	*
	*/

	

	public function setSlugAttribute($value)
	{
		 $this->attributes['slug'] = Str::slug($value);
	}

	public function user()
	{
	    return $this->belongsTo('User');
	}
}