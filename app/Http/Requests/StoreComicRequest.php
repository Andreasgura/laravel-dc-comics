<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'thumb' => 'required|max:255|min:3',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'type' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'thumb.required' => 'Il campo immagine è obbligatorio',
            'thumb.min' => 'Il campo immagine deve contenere almeno :min caratteri',
            'thumb.max' => 'Il campo immagine deve contenere al massimo :max caratteri',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.max' => 'Il campo prezzo deve contenere al massimo :max caratteri',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.max' => 'Il campo serie deve contenere al massimo :max caratteri',
            'type.required' => 'Il campo tipo è obbligatorio',
            'type.max' => 'Il campo tipo deve contenere al massimo :max caratteri',
        ];
    }
}
