<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Http\Request;
class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
          $Image = Image::orderBy('id','DESC')->get();
          return view("Image.Image", compact("Image"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Image = Image::orderBy('id','DESC')->get();
        return view("Image.Imagetable", compact("Image"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Image = new Image;
        $Image->title = $request->title;
        $Image->description = $request->description;
        $Image->detail = $request->detail;
        $request->image_1 = fileStore($request->file('image_1'), "resource");
        $Image->image_1 = $request->image_1;
        $Image->url = $request->image_1;
        $Image->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $Image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Image=Image::find($request->id);
        return $Image;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Image = Image::find($request->id);
        $Image->title = $request->title;
        $Image->description = $request->description;
        $Image->detail = $request->detail;
        //eliminar imagen anterior
        $table = Image::find($request["id"]);
        fileDestroy($table->image_1, "resource");
        //guarda la nueva
        $Image->url=fileUpdate($request->file('image_1'), "resource");
        $Image->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Image::find($request["id"]);
        fileDestroy($table->image_1, "resource");
        Image::find($request->id)->delete();
        return $this->create();
    }
    public function destroyAll(Request $request)
    {
        foreach ($request->deleteAll as $deleteAllId) {
            
            $table = Image::find($deleteAllId);
            fileDestroy($table->image_1, "resource");
            Image::find($deleteAllId)->delete();
            
        }
       return $this->create();
      
    }
   
}
