<!DOCTYPE html>
<html>

<head>
    <title>Digital Republic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <h3>PAINT CANS CALCULATOR</h3>
    </header>
    <main>
        <div>
            <p>Web or mobile application that calculates the amount of paint cans needed to paint a room with four
                walls. The user will choose the measure of each wall with 2 precision digits and how
                many doors and windows it has. Based on the calculated total required painting area, the system will
                return the optimal number of cans. The smallest amount possible of cans will be
                considered
                optimal.
            </p>
            <p>Additional Information</p>
            <ul>
                <li>No wall can be less than 1,00m² or more than 50,00m², but they can have different heights and widths
                </li>
                <li>The total area of the doors and windows must be a maximum of 50% of the wall area</li>
                <li>The height of walls with a door must be at least 30cm greater than the height of the door</li>
                <li>Each window measures: 2.00 x 1.20m</li>
                <li>Each door measures: 0.80 x 1.90m</li>
                <li>Each liter of paint is capable of painting 5m²</li>
                <li>Do not consider ceiling or floor</li>
            </ul>
            <p>The size variations of paint cans are:</p>
            <ul>
                <li>0.5L</li>
                <li>2.5L</li>
                <li>3.6L</li>
                <li>18L</li>
            </ul>
        </div>
        <hr>
        <h2 class="h2_edited">Fill the form!</h2>
        <form method="POST" action="{{ route('submit-form') }}">
            @csrf
            @for ($i = 1; $i <= 4; $i++)
                <h4 class="h4_edited">Wall {{ $i }}</h4>
                <label for="wall{{ $i }}_width">Width (meters):</label>
                <input type="number" id="wall{{ $i }}_width" name="wall{{ $i }}_width"
                    min="1.00" max="50.00" step="0.01" value="{{ old('wall' . $i . '_width') }}" required><br>
                <label for="wall{{ $i }}_height">Height (meters):</label>
                <input type="number" id="wall{{ $i }}_height" name="wall{{ $i }}_height"
                    min="1.00" max="50.00" step="0.01" value="{{ old('wall' . $i . '_height') }}"
                    required><br>
                <label for="wall{{ $i }}_window_quantity">Number of windows:</label>
                <input type="number" id="wall{{ $i }}_window_quantity"
                    name="wall{{ $i }}_window_quantity" min="0"
                    value="{{ old('wall' . $i . '_window_quantity') }}" required><br>
                <label for="wall{{ $i }}_door_quantity">Number of doors:</label>
                <input type="number" id="wall{{ $i }}_door_quantity"
                    name="wall{{ $i }}_door_quantity" min="0"
                    value="{{ old('wall' . $i . '_door_quantity') }}" required><br>
                @if ($errors->has("wall{$i}_width"))
                    <div class="error">{{ $errors->first("wall{$i}_width") }}</div>
                @endif
                @if ($errors->has("area{$i}_over_50"))
                    <div class="error">{{ $errors->first("area{$i}_over_50") }}</div>
                @endif
                @if ($errors->has("wall{$i}_with_door"))
                    <div class="error">{{ $errors->first("wall{$i}_with_door") }}</div>
                @endif
                <hr>
            @endfor
            <button type="submit">Calculate</button>
        </form>
    </main>
    <footer>
        <p>© 2023 All rights reserved</p>
    </footer>
</body>

</html>
