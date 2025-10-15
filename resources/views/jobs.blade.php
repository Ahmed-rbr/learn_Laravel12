<x-layout>
     <x-slot:heading>
        About Page
</x-slot:heading>
<div class="flex flex-col gap-5  ">

 @foreach ($jobs as $job )


   <a class=" block border-gray-200 border   p-6 rounded-2xl" href="/jobs/ {{ $job['id']}} "> 
     <div class="font-bold">
{{ $job->employer->name }}   
</div>

      <div class="hover:underline">   <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year
</div>
    

</a>

    @endforeach
   <div>
      {{ $jobs->links() }}
   </div>
   
   </div>
</x-layout>