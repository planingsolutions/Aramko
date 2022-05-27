<?php

namespace App\Http\Requests\Backend\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageBlogCategoriesRequest.
 */
class DeleteMainsection extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-Main-Section-records');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
