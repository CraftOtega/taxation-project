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




                        <form wire:submit="submit">
                            <div class="grid gap-y-4">

                                <!-- Property Owner's Name -->
                                <div>
                                    <label for="owner_name" class="block text-sm mb-2">Property Owner's Name</label>
                                    <input type="text" id="owner_name" wire:model="owner_name"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('owner_name')
                                        <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>



                                <!-- Email Address -->
                                <div>
                                    <label for="email" class="block text-sm mb-2">Email Address</label>
                                    <input type="email" id="email" wire:model="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('email')
                                        <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>



                                <!-- Phone Number -->
                                <div>
                                    <label for="phone_number" class="block text-sm mb-2">Phone Number</label>
                                    <input type="text" id="phone_number" wire:model="phone_number"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('phone_number')
                                        <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>



                                 <!-- Phone Number -->
                                 <div>
                                    <label for="stin_number" class="block text-sm mb-2">Property Owner's Stin No</label>
                                    <input type="text" id="phone_number" wire:model="stin_number"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('stin_number')
                                        <span class="text-red-600 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="text-blue-600" wire:loading>
                                    Processing...
                                </div>
                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                                    Register User
                                </button>


                            </div>
                        </form>






</div>
</div>
</div>
</div>







</div>
