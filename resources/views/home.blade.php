<x-layout>
    {{--<x-slot name="heading">
        <!-- Heading slot content -->
        Latest Jobs are here.
    </x-slot>--}}

    <div class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen py-10">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-white mb-4">Hey Welcome</h1>
                <p class="text-xl text-gray-200">Explore the latest job opportunities and find your dream job today!</p>
            </div>

            <!-- Call to Action Section -->
            <div class="text-center mb-10">
            <a href="/jobs/create" class="bg-orange-700 hover:bg-purple-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">Create a Job</a>

            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-white">
                <div class="bg-white bg-opacity-20 rounded-lg p-6 shadow-lg">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 4.248c-3.148 0-5.785 2.23-6.473 5.222h-.035C5.214 9.176 3.75 10.905 3.75 13s1.464 3.824 3.742 3.824h.035C6.215 17.522 8.852 19.752 12 19.752c3.149 0 5.786-2.23 6.474-5.222h.035c2.277 0 3.741-1.729 3.741-3.824s-1.464-3.824-3.742-3.824h-.034C17.786 6.478 15.148 4.248 12 4.248zm0 14.504c-2.602 0-4.896-1.897-5.473-4.504h-.027c-.906 0-1.65-.848-1.65-1.752s.744-1.752 1.65-1.752h.027C7.104 7.897 9.398 6 12 6c2.601 0 4.895 1.897 5.473 4.504h.027c.906 0 1.65.848 1.65 1.752s-.744 1.752-1.65 1.752h-.027C16.895 16.855 14.602 18.752 12 18.752zm.75-5.502V12H9v-1.25h3.75V9H15v1.25h-3.75v2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-center">Feature One</h3>
                    <p class="text-center text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-6 shadow-lg">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2c-5.522 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.477 10-10c0-5.523-4.477-10-10-10zm4.293 12.293l-4.293 4.293-4.293-4.293-1.414 1.414 5.707 5.707 5.707-5.707-1.414-1.414zm0-8.586l-4.293 4.293-4.293-4.293-1.414 1.414 5.707 5.707 5.707-5.707-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-center">Feature Two</h3>
                    <p class="text-center text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-6 shadow-lg">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 mx-auto text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2c-5.522 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.477 10-10c0-5.523-4.477-10-10-10zm4.293 12.293l-4.293 4.293-4.293-4.293-1.414 1.414 5.707 5.707 5.707-5.707-1.414-1.414zm0-8.586l-4.293 4.293-4.293-4.293-1.414 1.414 5.707 5.707 5.707-5.707-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-center">Feature Three</h3>
                    <p class="text-center text-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
