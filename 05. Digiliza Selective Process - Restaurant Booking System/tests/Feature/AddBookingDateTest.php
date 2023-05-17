<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use App\Models\User;
use App\Models\BookingDate;

class AddBookingDateTest extends TestCase
{
    public function testSuccessfulAddBookingDateAndRedirectsToIndex()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $formResponse = $this->get('/tables/addBookingDate');
        $csrfToken = Session::get('_token');

        $response = $this->post('/tables/addBookingDate', [
            '_token' => $csrfToken,
            'booking_date' => '2023-05-17', //Non Sunday day choosed
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('booking_dates', ['booking_date' => '2023-05-17']);
        $bookingDateRecord = BookingDate::where('booking_date', '2023-05-17')->first();
        $response->assertRedirect(route('tables.index', ['id' => $bookingDateRecord->id]));
        $this->assertDatabaseHas('tables', ['booking_date_id' => $bookingDateRecord->id]);
    }

    public function testFailedAddBookingDateOnSunday()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $formResponse = $this->get('/tables/addBookingDate');
        $csrfToken = Session::get('_token');

        $response = $this->post('/tables/addBookingDate', [
            '_token' => $csrfToken,
            'booking_date' => '2023-05-21', //Sunday day choosed
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['booking_date']);
        $response->assertSessionHasErrors('booking_date', 'Sunday is not a valid booking day.');
    }
}
