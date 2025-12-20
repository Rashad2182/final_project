<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHomeBannerRequest;
use App\Http\Requests\UpdateHomeBannerRequest;
use App\Models\HomeBanner;
use App\traits\FileUploader;
use Exception;

class HomeBannerController extends Controller
{
    use FileUploader;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = HomeBanner::orderBy('order_no', 'asc')->where('lang', request('lang'))->get();

        return view('back.pages.home_banners.home_banners', compact('banners'), [
            'banners' => $banners
        ]);

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
    public function store(StoreHomeBannerRequest $request)
    {

        $request->validate([
            'image' => 'required|file|max:5120', // max 5MB
        ]);


        $image = $this->fileSaves('files/home_banners', $request->image);


        HomeBanner::create([
            'lang' => $request->lang,
            'image' => $image,
            'alt' => $request->alt,
            'title' => $request->title,
            'address' => $request->address,
            'phone' => $request->phone,
            'order_no' => $request->order_no,
        ]);
        return redirect()->route('home_banners.index')->with('success', __('Banner əlavə edildi👍'));
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeBanner $banners)
    {
        return view('front.pages.home', compact('banners'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeBanner $homeBanner)
    {
        return view('back.pages.home_banners.edit', compact('homeBanner'), [
            'banners' => $homeBanner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeBannerRequest $request, HomeBanner $homeBanner)
    {
        $request->validate([
            'image' => 'required|file|max:5120', // max 5MB
        ]);


        $image = $this->fileSaves('files/home_banners', $request->image);


        HomeBanner::create([
            'lang' => $request->lang,
            'image' => $image,
            'alt' => $request->alt,
            'title' => $request->title,
            'address' => $request->address,
            'phone' => $request->phone,
            'order_no' => $request->order_no,
        ]);

        if ($request->has('save')) {
            return redirect()->route('home_banners.index', ['lang' => '?lang=az'])->with('success', __('Banner yeniləndi👍'));
        } else {
            return redirect()->route('home_banners.index', ['lang' => $request->lang, 'home_banner' => $homeBanner])->with('success', __('Banner yeniləndi👍'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home_banner = HomeBanner::where('id', $id)->firstOrFail();
        $home_banner->delete();
        return redirect()->back()->with('success', __('Banner uğurla silindi👍'));
    }
}
