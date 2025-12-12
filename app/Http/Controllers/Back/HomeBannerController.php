<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHomeBannerRequest;
use App\Http\Requests\UpdateHomeBannerRequest;
use App\Models\HomeBanner;
use App\traits\FileUploader;

class HomeBannerController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = HomeBanner::orderBy('order_no', 'asc')->where('lang', request('lang'))->get();

        return view('back.pages.home-banner.home_banners', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home_banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeBannerRequest $request)
    {
        $img = $this->fileSave('files/home_banners/',$request,'image');

        HomeBanner::create([
            'lang' => $request->lang,
            'image' => $img,
            'alt' => $request->alt,
            'title' => $request->title,
            'subtitle_address' => $request->subtitle_address,
            'subtitle_phone' => $request->subtitle_phone,
            'order_no' => $request->order_no,
        ]);
        return redirect()->route('home_banners.index');
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
    public function destroy(HomeBanner $homeBanner)
    {
        //
    }
}
