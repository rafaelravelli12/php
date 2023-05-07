<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRequest;

class ProjectController extends Controller
{
    public function submitForm(ProjectFormRequest $request)
    {
        $wall1_width = $request->input('wall1_width');
        $wall1_height = $request->input('wall1_height');
        $wall1_window_quantity = $request->input('wall1_window_quantity');
        $wall1_door_quantity = $request->input('wall1_door_quantity');

        $wall2_width = $request->input('wall2_width');
        $wall2_height = $request->input('wall2_height');
        $wall2_window_quantity = $request->input('wall2_window_quantity');
        $wall2_door_quantity = $request->input('wall2_door_quantity');

        $wall3_width = $request->input('wall3_width');
        $wall3_height = $request->input('wall3_height');
        $wall3_window_quantity = $request->input('wall3_window_quantity');
        $wall3_door_quantity = $request->input('wall3_door_quantity');

        $wall4_width = $request->input('wall4_width');
        $wall4_height = $request->input('wall4_height');
        $wall4_window_quantity = $request->input('wall4_window_quantity');
        $wall4_door_quantity = $request->input('wall4_door_quantity');

        $wall1_area = ($wall1_width * $wall1_height) - ($wall1_window_quantity * 2.40) - ($wall1_door_quantity * 1.52);
        $wall2_area = ($wall2_width * $wall2_height) - ($wall2_window_quantity * 2.40) - ($wall2_door_quantity * 1.52);
        $wall3_area = ($wall3_width * $wall3_height) - ($wall3_window_quantity * 2.40) - ($wall3_door_quantity * 1.52);
        $wall4_area = ($wall4_width * $wall4_height) - ($wall4_window_quantity * 2.40) - ($wall4_door_quantity * 1.52);
        $total_area = $wall1_area + $wall2_area + $wall3_area + $wall4_area;

        return $this->calculateCansNeeded($total_area);
    }

    public function calculateCansNeeded($total_area) {
        $liters_needed = $total_area / 5;
        $cans_needed = [];
        $can_sizes = [18, 3.6, 2.5, 0.5];

        foreach ($can_sizes as $size) {
            $num_cans = floor($liters_needed / $size);
            if ($num_cans > 0) {
                $cans_needed[] = [
                    'size' => $size,
                    'quantity' => $num_cans,
                ];
                $liters_needed -= $num_cans * $size;
            }
        }
        if ($liters_needed > 0) {
            $found_small_can = false;
            foreach ($cans_needed as &$can) {
                if ($can['size'] == 0.5) {
                    $can['quantity']++;
                    $found_small_can = true;
                    break;
                }
            }
            if (!$found_small_can) {
                $cans_needed[] = ['size' => 0.5, 'quantity' => 1];
            }
        }

        return view('second', ['cans_needed' => $cans_needed]);
    }
}
