<x-layout>

  <x-slot:heading>edit job: {{  $job->title}} 
    </x-slot:heading>
  
<form action="/jobs/{{ $job->id }}" method="POST">

@csrf
@method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
    
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-white">title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input  id="title" value="{{ $job->title }}" type="text" name="title" placeholder="PHP Dev" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required />
            </div>
  @error('title')
<p class="text-red-500">{{ $message }}</p>  
@enderror
          </div>
        </div>
  <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-white">salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input  id="salary" value="{{ $job->salary }}" type="salary" name="salary" placeholder="40000" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required />
        
            </div> 
             @error('salary')
<p class="text-red-500">{{ $message }}</p>  
@enderror

          </div>
        </div>
       
</div>

    </div>
  </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-white">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</button>
  </div>
</form>
  
  
  </x-layout>