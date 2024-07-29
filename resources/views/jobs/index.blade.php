<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <div class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen py-10">
        <div class="container mx-auto px-4">
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($jobs as $job)
                    <a href="/jobs/{{$job['id']}}" class="bg-white bg-opacity-20 rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="font-bold text-green-500 mb-2">Company: <strong>{{$job->employer->name}}</strong></div>
                        <div class="text-gray-200 mb-2">Job Title: <strong>{{ $job['title'] }}</strong></div>
                        <div class="text-gray-200">Salary: Pays <strong>{{ $job['salary'] }}</strong> per year.</div>
                        
                    </a>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
