<x-layout>

  <x-slot:heading>create job
    </x-slot:heading>
  
<form action="/jobs" method="POST">

@csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Create New Job</h2>
      <p class="mt-1 text-sm/6 text-gray-400">We just need handful of details from you .</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
 <x-form-field> 
            
  <x-form-label  for='title'>title</x-form-label>
          <div class="mt-2">
         
            <x-form-input id="title" type="text" name="title" placeholder="PHP Dev" />
       <x-form-error name='title'/>
          </div>
</x-form-field>

 <x-form-field>  
   <x-form-label for="salary">salary</x-form-label>
          <div class="mt-2">
                 <x-form-input id="salary" type="salary" name="salary" placeholder="40000" />

         
<x-form-error name='salary'/>
   

          </div>
</x-form-field>        
</div>
{{-- <div class="mt-10">
@if ($errors->any()):
<ul>
@foreach ( $errors->all() as $err ):
<li class="text-red-500">
{{ $err }}
</li>  
@endforeach
</ul>
@endif</div> --}}
    </div>
  </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>

<x-form-button  >Save</x-form-button>
  </div>
</form>
  
  
  </x-layout>