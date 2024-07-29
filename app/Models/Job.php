<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;
  protected $table='job_listings';

  //protected $guarded=[];
  protected $fillable = [
    'title',
    'salary',
    'user_id',
];
public function user()
{
    return $this->belongsTo(User::class);
}

  public function employer(){
    return $this->belongsTo(Employer::class);
  }
  public function tags(){
    return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listings_id");
  }
}
