<?php

namespace App\Models;

use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostedJobs extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="posted_jobs";
   protected $guarded=[];
//     protected $fillable = [
//         'title',
//          'company',
//          'salary',
//         'type',
//     'location'
// ];
public function JobApplication(){
    return $this->belongsTo(JobApplication::class);
}



public function company(){
    return $this->belongsTo(User::class,'company_id','id');
}


}

