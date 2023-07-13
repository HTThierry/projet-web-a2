<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\business_sectors;

class SectorController extends Controller
{
    public function show()
    {
        $sectors = business_sectors::OrderBy('title')->get();
        return view('list/sectorList',['sectors' => $sectors]);
    }
    public function create()
    {
        $sectors = DB::table('business_sectors')->get();
        return view('creation/creation-sector',[
            'sectors' => $sectors
        ]);
    }

    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'title'=>['required', 'unique:business_sectors']
        ]);

        $sector = business_sectors::create([
            'title' => $request->title
        ]);

        return redirect('/creation/sector');
    }
    public function updateView($id)
    {   
        //dd('hey');
        $sector = DB::table('business_sectors')
            ->where('id_business_sector','=', $id)
            ->get();

        $sectors = business_sectors::OrderBy('title')->get();

        return view('modification/modif-sector', [
            'sectors' => $sectors,
            'sectorTitle' => $sector[0]->title,
            'id' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>['required', 'unique:business_sectors']
        ]);

        $sector = business_sectors::where('id_business_sector', $id);

        $sector->update([
            'title' => $request->title
        ]);

        return redirect('/show/sector');
    }
}
