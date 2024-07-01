<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'parent_id' => 'int',
            'url' => 'string',
            'title' => 'required|string|max:255',
            'external_link' => 'string',
            'content_primary' => 'string',
            'content_socondary' => 'string',
            'display_date' => 'date',
            'template_type' => 'required',
            'lang' => 'int',
            'is_publish' => 'int',

            'image_1' => 'int',
            'image_2' => 'int',
            'image_3' => 'int',

            'meta_description' => 'int',
            'meta_keywords' => 'int',
            'ordinal' => 'number',
            'componen' => 'int',
            'album' => 'int',
            'album_2' => 'int',
            'video' => 'int',
            'link_vie' => 'int',
            'box_vie' => 'int',

            'highlited_value_1' => 'int',
            'highlited_value_2' => 'int',
            'highlited_value_3' => 'int',
            'highlited_icon_1' => 'int',
            'highlited_icon_2' => 'int',
            'highlited_icon_3' => 'int',

            'has_sidebar' => 'int',
            'cross_page' => 'int',

            'tab_1_title' => 'int',
            'tab_1_content' => 'int',
            'tab_2_title' => 'int',
            'tab_2_content' => 'int',
            'tab_3_title' => 'int',
            'tab_3_content' => 'int',
            'tab_4_title' => 'int',
            'tab_4_content' => 'int',
            'tab_5_title' => 'int',
            'tab_5_content' => 'int',

            'accordion_1_title' => 'int',
            'accordion_1_content' => 'int',
            'accordion_2_title' => 'int',
            'accordion_2_content' => 'int',
            'accordion_3_title' => 'int',
            'accordion_3_content' => 'int',
            'accordion_4_title' => 'int',
            'accordion_4_content' => 'int',
            'accordion_5_title' => 'int',
            'accordion_5_content' => 'int',

            'badges' => 'int',
            'badges_2' => 'int',

            'widget' => 'int'
        ];
    }

    public function messages(): array
    {
        return [
            'template_type.required' => 'asd asd as',
            'body.required' => 'A message is required',
        ];
    }
}
