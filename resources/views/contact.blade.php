<x-layout>
    <x-slot name="heading">
        Contact with our Team.
    </x-slot>

    <div class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen py-10">
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-white mb-4">Contact Us</h1>
                <p class="text-xl text-gray-200">Get in touch with our team for any inquiries or feedback.</p>
            </div>

            <!-- Contact Form Section -->
            <div class="max-w-lg mx-auto bg-white bg-opacity-20 rounded-lg p-6 shadow-lg">
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-white">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full px-3 py-2 rounded-lg bg-gray-100 text-gray-900 focus:outline-none focus:bg-white" required>
                    </div>
                    <div>
                        <label for="email" class="block text-white">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full px-3 py-2 rounded-lg bg-gray-100 text-gray-900 focus:outline-none focus:bg-white"required>
                    </div>
                    <div>
                        <label for="message" class="block text-white">Your Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Enter your message" class="w-full px-3 py-2 rounded-lg bg-gray-100 text-gray-900 focus:outline-none focus:bg-white"required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Popup Notification -->
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8 shadow-lg text-center">
            <p class="text-lg font-semibold text-gray-800 mb-4">We will reach out to you soon through your email</p>
            <button id="closePopup" class="bg-purple-600 hover:bg-purple-500 text-white font-bold py-2 px-4 rounded-lg">OK</button>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Create form data object
            let formData = new FormData(this);

            // Send the form data to the server using fetch
            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                },
                body: formData
            }).then(response => response.json()).then(data => {
                if (data.success) {
                    document.getElementById('popup').classList.remove('hidden');
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').classList.add('hidden');
            window.location.href = "/";
        });
    </script>
</x-layout>
