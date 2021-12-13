<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
          'Surname'=>'required',
          'Name'=>'required',
          'MiddleName'=>'required',
          'PhoneNumber'=>'required',
          'City'=>'required',
          'Street'=>'required',
          'HouseNumber'=>'required',
          'Flat'=>'required',
          'NumberRooms'=>'required',
          'NumberTenats'=>'required',
          'Login'=>'required',
        ];
    }
}
