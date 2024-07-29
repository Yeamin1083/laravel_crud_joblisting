<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<img class="h-40 w-auto ml-40" src="{{ asset('images/logo-no-background.png') }}" alt="Job Listings Logo">
<form>
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job.</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Provide us those required details</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="name">Employee Name</x-form-label>
          <div class="mt-2">
            <x-form-input name="name" id="name" placeholder="exp" />
           <x-form-error name="name"/>
        </div>
        </x-form-field>
        
        <x-form-field>
          <x-form-label for="company">Company</x-form-label>
          <div class="mt-2">
            <x-form-input name="company" id="company" placeholder="Google" />
           <x-form-error name="company"/>
        </div>
        </x-form-field>


        <x-form-field>
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">
            <x-form-input name="title" id="title" placeholder="CEO" />
           <x-form-error name="title"/>
        </div>
        </x-form-field>
        
        <x-form-field>
          <x-form-label for="salary">Salary</x-form-label>
          <div class="mt-2">
            <x-form-input name="salary" id="salary" placeholder="10,000$" />
           <x-form-error name="salary"/>
        </div>
        </x-form-field>

      </div>
      <div class="mt-10">
      
    </div>
      </div>
    </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>

    </form>
</x-layout>
