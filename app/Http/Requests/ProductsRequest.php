<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
			'price' => 'required | numeric | max:999999',
			'brand' => 'required',
			'category' => 'required',
			'description' => 'required',
			// 'image' => 'required | mimes:jpeg,jpg,png',
        ];
    }

    	/**
	* Get the validation messages that apply to the request.
	*
	* @return array
	*/
	public function messages()
	{
		return [
			'name.required' => 'Name is required',
			'price.required' => 'Price is required',
			'genre_id.required' => 'El género es obligatorio',
			'price.numeric' => 'El price debe ser un número',
			'price.max' => 'El price debe ser un número entre 0 y 999999',
			// 'poster.required' => 'La imagen es obligatoria',
			// 'poster.mimes' => 'Formatos permitidos JPG, y PNG',
		];
	}
}
