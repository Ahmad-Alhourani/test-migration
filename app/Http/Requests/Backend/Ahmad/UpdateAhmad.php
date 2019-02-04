<?php
namespace App\Http\Requests\Backend\Ahmad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateAhmad extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.ahmad.edit', $this->ahmad);
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

            'test_id' => 'required',

            'l_name' => 'nullable',

            'email' => 'required',

            'sms' => 'nullable'
        ];
    }
}
