<?php

namespace App\Http\Controllers;

use App\Models\TwoFA;
use App\Http\Requests\StoreTwoFARequest;
use App\Http\Requests\UpdateTwoFARequest;
use PragmaRX\Google2FAQRCode\Tests\Google2FATest;

class TwoFAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show2FASetup()
    {
        $google2fa = new Google2FATest();

        $secret = $google2fa->generateSecretKey();

        $QR_Image = $google2fa->getQRCodeInline(
            'IT Project',          // Sənin saytın adı
            auth()->user()->email,
            $secret
        );

        return view('2fa.setup', [
            'secret' => $secret,
            'QR_Image' => $QR_Image
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTwoFARequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TwoFA $twoFA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TwoFA $twoFA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTwoFARequest $request, TwoFA $twoFA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TwoFA $twoFA)
    {
        //
    }
}
