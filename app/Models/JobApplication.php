<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function JobApplication(){
        return $this->belongsTo(PostedJobs::class,'posted_job_id','id');
    }



    
    public function company(){
        return $this->belongsTo(User::class,'company_id','id');
    }
}
