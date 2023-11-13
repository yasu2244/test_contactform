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
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'regex:/^([0-9]{3}[-][0-9]{4})+$/'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['string', 'max:255'],
            'opinion' => ['required'],
        ];
    }

    

    public function sanitize()
    {
        $input = $this->all();

        if (isset($input['postcode'])) {
            $input['postcode'] = mb_convert_kana($input['postcode'],'n');
        }

        $this->replace($input);
            return $input;
    }

    public function messages()
    {
        return [
            'last_name.required' => '名字を入力してください',
            'last_name.string' => '名字を文字列で入力してください',
            'last_name.max' => '名字を255文字以下で入力してください',
            'first_name.required' => '名前を入力してください',
            'first_name.string' => '名前を文字列で入力してください',
            'first_name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号をハイフンを入れた8桁の半角数字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'building.string' => '建物名を文字列で入力してください',
            'building.max' => '建物名を255文字以下で入力してください',
            'opinion.required' => 'ご意見を入力してください'
        ];
    }
}
