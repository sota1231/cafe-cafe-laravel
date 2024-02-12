<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|max:8',
            'kana'=> 'required|max:8',
            'tel'=> 'required|numeric', 
            'email'=> 'required|email',
            'body'=>'required',
        ];
    }

    public function messages()
    {
        return[
            // 必須
            'name.required'=>'この項目は必須項目です。',
            'kana.required'=>'この項目は必須項目です。',
            'tel.required'=>'この項目は必須項目です。',
            'email.required'=>'この項目は必須項目です。',
            'body.required'=>'この項目は必須項目です。',
            // 数字
            'tel.numeric'=>'この項目は半角数字で入力してください。',
            // メール形式
            'email.email'=>'email形式で入力してください。',   
            // 8文字以内
            'name.max'=>'この項目は８文字以内で入力してください。',
            'kana.max'=>'この項目は８文字以内で入力してください。'
        ];    
    }
}
