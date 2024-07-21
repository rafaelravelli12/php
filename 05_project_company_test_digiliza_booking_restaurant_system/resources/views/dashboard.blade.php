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
              <h2 class="font-semibold text-xl text-gray-800 leading-tight" style=" margin-bottom:20px;">Lounge Layout</h2>
              <p style="margin-bottom:20px;">Evaluate the current layout of the tables in our lounge:</p>
              <div style="max-width: 800px; margin: 0 auto; border: 1px solid #ccc; padding: 10px; margin-bottom:20px;">
                <img src="{{ asset('images/restaurant-plan.png') }}" alt="Your Image" style="display: block; margin-left: auto; margin-right: auto;">
              </div>
            </div>
          </div>            
      </div>        
  </div>
</x-app-layout>
