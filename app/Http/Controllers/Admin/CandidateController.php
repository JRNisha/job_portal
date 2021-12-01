<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function candidateCard(){
        return view('backend.admin.pages.candidateListCard');
    }
}
