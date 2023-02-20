<form wire:submit.prevent="submit" class="w-[400px] mx-auto py-16">

    @if (session()->has('message'))
        <div class="bg-emerald-500 text-white py-3 px-4 mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <label>
            <input type="radio" value="customer" name="role" wire:model="role">
            Customer
        </label>
        <label>
            <input type="radio" value="vendor" name="role" wire:model="role">
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('first_name') border-red-500 @enderror"
               placeholder="First Name">
        @error('first_name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('first_name') border-red-500 @enderror"
               placeholder="Last Name">
        @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="email" wire:model.debounce.500ms="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-500 @enderror"
               placeholder="Email">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="password" wire:model.debounce.500ms="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password') border-red-500 @enderror"
               placeholder="Password">
        @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="company_name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('company_name') border-red-500 @enderror" placeholder="Company Name">
            @error('company_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    @endif

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="vat_number"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('vat_number') border-red-500 @enderror" placeholder="VAT Number">
            @error('vat_number') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    @endif

    <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Register</button>
</form>
