<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:8',              // お名前
            'gender' => 'required',                         // 性別
            'email' => 'required|email',                    // メールアドレス
            'phone' => 'required|digits_between:1,5',      // 電話番号（5桁まで）
            'address' => 'required',                        // 住所
            'contact_type' => 'required',                   // お問い合わせの種類
            'message' => 'required|string|max:120',        // お問い合わせ内容
        ];
    }


   public function messages()
    {
        return [
            'name.required' => 'お名前は必須です。',
            'name.max' => 'お名前は8文字以内で入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式で入力してください。',
            'phone.required' => '電話番号は必須です。',
            'phone.digits_between' => '電話番号は半角数字5桁以内で入力してください。',
            'address.required' => '住所は必須です。',
            'contact_type.required' => 'お問い合わせの種類を選択してください。',
            'message.required' => 'お問い合わせ内容は必須です。',
            'message.max' => 'お問い合わせ内容は120文字以内で入力してください。',
        ];
    }    
}
