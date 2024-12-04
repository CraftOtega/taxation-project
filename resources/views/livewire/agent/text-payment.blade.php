<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="taxType" class="block text-sm font-medium text-gray-700">Select Tax Type:</label>
            <select wire:model.live="taxType" id="taxType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">-- Select --</option>
                @foreach(array_keys($withholdingTaxTable) as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="recipientType" class="block text-sm font-medium text-gray-700">Recipient Type:</label>
            <select wire:model.live="recipientType" id="recipientType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">-- Select --</option>
                <option value="Corporate">Corporate</option>
                <option value="NonCorporate">Non-Corporate</option>
            </select>
        </div>

        <div>
            <label for="residencyStatus" class="block text-sm font-medium text-gray-700">Residency Status:</label>
            <select wire:model.live="residencyStatus" id="residencyStatus" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">-- Select --</option>
                <option value="Resident">Resident</option>
                <option value="Nonresident">Nonresident</option>
            </select>
        </div>

        <div>
            <label for="amount" class="block text-sm font-medium text-gray-700">Enter Amount:</label>
            <input wire:model.live="amount" type="number" id="amount" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter amount">
        </div>

        <div class="col-span-1 md:col-span-2">
            @if($result)
                <div class="mt-3 p-4 bg-blue-50 text-blue-800 rounded-lg shadow">
                    {{ $result }}
                </div>
            @endif
        </div>
    </div>
</div>
