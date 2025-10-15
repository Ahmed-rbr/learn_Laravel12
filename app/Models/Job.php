<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all ():array{
return [
    ['id'=>1,'title' => 'Software Engineer',        'salary' => 80000], 
    ['id'=>2,'title' => 'Frontend Developer',       'salary' => 70000],
    ['id'=>3,'title' => 'Backend Developer',        'salary' => 75000],
    ['id'=>4,'title' => 'Data Scientist',           'salary' => 90000],
    ['id'=>5,'title' => 'Product Manager',          'salary' => 95000],
    ['id'=>6,'title' => 'UX/UI Designer',           'salary' => 65000],
    ['id'=>7,'title' => 'DevOps Engineer',          'salary' => 85000],
    ['id'=>8,'title' => 'QA Engineer',              'salary' => 60000],
    ['id'=>9,'title' => 'Technical Support',        'salary' => 45000],
    ['id'=>10,'title' => 'Mobile App Developer',     'salary' => 78000],
];
    }

   public static function one(int $id):array {
 $job= Arr::first(static::all(),fn($job)=>$job['id']==$id);
  
 if(!$job){
  abort(404);
 }
 return $job;
   }
}