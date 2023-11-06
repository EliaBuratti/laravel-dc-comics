<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:5000',
            'thumb' => 'nullable|image|max:600',
            'price' => 'required|max:25',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3|max:500',
            'writers' => 'required|min:3|max:500',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Scrivi il titolo del fumetto',
            'title.min' => 'scrivi almeno 3 caratteri',
            'title.max' => 'Limite massimo 100 caratteri',
            'description.required' => 'Scrivi la descrizione del fumetto',
            'description.min' => 'scrivi almeno 3 caratteri',
            'description.max' => 'Limite massimo 500 caratteri',
            'thumb.imgae' => 'seleziona un formato corretto',
            'price.required' => 'inserisci il prezzo',
            'price.max' => 'limite massimo 25 caratteri',
            'sale_date.required' => 'inserisci la data ',
            'type.required' => 'inserisci il tipo del fumetto',
            'artists.required' => 'Inserisci almeno un artista',
            'writers.required' => 'inserisci almeno uno scrittore',





        ];
    }
}
