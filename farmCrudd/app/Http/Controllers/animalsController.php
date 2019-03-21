<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;
use App\Countries;
use Illuminate\Support\Facades\Redirect;

class animalsController extends Controller
{
    public function storeAnimals(Request $request)
    {
        $animal = $request->all();
        $request = array();
        parse_str($animal['form_data'], $request);
        //dd( $request->all());
        $image_name = time()."image.jpg";
        $image_path = "images"; //dd($request->image);
        
        /*if($request->image !=null){
            $request->image->move($image_path,$image_name); //dd($image_path.'/'.$image_name); 
        }*/   
        $animal = new Animals;
            $animal->farm = $request['farm'];
            $animal->name = $request['name']; 
            $animal->type = $request['type'];
            $animal->color = $request['color'];
            $animal->age = $request['age'];
            $animal->breed = $request['breed'];
            $animal->country = $request['country'];
            $animal->image=$image_path.'/'.$image_name;
            $animal->save(); //Redirect::back();
            return response()->json(array("message"=>$animal));

            //return response()->json();
            //return redirect('/displayAnimalsRoute');
    }
    public function addCountries(Request $request_c)
    {
        $country = $request_c->all();
        //$country['id'] = Auth::id();
        Countries::create($country);
        /*
        $country = $request_c->all();dd($country);
        $country = new Countries;
        $country->name = $request_c['name'];
        $country->city = $request_c['city'];
        $country->village = $request_c['village'];
        $country->save();*/
        return;
    }
    public function addAnimals()
    { 
        $countries = Countries::all();
        //dd($countries);
        return view('storeAnimals', compact('countries'));
    }

    public function displayAnimals()
    { 
           
        $animals = Animals::all();
        return view('displayAnimals', compact('animals',$animals));
    }

    public function editAnimals(Request $request)
    {
        Animals::where("id",$request->id)->update([
        'farm' => $request->farm,
        'name' => $request->name,
        'type' => $request->type,
        'color'=> $request->color,
        'age'  => $request->age,
        ]);
        return response()->json($request);
        //$insertData->save();
        //return redirect('/displayAnimalsRoute');
    }
    public function newAnimals($id)
    {
        $animal= Animals::find($id);
        return view('editAnimals', compact('animal', $animal));
    }

    public function deleteAnimals($id)
    {   
        $deleteAnimal = Animals::find($id);
        $deleteAnimal->delete();
        return response()->json($deleteAnimal);
        //return redirect('displayAnimalsRoute');
    }    
}

