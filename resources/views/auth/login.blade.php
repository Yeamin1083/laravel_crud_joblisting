<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <div class="min-h-screen bg-blue-100 flex items-center justify-center rounded-lg">
        <form method="POST" action="/login" class="max-w-md w-full mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
            @csrf

            <div class="space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">Log In to Your Account</h2>
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" placeholder="Email" :value="old('email')" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" placeholder="Enter Your Password" required class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>

                <div class="mt-4 flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <a href="/" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Cancel</a>
                <x-form-button class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2 px-4 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">Log In</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
