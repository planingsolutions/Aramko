<?php

namespace App\Http\Requests\Backend\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateBlogCategoriesRequest.
 */
class UpdateBlogCategoriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('Update-Main-Section');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Images' =>['unique:content,Images,'.optional($this->route('content'))->id ],
            'Tittle' => ['required', 'unique:content,Tittle,'.optional($this->route('content'))->id],
            'Paragraph1' => ['required', 'max:191', 'unique:content,Pargraph1,'.optional($this->route('content'))->id],
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'Tittle.required' => trans('validation.Tittle') ,
            'Paragraph1.requied' =>  trans('validation.Tittle') ,
        ];
    }

    // /**
    //  * Body Parameters : Used by scribe to generate doc.
    //  *
    //  * @return array
    //  */
    // public function bodyParameters()
    // {
    //     return [
    //         'name' => [
    //             'description' => 'Name of the category.',
    //             'example' => 'Software',
    //         ],
    //         'status' => [
    //             'description' => 'Status of the category.',
    //             'example' => 1,
    //         ],
    //     ];
    // }
}
