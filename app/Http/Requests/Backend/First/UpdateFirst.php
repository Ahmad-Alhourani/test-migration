<?php
namespace App\Http\Requests\Backend\First;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateFirst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.first.edit', $this->first);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'id' => 'None',

            'name' => 'required',

            'l_name' => 'nullable',

            'email' => 'required',

            'des' => 'nullable',

            'sms' => 'nullable'
        ];
    }
}
