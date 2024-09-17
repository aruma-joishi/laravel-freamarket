<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'category_id' => ['required'],
            'condtition_id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'カテゴリを選択してください',
            'condtition_id.required' => '状態を選択してください',
            'name.required' => '名前を入力してください',
            'description.required' => '説明を入力してください',
            'price.required' => '金額を入力してください',
        ];
    }
}
