<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'img_url' => ['required'],
            'postcode' => ['required', 'integer','min:7','max:7'],
            'address' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'img_url.required' => '画像を選択してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.integer' => '半角数字7桁で入力してください',
            'postcode.min:7' => '半角数字7桁で入力してください',
            'postcode.max:7' => '半角数字7桁で入力してください',
            'address.required' => '住所を入力してください',

        ];
    }
}
