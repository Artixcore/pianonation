<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    function service(){
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    function service_new(){
        return view('admin.service.new');
    }

    function service_post(Request $request){

        if($request->file('ser_photo'))
        {
            $photo = $request->file('ser_photo');
            $ser_photo = time() . '.' . $request->file('ser_photo')->extension();
            $photoPath = public_path() . '/service/image/';
            $photo->move($photoPath, $ser_photo);
        }

        $service = new Service();

        $service->ser_num = "Ser:" . uniqid();
        $service->ser_name = $request->ser_name;
        $service->ser_details = $request->ser_details;
        $service->ser_photo = $ser_photo;
        $service->save();

        return redirect()->route('service.view');
    }

    function service_delete($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }


}
