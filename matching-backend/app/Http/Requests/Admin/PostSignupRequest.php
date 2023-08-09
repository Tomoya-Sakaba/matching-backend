<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PostAdminSignupRequest extends FormRequest
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
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'name'          => 'required',
			'name_kana'     => 'required',
			'register_id'   => 'required|exists:types,register_code',
			'email_address' => 'required|email|unique:administrators',
			'password'      => 'required|confirmed|regex:/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\-]{8,24}$/',
			'phone_number'  => 'required|regex:/^0[0-9]{9,10}$/u',
		];
	}

	protected function failedValidation(Validator $validator)
	{
		$response['errors']  = $validator->errors()->toArray();
		throw new HttpResponseException(response()->json($response, 422));
	}
}
