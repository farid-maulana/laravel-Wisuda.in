<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduationRegistrationScheduleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'start_date' => ['required', 'date'],
          'end_date' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
