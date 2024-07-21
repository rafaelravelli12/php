<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

use Tests\TestCase;
use App\Models\User;
use App\Models\BookingDate;
use App\Models\Table;

class AddBookingTableTest extends TestCase
{
    public function testSuccessfulAddBookingTableAndRedirectsToIndex()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $formResponse = $this->get('/tables/AddBookingPut');
        $csrfToken = Session::get('_token');

        $response = $this->put('/tables/AddBookingPut', [
            '_token' => $csrfToken,
            'booking_date_id' => '1',
            'table_number' => '1',
            'booking_time' => 'booking_18h_20h',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('tables', ['booking_18h_20h' => 1, 'table_number' => 1]);
        $response->assertRedirect(route('tables.index', ['id' => '1']));
        $response->assertSessionHas('message', 'Booking Table updated successfully.');
    }

    public function testFailedAddBookingTableAtAlreadyBookedTable()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $formResponse = $this->get('/tables/AddBookingPut');
        $csrfToken = Session::get('_token');

        $response = $this->put('/tables/AddBookingPut', [ 
            '_token' => $csrfToken,
            'booking_date_id' => '1',
            'table_number' => '1',
            'booking_time' => 'booking_18h_20h',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('booking_18h_20h', 'This table is already booked for the 18h-20h slot.');
    }
}
