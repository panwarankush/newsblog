<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;

    protected $fillable = ['title','category', 'body', 'user_id','file_path'];

	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}

	/**
	 * @param mixed $fillable
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
}
