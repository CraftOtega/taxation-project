<div>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">





    <div class="p-6 bg-white rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="taxType" class="block text-sm font-medium text-gray-700">Select Tax Type:</label>
                <select wire:model="taxType" id="taxType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">-- Select --</option>
                    @foreach(array_keys($withholdingTaxTable) as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="recipientType" class="block text-sm font-medium text-gray-700">Recipient Type:</label>
                <select wire:model="recipientType" id="recipientType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">-- Select --</option>
                    <option value="Corporate">Corporate</option>
                    <option value="NonCorporate">Non-Corporate</option>
                </select>
            </div>

            <div>
                <label for="residencyStatus" class="block text-sm font-medium text-gray-700">Residency Status:</label>
                <select wire:model="residencyStatus" id="residencyStatus" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="">-- Select --</option>
                    <option value="Resident">Resident</option>
                    <option value="Nonresident">Nonresident</option>
                </select>
            </div>

            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Enter Amount:</label>
                <input wire:model="amount" type="number" id="amount" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="#000.00">
            </div>

        <div class="col-span-1 md:col-span-2">

            <button wire:click="calculateTax" class="mt-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">make Payment</button>
        </div>

            <div class="col-span-1 md:col-span-2 text-red-800 rounded-lg shadow">
                @if($result)
                    <div class="mt-3 p-4 bg-blue-50 text-red-800 rounded-lg shadow">
                        {{ $result }}
                    </div>
                @endif
            </div>
        </div>
    </div>









</div>
</div>
</div>
</div>



</div>
