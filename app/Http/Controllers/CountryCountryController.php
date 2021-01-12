<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsCountryModel;
use Validator;

class CountryCountryController extends Controller
{
    //

    public function country()
    {
        return response()->json(ModelsCountryModel::get(),200);

    }

    public function countryById($id)
    {
        $country= ModelsCountryModel::find($id);
        if(is_null($country)){
            return response()->json(["message"=>'record not found'],404); 

        }
        return response()->json($country,200);
         

    }

    public function countrySave(Request $request)
    {
        $rule=['name'=>'required',
        'name'=>'required'   
    
    ];

    $validate=Validator::make($request->all($rule));
    if($validate=false()){
        return response()->json($validate->errors(),400);

    }
    $country=ModelsCountryModel::create($request->all());
        return response()->json($country,201);

    }

    public function countryUpdate(Request $request,$id)
    {
         $country=ModelsCountryModel::find($id);
         if(is_null($country)){
             return response()->json('no data to update',404);
         }
        $country->update($request->all());
        return response()->json($country,200);


    }

    public function countryDelete(Request $request ,ModelsCountryModel $country)
    {
        $country->delete();
        return response()->json(null,204);

    }


}
