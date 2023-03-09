<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => [
                'required',
                'max:100',
                Rule::unique(Project::class)->ignore($this->project['id']),
            ],
            'content' => 'required|max:255',
            'type_id' => 'numeric'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'content.required' => 'A content is required',
        ];
    }
}
