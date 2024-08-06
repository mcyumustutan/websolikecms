<?php

namespace App\Http\Requests;

use App\Rules\ReCaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StoreSolutionCenterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes(): array
    {
        return [
            'ad' => 'Ad',
            'soyad' => 'Soyad',
            'telefon' => 'Telefon',
            'eposta' => 'Eposta',
            'mesaj_konusu' => 'Mesaj Konusu',
            'mesaj' => 'Mesaj',
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
            'ad' => "required",
            'soyad' => "required",
            'telefon' => "required|integer",
            'eposta' => "required|email",
            'mesaj_konusu' => "required",
            'mesaj' => "required",
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ];
    }
}
