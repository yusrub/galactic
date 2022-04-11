<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpacecraftRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'class' => 'required|max:255',
            'crew' => 'required|integer',
            'image' => 'sometimes|string',
            'value' => 'sometimes|numeric',
            'status' => 'sometimes|string',
            'armament' => 'sometimes|array',
        ];
    }

    public function all($keys = null)
    {
        if(empty($keys)){
            return parent::json()->all();
        }

        return collect(parent::json()->all())->only($keys)->toArray();
    }
}
