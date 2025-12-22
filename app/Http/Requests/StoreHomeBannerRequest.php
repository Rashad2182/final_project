<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreHomeBannerRequest extends FormRequest
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
            'image' => ['nullable' , 'image' , 'max:5120' ],
            'alt' => ['required' , 'string' , 'max:255' ],
            'title' => ['required' , 'string' , 'max:255' ],
            'address' => ['required' , 'string' , 'max:255' ],
            'phone' => ['required' , 'string' , 'max:255' ],
            'order_no' => ['required' , 'integer' , 'min:0' , 'max:1000' ],
        ];
    }
}
