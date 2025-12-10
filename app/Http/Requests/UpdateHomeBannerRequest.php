<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateHomeBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'lang' => ['required' , Rule::in(array_keys(config('app.languages'))) ],
            'image' => ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:5120' ],
            'alt' => ['required' , 'string' , 'max:255' ],
            'title' => ['required' , 'string' , 'max:255' ],
            'subtitle_address' => ['required' , 'string' , 'max:255' ],
            'subtitle_phone' => ['required' , 'string' , 'max:255' ],
            'order_number' => ['required' , 'integer' , 'min:0' , 'max:1000' ],
        ];
    }
}
