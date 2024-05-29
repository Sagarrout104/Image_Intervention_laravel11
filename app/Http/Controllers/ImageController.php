<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Typography\FontFactory;

class ImageController extends Controller
{
    public function index()
    {
        return view('imageUpload');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:png,jpg', 'max:2024']
        ]);

        // $fileName = '';
        // if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        // }s

        $imgManager = new ImageManager(new Driver());
        $image = $imgManager->read('uploads/' . $fileName);
        //for resize
        // $image->resize(500, 500);
        // $image->resizeDown(width: 200);
        // $image->resizeDown(2000, 100); // 800 x 100

        //crop
        // $image->crop(200, 150, 45, 90);

        // scale to 200 x 100 pixel
        // $thumImg->scale(200, 100);

        //for cover
        $image->cover(400, 400);

        // $thumImg->resizeCanvas(50, 50, 'green');

        // $thumImg->blur(15);


        // $image = $image->brightness(50);
        // $image = $image->rotate(-45);
        // $image = $image->blur(50);

        // write text to image
        // $image->text('The quick brown fox', 120, 100, function (FontFactory $font) {
        //     $font->filename('./fonts/comic-sans.ttf');
        //     $font->size(100);
        //     $font->color('fff');
        //     $font->stroke('ff5500', 2);
        //     $font->align('center');
        //     $font->valign('middle');
        //     $font->lineHeight(1.6);
        //     $font->angle(10);
        //     $font->wrap(250);
        // });



        $image->save(public_path('uploads/optimizeImage/' . $fileName));

        // return $thumImg;

        return redirect()->route('image')->with('success', 'Image Upload Successfully!');
    }
}
