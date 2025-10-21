<x-layout>
<x-slot:heading>
  job Details
</x-slot:heading>

<h1>Job Title: {{$job->title}}</h1>
<h1>Job Salary: {{$job->salary}}</h1>
@can('edit',$job)
  

<div class="flex gap-5 p-4">
  <a class="bg-blue-500 px-6 py-1 rounded" href="/jobs/{{$job->id}}/edit">Edit</a>
  <form action="/jobs/{{ $job->id }}" method="POST">
     
    @csrf
    @method('DELETE')
    <button class="bg-red-500 px-6 py-1 rounded" type="submit">delete</button>

  </form>
</div>
@endcan
</x-layout>