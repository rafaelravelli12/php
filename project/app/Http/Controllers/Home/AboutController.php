<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\About;
use App\Models\MultiImage;
use Image;

class AboutController extends Controller
{
    public function aboutPage()
    {
        $aboutPage = About::find(1);
        return view("admin.about_page.about_page_all", compact("aboutPage"));
    }

    public function updateAbout(Request $request)
    {
        $about_id = $request->id;
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(523, 605)->save('upload/home_about/' . $name_gen);
            $save_url = 'upload/home_about/'. $name_gen;
            About::findOrFail($about_id)->update([
                'title' => $request -> title,
                'short_title' => $request -> short_title,
                'short_description' => $request -> short_description,
                'long_description' => $request -> long_description,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Page Updated with Image Sucessfully',
                'alert-type' => 'success'
            );
            return redirect() -> back() -> with($notification);
        } else {
            About::findOrFail($about_id)->update([
                'title' => $request -> title,
                'short_title' => $request -> short_title,
                'short_description' => $request -> short_description,
                'long_description' => $request -> long_description,
            ]);

            $notification = array(
                'message' => 'About Page Updated without Image Sucessfully',
                'alert-type' => 'success'
            );
            return redirect() -> back() -> with($notification);
        }
    }

    public function homeAbout()
    {
        $aboutPage = About::find(1);
        return view("frontend.about_page", compact("aboutPage"));
    }

    public function aboutMultiImage()
    {
        return view("admin.about_page.multiimage");
    }

    public function storeMultiImage(Request $request)
    {
        $image = $request -> file('multi_image');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image -> getClientOriginalExtension();
            Image::make($multi_image) -> resize(220, 220) -> save('upload/multi/' . $name_gen);
            $save_url = 'upload/multi/'. $name_gen;
            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = array(
            'message' => 'About Page Updated with Image Sucessfully',
            'alert-type' => 'success'
        );
        return redirect() -> back() -> with($notification);
    }

    public function allMultiImage()
    {
        $allMultiImage = MultiImage::all();
        return view("admin.about_page.all_multiimage", compact('allMultiImage'));
    }
}
