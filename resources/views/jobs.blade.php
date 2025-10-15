<x-layout>
     <x-slot:heading>
        About Page
</x-slot:heading>
<ul class="flex flex-col gap-5  ">
 @foreach ($jobs as $job )
    <li class="bg-blue-400 hover:underline  p-6 rounded-2xl"><a href="/jobs/ {{ $job['id']}} ">       <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year</li></a>

    @endforeach</ul>
</x-layout>