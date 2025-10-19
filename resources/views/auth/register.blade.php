<x-layout>

  <x-slot:heading>Register
    </x-slot:heading>
  
<form action="/register" method="POST">

@csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
     
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
 <x-form-field> 
            
  <x-form-label  for='first_name'>first name</x-form-label>
          <div class="mt-2">
         
            <x-form-input id="first_name" type="text" name="first_name" placeholder="ahmed" />
       <x-form-error name='first_name'/>
          </div>
</x-form-field>

 <x-form-field> 
            
  <x-form-label  for='last_name'>last name</x-form-label>
          <div class="mt-2">
         
            <x-form-input id="last_name" type="text" name="last_name" placeholder="el kommi" />
       <x-form-error name='last_name'/>
          </div>
</x-form-field>

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

 <x-form-field>  
   <x-form-label for="password_confirmation">confirm password</x-form-label>
          <div class="mt-2">
                 <x-form-input id="password_confirmation" type="password" name="password_confirmation"  />

         
<x-form-error name='password_confirmation'/>
   

          </div>
</x-form-field>  
</div>

    </div>
  </div>
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/"  class="text-sm/6 font-semibold text-white">Cancel</a>

<x-form-button  >Register</x-form-button>
  </div>
</form>
  
  
  </x-layout>