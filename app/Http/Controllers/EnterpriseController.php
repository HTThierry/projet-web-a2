<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\enterprises;
use App\Models\enterprises_has_business_sectors;
use App\Models\contacts;
use App\Models\operating_sites;


class EnterpriseController extends Controller
{
    public function show()
    {
        $enterprises = enterprises::OrderBy('title')->get();
        return view('list/enterpriseList',['enterprises'=>$enterprises]);
    }
    public function create()
    {
        $sites = DB::table('operating_sites')->get();
        $sectors = DB::table('business_sectors')->get();
        $enterprises = DB::table('enterprises')->get();
        $countries = DB::table('countries')->get();
        return view ('creation/creation-enterprise',[
            'sites' => $sites,
            'sectors' => $sectors,
            'enterprises' => $enterprises,
            'countries' => $countries
        ]);
    }

    public function storeEnterprise(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:enterprises'],
            'photoCompany'=>['required']
        ]);
        $filename = time().'.'.$request->file('photoCompany')->extension();

        $path = $request->file('photoCompany')->storeAs(
            'photoCompany',
            $filename,
            'public'
        );

        $enterprise = enterprises::create([
            'title' => $request->title,
            'description' => $request->description,
            'number_of_cesi_students'=>$request->number_of_cesi_students,
            'pilot_confidence'=>$request->pilot_confidence,
            'logo'=>$path,
            'headquarter'=>$request->headquarter
        ]);

        $enterpriseId = DB::table('enterprises')->where('title', '=', $request->title)->get('id_enterprise');
        $sectorId = DB::table('business_sectors')->where('title','=',$request->business_sector)->get('id_business_sector');
        
        $enterprises_has_business_sectors = enterprises_has_business_sectors::create([
            'enterprises'=>$enterpriseId[0]->id_enterprise,
            'business_sectors'=>$sectorId[0]->id_business_sector
        ]);
        
        return redirect('/creation/enterprise');
    } 

    public function storeContact(Request $request)
    {
        $request->validate([
            'enterprise' => ['required']
        ]);

        $enterpriseId = DB::table('enterprises')->where('title', '=', $request->enterprise)->get('id_enterprise');

        $contact = contacts::create([
            'numero' => $request->numero,
            'email' => $request->email,
            'enterprises_id_enterprise' => $enterpriseId[0]->id_enterprise
        ]);
        
        return redirect('/creation/enterprise');
    }

    public function storeSite(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:operating_sites'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required']
        ]);

        $filename = time().'.'.$request->file('photoSite')->extension();

        $path = $request->file('photoSite')->storeAs(
            'photoSite',
            $filename,
            'public'
        );

        $enterpriseId = (DB::table('enterprises')->where('title', '=', $request->enterprise)->get('id_enterprise'))[0]->id_enterprise;
        $countryId = (DB::table('countries')->where('title', '=', $request->country)->get('id_country'))[0]->id_country;

        $operating_site = operating_sites::create([
            'title' => $request->title,
            'description' => $request->description,
            'picture' => $path,
            'country' =>  $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'contact_number' => $request->phone_number,
            'enterprises_id_enterprise' => $enterpriseId,
            'countries_id_country' => $countryId
        ]);
        
        return redirect('/creation/enterprise');
    }

    public function updateView($id)
    {
        $sites = DB::table('operating_sites')->get();

        $idBusinessSector = DB::table('enterprises_has_business_sectors')->where('enterprises', '=', $id)->get('business_sectors');
        $sector = DB::table('business_sectors')->where('id_business_sector', '=', $idBusinessSector[0]->business_sectors)->get();
        $sectors = DB::table('business_sectors')->get();

        $enterprises = DB::table('enterprises')->get();
        $enterprise = DB::table('enterprises')->where('id_enterprise','=',$id)->get();

        $contacts = DB::table('contacts')->where('enterprises_id_enterprise', '=', $id)->get();

        $sites = DB::table('operating_sites')->where('enterprises_id_enterprise', '=', $id)->get();

        $country= DB::table('countries')->where('id_country', '=', $id);
        $countries = DB::table('countries')->get();

        //dd($enterprise[0]->title);
        //dd($enterprise);
        //dd($contacts, $sectors);
        //dd($sites);
        return view ('modification/modif-enterprise',[
            'sites' => $sites,
            'sectorChoice' => $sector,
            'sectors' => $sectors,

            'enterpriseChoice'=> $enterprise,
            'enterprises' => $enterprises,

            'contacts' => $contacts,

            'sites' => $sites,

            'countries' => $countries,
            'id' => $id,
        ]);
    }

    public function updateEnterprise()
    {
        dd('enterprise');
    }

    public function updateContact()
    {
        dd('contact');
    }

    public function updateSite()
    {
        dd('site');
    }
}
