<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingDate;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use App\Rules\NotSunday;


class TableController extends Controller
{
    public function selectBookingDate()
    {
        return view('tables.selectBookingDate');
    }

    public function addBookingDate(Request $request)
    {
        $request->validate([
            'booking_date' => ['required', 'date', new NotSunday],
        ]);
        
        $booking_date = $request->input('booking_date');
        $bookingDate = BookingDate::firstOrCreate(['booking_date' => $booking_date]);
        $tableData = Table::where('booking_date_id', $bookingDate->id)->get();
        if ($tableData->isEmpty()) {
            for ($i = 1; $i <= 15; $i++) {
                $table = new Table();
                $table->booking_date_id = $bookingDate->id;
                $table->table_number = $i;
                $table->save();
        
                $tableData[] = $table;
            }
        }

        return redirect()->route('tables.index', ['id' => $bookingDate->id]);
    }

    public function index($id)
    {
        $bookingDateString = BookingDate::where('id', $id)->first()->booking_date;
        $tableData = Table::where('booking_date_id', $id)->get();

        return view('tables.index',compact('bookingDateString', 'tableData'));
    }

    public function addBooking($id)
    {
        $bookingDateString = BookingDate::where('id', $id)->first()->booking_date;
        return view('tables.addBooking', compact('id', 'bookingDateString'));
    }

    public function AddBookingPut(Request $request)
    {
        $request->validate([
            'booking_date_id' => 'required',
            'table_number' => 'required',
            'booking_time' => 'required',
        ]);

        $bookingDateId = $request->input('booking_date_id');
        $tableNumber = $request->input('table_number');
        $bookingTime = $request->input('booking_time');

        $table = Table::where('booking_date_id', $bookingDateId)->where('table_number', $tableNumber)->first();
            if($bookingTime == "booking_18h_20h") {
                if ($table->booking_18h_20h == 1) {
                    return redirect()->back()->withErrors(['booking_18h_20h' => 'This table is already booked for the 18h-20h slot.']);
                }
                else {
                    $table->booking_18h_20h = 1;
                    $table->booking_18h_20h_added_by = Auth::user()->name;
                }
            }
            if($bookingTime == "booking_20h_22h") {
                if ($table->booking_20h_22h == 1) {
                    return redirect()->back()->withErrors(['booking_20h_22h' => 'This table is already booked for the 20h-22h slot.']);
                }
                else {
                    $table->booking_20h_22h = 1;
                    $table->booking_20h_22h_added_by = Auth::user()->name;
                }
            }
            if($bookingTime == "booking_22h_24h") {
                if ($table->booking_22h_24h == 1) {
                    return redirect()->back()->withErrors(['booking_22h_24h' => 'This table is already booked for the 22h-24h slot.']);
                }
                else {
                    $table->booking_22h_24h = 1;
                 $table->booking_22h_24h_added_by = Auth::user()->name;
                }
            }
        $table->save();

        return redirect()->route('tables.index', ['id' => $bookingDateId])->with('message', 'Booking Table updated successfully.');
    }

    public function cancelBooking($id)
    {
        $bookingDateString = BookingDate::where('id', $id)->first()->booking_date;
        return view('tables.cancelBooking', compact('id', 'bookingDateString'));
    }

    public function cancelBookingPut(Request $request)
    {
        $request->validate([
            'booking_date_id' => 'required',
            'table_number' => 'required',
            'booking_time' => 'required',
        ]);

        $bookingDateId = $request->input('booking_date_id');
        $tableNumber = $request->input('table_number');
        $bookingTime = $request->input('booking_time');

        $table = Table::where('booking_date_id', $bookingDateId)->where('table_number', $tableNumber)->first();
            if($bookingTime == "booking_18h_20h") {
                if ($table->booking_18h_20h == 0) {
                    return redirect()->back()->withErrors(['booking_18h_20h' => 'This table is not booked for the 18h-20h slot.']);
                }
                else {
                    $table->booking_18h_20h = 0;
                    $table->booking_18h_20h_added_by = NULL;
                }
            }
            if($bookingTime == "booking_20h_22h") {
                if ($table->booking_20h_22h == 0) {
                    return redirect()->back()->withErrors(['booking_20h_22h' => 'This table is not booked for the 20h-22h slot.']);
                }
                else {
                    $table->booking_20h_22h = 0;
                    $table->booking_20h_22h_added_by = NULL;
                }
            }
            if($bookingTime == "booking_22h_24h") {
                if ($table->booking_22h_24h == 0) {
                    return redirect()->back()->withErrors(['booking_22h_24h' => 'This table is not booked for the 22h-24h slot.']);
                }
                else {
                    $table->booking_22h_24h = 0;
                    $table->booking_22h_24h_added_by = NULL;
                }
            }
        $table->save();

        return redirect()->route('tables.index', ['id' => $bookingDateId])->with('message', 'Booking Table updated successfully.');
    }

}
