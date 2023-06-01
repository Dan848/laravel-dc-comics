<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:255', 'min:2'],
            'description' => ['required'],
            'thumb' => ['required'],
            'price' => ['required', 'min: 0', 'numeric'],
            'artists' => ['required', 'min:2'],
            'writers' => ['required', 'min:2'],
            'series' => ['required', 'max:255', 'min:2'],
            'sale_date' => ['required', 'date', 'date_format:Y-m-d'],
            'type' => ['required', 'max:255', 'min:2'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il campo Title è obbligatorio",
            'title.min' => "Il campo Title deve contenere almeno 2 caratteri",
            'title.max' => "Il campo Title deve contenere al massimo 255 caratteri",
            'description.required' => "Il campo Description è obbligatorio",
            'thumb.required' => "Il campo Thumbnail è obbligatorio",
            'price.required' => "Il campo Price è obbligatorio",
            'price.min' => "Il campo Price deve essere almeno 0",
            'price.numeric' => "Il campo Price deve essere un numero",
            'artists.required' => "Il campo Artists è obbligatorio",
            'artists.min' => "Il campo Artists deve contenere almeno 2 caratteri",
            'writers.required' => "Il campo Writers è obbligatorio",
            'writers.min' => "Il campo Writers deve contenere almeno 2 caratteri",
            'series.required' => "Il campo Series è obbligatorio",
            'series.max' => "Il campo Series deve contenere al massimo 255 caratteri",
            'series.min' => "Il campo Series deve contenere almeno 2 caratteri",
            'sale_date.required' => "Il campo Sale Date è obbligatorio",
            'sale_date.date' => "Il campo Sale Date deve essere una data valida",
            'sale_date.date_format' => "Il campo Sale Sate deve seguire il formato dd-mm-yyyy",
            'type.required' => "Il campo Type è obbligatorio",
            'type.max' => "Il campo Type deve contenere al massimo 255 caratteri",
            'type.min' => "Il campo Type deve contenere almeno 2 caratteri",
        ];
    }
}
