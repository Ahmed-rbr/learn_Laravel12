<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
      use HasFactory;
  protected $table='job_listings';
  // protected $fillable=['title','salary','employer_id'];
protected $guarded=[];
  public function employer(){
    return $this->belongsTo(Employer::class);
  }
  public function tags(){
    //if we have table with the same name laravel will auto look at it to prevent this we give here to forigenpivotkey and in the model we give the relativepivotkey
    return $this->belongsToMany(Tag::class,foreignPivotKey: 'job_listing_id');
  }
}

