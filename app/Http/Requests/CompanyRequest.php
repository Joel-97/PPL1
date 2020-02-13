<?php

namespace App\Http\Requests;
 use App\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'companyId' => ['required', 'min:3', Rule::unique((new company)->getTable())->ignore($this->route()->company->id ?? null)],
            'companyName' => ['required', 'max:100'],
            'companyPhone' => ['required', 'max:15 '],
            'companyEmail' => ['required', 'max:254'],
            'companyAddress' => ['required', 'max:100'],
            'requiredProfile' => ['required'],
            'companyRequirements' => ['required'],
            'companyInfo' => ['required'],
            'companyDescription' => ['required']
        ];
    }
}
