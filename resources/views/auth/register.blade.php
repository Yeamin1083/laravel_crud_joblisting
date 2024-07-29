<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="min-h-screen bg-blue-100 flex items-center justify-center rounded-lg">
        <form method="POST" action="/register" class="max-w-lg w-full p-8 bg-white rounded-lg shadow-lg">
            @csrf
            <div class="space-y-8">
                <div class="border-b border-gray-200 pb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Your Account</h2>

                    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-6">
                        <x-form-field>
                            <x-form-label for="fname">First Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="fname" id="fname" placeholder="Enter Your First Name" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                                <x-form-error name="fname" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="lname">Last Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="lname" id="lname" placeholder="Enter Your Last Name" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                                <x-form-error name="lname" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" type="email" placeholder="Your Email Address" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                                <x-form-error name="email" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password" id="password" type="password" placeholder="Make a Password" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                                <x-form-error name="password" />
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password_confirmation">Confirm Your Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Your Password" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                                <x-form-error name="password_confirmation" />
                            </div>
                        </x-form-field>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-x-6 mt-6">
                    <a href="/" class="text-sm font-semibold text-gray-700 hover:text-gray-900">Cancel</a>
                    <x-form-button class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">Register</x-form-button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
