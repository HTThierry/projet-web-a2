<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class EnterpriseController extends Controller
{
    public function create()
    {
        $sites = DB::table('operating_sites')->get();
        $sectors = DB::table('business_sectors')->get();
        return view ('creation/creation-enterprise',[
            'sites' => $sites,
            'sectors' => $sectors
        ]);
    }

    // public function 
}
