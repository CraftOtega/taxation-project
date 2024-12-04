<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif --}}


                @if (session()->has('success'))
                <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert">
                  <span class="font-bold">Success</span> {{session('success')}}.
                </div>
              @endif
                    <livewire:agent.users.payment-history/>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>


