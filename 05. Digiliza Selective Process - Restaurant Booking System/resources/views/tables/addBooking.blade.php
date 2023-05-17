<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Welcome to Digiliza´s Restaurant!') }}
    </h2>
  </x-slot>

  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight" style=" margin-bottom:20px;">Add a New Booking for day {{ $bookingDateString }}</h2>
          
          <form action="{{ route('tables.AddBookingPut') }}" method="post">
            @method('put')
            @csrf
            <input type="hidden" name="booking_date_id" value="{{ $id }}">

            <div class="mt-2">
              <label for="table_number" class="block text-gray-700 font-bold mb-2" style=" margin-bottom:20px;">Select a Table:</label>
              <select name="table_number" id="table_number" class="w-full" style=" margin-bottom:20px;">
                <option value="">Choose the table</option>
                @for ($i = 1; $i <= 15; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
            </div>
            @error('table_number')
              <div class="alert alert-danger" style="background-color: red; color: white; padding: 10px; border-radius: 5px; margin-bottom:20px;">
                {{ $message }}
              </div>
            @enderror
            
            <div class="mt-2">
              <label for="booking_time" class="block text-gray-700 font-bold mb-2" style=" margin-bottom:20px;">Select a Booking Time:</label>
              <select name="booking_time" id="booking_time" class="w-full" style=" margin-bottom:20px;">
                <option value="">Choose a booking time</option>
                <option value="booking_18h_20h">18h-20h</option>
                <option value="booking_20h_22h">20h-22h</option>
                <option value="booking_22h_24h">22h-24h</option>
              </select>
            </div>

            @foreach (['booking_18h_20h', 'booking_20h_22h', 'booking_22h_24h'] as $timeSlot)
              @if ($errors->has($timeSlot))
                <div class="alert alert-danger" style="background-color: red; color: white; padding: 10px; border-radius: 5px; margin-bottom:20px;">
                  {{ $errors->first($timeSlot) }}
                </div>
              @endif
            @endforeach
            @error('booking_time')
            <div class="alert alert-danger" style="background-color: red; color: white; padding: 10px; border-radius: 5px; margin-bottom:20px;">
              {{ $message }}
            </div>
            @enderror

            <x-button class="mt-2" style=" margin-bottom:20px;">Add Booking</x-button>
          </form>

          <x-button style="margin-bottom:20px; background-color: gray">
            <a href="{{ route('tables.index', ['id' => $id]) }}">Return</a>
          </x-button>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
