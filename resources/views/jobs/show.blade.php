<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    
    <div class="font-bold text-blue-500">Company: <strong>{{$job->employer->name}}</strong></div> 
            <div>
            Job Titile:<strong> {{ $job->title }}</strong> 
            
            <div>Salary: Pays <strong>{{ $job->salary }}</strong> per year.</div>
</div>
@can('edit',$job)
<p class="mt-6">
    <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
</p> 
@endcan
</x-layout>
