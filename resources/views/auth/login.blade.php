<x-layout>

  <x-slot:heading>Log in
    </x-slot:heading>
  
<form action="/login" method="POST">

@csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Create New Job</h2>
      <p class="mt-1 text-sm/6 text-gray-400">We just need handful of details from you .</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


 <x-form-field> 
            
  <x-form-label  for='email'>email</x-form-label>
          <div class="mt-2">
         
            <x-form-input id="email" type="email" name="email" placeholder="ahmedelkom@gmail.com" />
       <x-form-error name='email'/>
          </div>
</x-form-field>

 <x-form-field>  
   <x-form-label for="password">password</x-form-label>
          <div class="mt-2">
                 <x-form-input id="password" type="password" name="password"  />

         
<x-form-error name='password'/>
   

          </div>
</x-form-field>   

  
</div>

    </div>
  </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/"  class="text-sm/6 font-semibold text-white">Cancel</a>

<x-form-button  >Log in</x-form-button>
  </div>
</form>
  
  
  </x-layout>