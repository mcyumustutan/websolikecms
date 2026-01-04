<?php

namespace App\Http\Requests;

use App\Rules\ReCaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StoreSmsListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function attributes(): array
    {
        return [
            'tamad' => "Tam Ad",
            'telefon' => "Telefon",
            'dogumtarihi' => "Doğum Tarihi",
            'kvkk' => "Aydınlatma Metni",
            'g-recaptcha-response' => 'Robot',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tamad' => "required",
            'telefon' => "required|min:10",
            'kvkk' => "required",
            'dogumtarihi' => "required|date",
            // 'g-recaptcha-response' => ['required', new ReCaptcha]
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5',

            'type' => ['required', 'in:0,1'],

            'unvan' => [
                'nullable',
                'required_if:type,1',
                'string',
                'max:255',
            ],
            'tc' => [
                'nullable',
                'required_if:type,1',
                'min:10',
            ],
            'vergi_no' => [
                'nullable',
                'required_if:type,1',
                'digits_between:10,20',
            ],

            'vergi_dairesi' => [
                'nullable',
                'required_if:type,1',
                'string',
                'max:255',
            ],

            'adres' => [
                'nullable',
                'string',
            ],
        ];
    }
}
