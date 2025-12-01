<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StoreTwoFARequest extends FormRequest
{
    public function enable2FA(Request $request): RedirectResponse
    {
        $google2fa = (new Google2FA());

        $valid = $google2fa->verifyKey($request->secret_key, $request->code);

        if ($valid) {
            auth()->user()->update([
                'google2fa_secret' => $request->secret_key,
                'is_2fa_enabled' => true
            ]);

            return redirect()->route('profile')->with('success', '2FA aktiv edildi');
        }

        return back()->withErrors(['code' => 'Kod yanlışdır']);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
