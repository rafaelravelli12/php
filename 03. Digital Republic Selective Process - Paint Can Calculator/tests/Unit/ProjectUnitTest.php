<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ProjectFormRequest;

class ProjectUnitTest extends TestCase
{
    public function testValidationPassesWithValidData()
    {
        $data = [
            'wall1_width' => 10,
            'wall1_height' => 1,
            'wall1_window_quantity' => 0,
            'wall1_door_quantity' => 0,

            'wall2_width' => 10,
            'wall2_height' => 1,
            'wall2_window_quantity' => 0,
            'wall2_door_quantity' => 0,

            'wall3_width' => 10,
            'wall3_height' => 1,
            'wall3_window_quantity' => 0,
            'wall3_door_quantity' => 0,

            'wall4_width' => 10,
            'wall4_height' => 1,
            'wall4_window_quantity' => 0,
            'wall4_door_quantity' => 0,
        ];

        $validator = Validator::make($data, (new ProjectFormRequest())->rules());
        $this->assertTrue($validator->passes());
    }

    public function testValidationFailsWithInvalidData()
    {
        $data = [
            'wall1_width' => 100, // product of width and height exceeds 50
            'wall1_height' => 10,
            'wall1_window_quantity' => 1,
            'wall1_door_quantity' => 0,

            'wall2_width' => 10,
            'wall2_height' => 10,
            'wall2_window_quantity' => 10, // total area of windows and doors exceeds 50% of wall area
            'wall2_door_quantity' => 0,

            'wall3_width' => 10,
            'wall3_height' => 1.9, // height with door is less than 30cm greater than door height
            'wall3_window_quantity' => 0,
            'wall3_door_quantity' => 1,

            'wall4_width' => 10,
            'wall4_height' => 10,
            'wall4_window_quantity' => 0,
            'wall4_door_quantity' => 0,
        ];

        $this->expectException(ValidationException::class);
        Validator::make($data, (new ProjectFormRequest())->rules())->validate();
    }   
}

// The test needs to be updated, since it is only validating the ProjectFormRequest rules() function, it should also validate the withValidator function)
