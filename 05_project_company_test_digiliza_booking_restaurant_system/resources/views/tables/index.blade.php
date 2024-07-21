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
                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style=" margin-bottom:20px;">Bookings for day {{ $bookingDateString }}</h2>

                @if (session('message'))
                  <div class="alert alert-success" style="background-color: green; color: white; padding: 10px; border-radius: 5px; margin-bottom:20px;">
                    {{ session('message') }}
                  </div>
                @endif

                <x-button style="margin-bottom:20px; background-color: gray">
                  <a href="{{ route('tables.addBooking', ['id' => $tableData[0]->booking_date_id]) }}">Add New Booking</a>
                </x-button>
                <x-button style="margin-bottom:20px; background-color: gray">
                  <a href="{{ route('tables.cancelBooking', ['id' => $tableData[0]->booking_date_id]) }}">Cancel a Booking</a>
                </x-button>

                <p style="margin-bottom:20px;">Evaluate the tables that are reserved for today:</p>

                <div class="flex justify-center text-center" style="margin-bottom:20px;">
                  <table class="table-auto border-collapse border">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">Table ID</th>
                        <th class="px-4 py-2">Booking 18h-20h</th>
                        <th class="px-4 py-2">Booking 20h-22h</th>
                        <th class="px-4 py-2">Booking 22h-24h</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tableData as $row)
                      <tr>
                        <td class="border px-4 py-2">{{ $row->table_number }}</td>
                        <td class="border px-4 py-2">
                          @if ($row->booking_18h_20h == 0)
                            <x-button style="background-color: green">Available</x-button>
                          @else
                            <x-button style="background-color: black">Reserved by <br>{{ $row->booking_18h_20h_added_by }}</x-button>
                          @endif
                        </td>
                        <td class="border px-4 py-2">
                          @if ($row->booking_20h_22h == 0)
                            <x-button style="background-color: green">Available</x-button>
                          @else
                          <x-button style="background-color: black">Reserved by <br>{{ $row->booking_20h_22h_added_by }}</x-button>
                          @endif
                        </td>
                        <td class="border px-4 py-2">
                          @if ($row->booking_22h_24h == 0)
                            <x-button style="background-color: green">Available</x-button>
                          @else
                          <x-button style="background-color: black">Reserved by <br>{{ $row->booking_22h_24h_added_by }}</x-button>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

              </div>
            </div>            
        </div>        
    </div>
</x-app-layout>
