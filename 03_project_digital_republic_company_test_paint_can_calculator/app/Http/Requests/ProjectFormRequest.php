<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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
            'wall1_width' => 'required|numeric|min:1.00|max:50.00',
            'wall1_height' => 'required|numeric|min:1.00|max:50.00',
            'wall1_window_quantity' => 'required|numeric|min:0',
            'wall1_door_quantity' => 'required|numeric|min:0',

            'wall2_width' => 'required|numeric|min:1.00|max:50.00',
            'wall2_height' => 'required|numeric|min:1.00|max:50.00',
            'wall2_window_quantity' => 'required|numeric|min:0',
            'wall2_door_quantity' => 'required|numeric|min:0',

            'wall3_width' => 'required|numeric|min:1.00|max:50.00',
            'wall3_height' => 'required|numeric|min:1.00|max:50.00',
            'wall3_window_quantity' => 'required|numeric|min:0',
            'wall3_door_quantity' => 'required|numeric|min:0',

            'wall4_width' => 'required|numeric|min:1.00|max:50.00',
            'wall4_height' => 'required|numeric|min:1.00|max:50.00',
            'wall4_window_quantity' => 'required|numeric|min:0',
            'wall4_door_quantity' => 'required|numeric|min:0',
        ];
    }

    public function withValidator($validator)
    {
        for ($i = 1; $i <= 4; $i++) {
            $validator->after(function ($validator) use ($i) {
                $width = $this->input('wall' . $i . '_width');
                $height = $this->input('wall' . $i . '_height');
                $window = $this->input('wall' . $i . '_window_quantity');
                $door = $this->input('wall' . $i . '_door_quantity');

                if ($width * $height > 50) {
                    $validator->errors()->add('wall' . $i . '_width', 'The product of Wall ' . $i . ' width and height must not exceed 50.');
                }

                if (($window * 2.40 + $door * 1.52) >= ($width * $height ) / 2) {
                    $validator->errors()->add('area' . $i . '_over_50', 'The total area of windows and doors in Wall ' . $i . ' must be a maximum of 50% of the wall area.');
                }

                if ($door > 0 && $height < 2.20) {
                    $validator->errors()->add('wall' . $i . '_with_door', 'The height of Wall ' . $i . '  with a door must be at least 30 centimeters greater than the height of the door.');
                }
            });
        }
    }
}
