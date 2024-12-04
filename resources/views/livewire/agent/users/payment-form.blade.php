<div>


    <form wire:submit="submit">
        <div class="grid gap-y-4">

            <!-- Property Owner's Name -->
            <div>
                <label for="owner_name" class="block text-sm mb-2 dark:text-white">Property Owner's Name</label>
                <input type="text" id="owner_name" wire:model="owner_name"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('owner_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Property Name -->
            <div>
                <label for="property_name" class="block text-sm mb-2 dark:text-white">Property Name</label>
                <input type="text" id="property_name" wire:model="property_name"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('property_name') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm mb-2 dark:text-white">Email Address</label>
                <input type="email" id="email" wire:model="email"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('email') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Property Address -->
            <div>
                <label for="property_address" class="block text-sm mb-2 dark:text-white">Property Address</label>
                <input type="text" id="property_address" wire:model="property_address"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('property_address') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone_number" class="block text-sm mb-2 dark:text-white">Phone Number</label>
                <input type="text" id="phone_number" wire:model="phone_number"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('phone_number') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Amount -->
            <div>
                <label for="amount" class="block text-sm mb-2 dark:text-white">Amount</label>
                <input type="number" id="amount" wire:model="amount"
                       class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                @error('amount') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="text-blue-600" wire:loading>
                Processing...
            </div>
            <!-- Submit Button -->
            <button type="submit"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                Submit Payment
            </button>


        </div>
    </form>
</div>
