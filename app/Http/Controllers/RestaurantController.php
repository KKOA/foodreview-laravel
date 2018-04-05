<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Restaurant;
use App\Rules\UnquieSlug;
use App\Rules\SlugFormat;
use Illuminate\Http\Request;
use Storage;
use File;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $restaurants = Restaurant::all();
        $restaurants = Restaurant::orderBy('name','asc')->paginate(12);
        return view('restaurants.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = new Restaurant();
        return view('restaurants.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:restaurants|min:3|max:255',
            'slug'  => ['required', new SlugFormat(), new UnquieSlug()],
            'description' => 'required|min:3',
            'address1' => 'required|min:3|max:255',
            'city' => 'required|min:3|max:255',
            'postcode' => 'required|min:3|max:10',
        ]);

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->slug = $restaurant->slugify($request->slug);
        $restaurant->description = $request->description;
        $restaurant->address1 = $request->address1;
        $restaurant->address2 = $request->address2;
        $restaurant->city = $request->city;
        $restaurant->county = $request->county;
        $restaurant->postcode = $request->postcode;
        $restaurant->save();
        if(! File::exists(public_path().'/imgs/restaurants/'.$restaurant->slug.'/'))
        {
            //Create directory
            File::makeDirectory(public_path().'/imgs/restaurants/'.$restaurant->slug.'/');
        }
        return redirect('/restaurants')->with('success',$restaurant->name ." restaurant created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    // public function show($name)
    {
        // $name = 'd';
        // $restaurant = Restaurant::where('slug','=',$name)->first();
        return view('restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        // $restaurant = Restaurant::where('id','=',$id)->first();
        return view('restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        // return $restaurant->id;
        $validatedData = $request->validate([
        'name' => 'required|min:3|max:255|unique:restaurants,name,'.$restaurant->id,
        'slug'  => ['required', new SlugFormat, new UnquieSlug($restaurant->id)],
        'description' => 'required|min:3',
        'address1' => 'required|min:3|max:255',
        'city' => 'required|min:3|max:255',
        'postcode' => 'required|min:3|max:10',
        ]);

        $restaurant->name= $request->name;
        $restaurant->slug = $restaurant->slugify($request->slug);
        $restaurant->description= $request->description;
        $restaurant->address1= $request->address1;
        $restaurant->address2= $request->address2;
        $restaurant->city= $request->city;
        $restaurant->county= $request->county;
        $restaurant->postcode= $request->postcode;
        $restaurant->save();  

        return redirect()->route('restaurants.show',['restaurant' => $restaurant])->with('success',$restaurant->name." restaurant updated");
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $name = $restaurant->name;
        $restaurant->delete();
        return redirect()->route('restaurants.index')->with('success'," $name restaurant Deleted");
    }
}
