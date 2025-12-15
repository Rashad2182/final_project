<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHomeBannerRequest;
use App\Http\Requests\UpdateHomeBannerRequest;
use App\Models\HomeBanner;
use App\traits\FileUploader;
use Exception;
use UniSharp\LaravelFilemanager\Events\ImageIsUploading;

class HomeBannerController extends Controller
{
    use FileUploader;

    /**
     * Display a listing of the resource.
     */
    public function index(ImageIsUploading $request)
    {
        $banners = HomeBanner::orderBy('order_no', 'asc')->where('lang', request('lang'))->get();

        return view('back.pages.home_banners.home_banners', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.home_banners.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws Exception
     */
    public function store(StoreHomeBannerRequest $request){

        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,docx,txt|max:5120', // max 5MB
        ]);


        $image = $this->fileSaves( 'public/files/home_banner', $request,'image');


        HomeBanner::create([
            'lang' => $request->lang,
            'image' => $image,
            'alt' => $request->alt,
            'title' => $request->title,
            'address' => $request->address,
            'phone' => $request->phone,
            'order_no' => $request->order_no,
        ]);
        return redirect()->route('home_banners.index')->with('success', __('create successed'));
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeBannerRequest $request, HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home_banner = HomeBanner::where('id', $id)->firstOrFail();
        $home_banner->delete();
        return redirect()->back()->with('success', __('delete Successed'));
    }
}
