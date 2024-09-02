<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'name' => 'required|max:100|string',
            'description' => 'nullable|string',
            'start' => 'required|date|after:today',
            'duration' => 'nullable',
            'image' => 'string',
            'price' => 'decimal',
            'total_tickets' => 'integer',
            'end_of_sale' => 'required|date',
            'location_id' => 'required',
            'user_id'  => 'required'
        ];
    }
}
