<!-- selectBookingDate.blade.php -->
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
					<h2 class="font-semibold text-xl text-gray-800 leading-tight" style=" margin-bottom:20px;">Select Booking Date</h2>


                    <form action="{{ route('tables.addBookingDate') }}" method="post">
						@csrf
                        <label for="booking_date">Select Booking Date:</label>
                        <input type="date" name="booking_date" id="booking_date" class="ml-2" required><br>
                        {{-- <input type="date" name="booking_date" id="booking_date" class="ml-2" required min="{{ date('Y-m-d') }}"><br> --}}
						<x-button type="submit" class="mt-2" style="margin-bottom:20px; background-color: gray">Submit</x-button>
                    </form>
                    @error('booking_date')
                        <div class="alert alert-danger" style="background-color: red; color: white; padding: 10px; border-radius: 5px; margin-bottom:20px;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
