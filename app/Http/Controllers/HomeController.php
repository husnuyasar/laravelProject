<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Entities\Location;
use App\Entities\LocationDetail;
use App\Entities\ViewLocation;
use App\Http\Models\DatatablesModel;
use App\Helpers\ErrorHelper;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    protected function CityValidator(array $data){
        return Validator::make($data, [
            'title' =>'required',
            'lat' => 'required',
            'lng' => 'required',
            'city' => 'required',
            'province' => 'required',
            'address'=> 'required',
        ]);
    }

    public function index()
    {
        $editUrl = Route::getRoutes()->getByName("dashboard::editPage")->uri;
        $deleteUrl = Route::getRoutes()->getByName("dashboard::delete")->uri;
        return view('layouts.dashboard.index')->with([
            'deleteUrl'=>$deleteUrl,
            'editUrl'=>$editUrl
        ]);
    }
    public function showNewCityPage(Request $request){
        return view('layouts.dashboard.new');
    }

    public function addNewCity(Request $request){
        $validator = $this->CityValidator($request->all());
        if ($validator->fails()) {
            return redirect(route('dashboard::new'))->withErrors($validator)->withInput();
        }
        $city = $request->input('city');
        $province = $request->input('province');
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $title = $request->input('title');
        $address = $request->input('address');
        $user_id = $request->user()->id;
        try{
            $location = new Location;
            $location->city_name = $city;
            $location->province_name = $province;
            $location->lat = $lat;
            $location->lng = $lng;
            $location->save();
            
            $lDetail = new LocationDetail;
            $lDetail->location_id = $location->id;
            $lDetail->user_id = $user_id;
            $lDetail->title = $title;
            $lDetail->address = $address;
            $lDetail->save();
            
        }
        catch(\Exception $e){
            return redirect(route('dashboard::new'));
        }

        return redirect(route('dashboard::index'));
    }

    public function editCityPage(Request $request){
        $validator = $this->CityValidator($request->all());
        if ($validator->fails()) {
            return redirect(route('dashboard::editPage',$request->input('city_id')))->withErrors($validator)->withInput();
        }
        $city_id = $request->input('city_id');
        $city = $request->input('city');
        $province = $request->input('province');
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $title = $request->input('title');
        $address = $request->input('address');
        $user_id = $request->user()->id;
        
        try{
            $c = Location::find($city_id);
            $c->city_name = $city ;
            $c->province_name = $province;
            $c->lat = $lat;
            $c->lng = $lng;
            $c->save();

            $d = LocationDetail::where(['location_id'=>$city_id])->first();
            $d->title = $title;
            $d->address = $address;
            $d->save();
        }
        catch(\Exception $e){
            return redirect(route('dashboard::editPage',$city_id));
        }

        return redirect(route('dashboard::index'));
    }

    public function listDetailsJson(Request $request){
        $response = new DatatablesModel();

        $response->draw = $request->get('draw');

        $search = "%{$request->input('search.value')}%";

        $response->recordsTotal = ViewLocation::count();
        $searchRelation = ViewLocation::where('city_name','LIKE',$search)->orWhere('province_name','LIKE',$search);
        $response->recordsFiltered = $searchRelation->count();

        $fields=[
            'id',
            'username',
            'city_name',
            'province_name',
            'lat',
            'lng',
            'title',
            'address',
        ];
	
        $response->data = $searchRelation->limit($request->get('length'))->offset($request->get('start'))->get($fields);
		return json_encode($response);
    }

    public function deleteCity(Request $request,Location $detail){
        try{
            $detail->delete();
            ErrorHelper::pushErrorMessage($request,ErrorHelper::$ERROR_TYPE_SUCCESS,'Bilgi Silindi!');
        }
        catch(\Exception $e){
            ErrorHelper::pushErrorMessage($request,ErrorHelper::$ERROR_TYPE_DANGER,'Silmede Hata Oluştu!');
        }
    }

    public function showEditCityPage(Request $request,Location $detail){
        $locationDetail = LocationDetail::where(['location_id'=>$detail->id])->first();
        
        return view('layouts.dashboard.edit')->with([
            'detail'=>$detail,
            'locationDetail' => $locationDetail
        ]); 
    }

    
}
