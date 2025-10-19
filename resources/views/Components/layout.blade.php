<!DOCTYPE html>
    <html  lang="en" class="h-full bg-gray-900">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$heading}}</title>
  <script src="https://cdn.tailwindcss.com" ></script>

</head>

  <body class="h-full">
  
<div class="min-h-full">
  <nav class="bg-gray-800/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
  <x-navLink   href="/"  :active="request()->is('/')" >Home</x-navLink>
              <x-navLink href="/jobs" :active="request()->is('jobs')" >Jobs</x-navLink>
              <x-navLink href="/contact" :active="request()->is('contact')"  >Contact</x-navLink>
                          <x-navLink href="/contact"  :active="request()->is('contact')"  >Contact</x-navLink>

            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
           
@guest
      <x-navLink href='/login' :active="request()->is('login')">Log in</x-navLink>
                                         <x-navLink href='/register' :active="request()->is('register')">Register</x-navLink>

@endguest         
@auth
<form class="text-white inline-block rounded bg-red-500 w-fit px-3 py-2" action="/logout" method="POST">
         @csrf
  <button type="submit" >Log out</button>

</form>

@endauth 
          </div>
        </div>
   
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
     <x-navLink   href="/"  :active="request()->is('/')" >Home</x-navLink>
              <x-navLink href="/jobs" :active="request()->is('jobs')" >Jobs</x-navLink>
              <x-navLink href="/contact"  :active="request()->is('contact')"  >Contact</x-navLink>
                                     <x-navLink href="/jobs/create"  :active="request()->is('jobs/create')"  >create</x-navLink>
@guest
      <x-navLink href='/login' :active="request()->is('login')">Log in</x-navLink>
                                         <x-navLink href='/register' :active="request()->is('register')">Register</x-navLink>

@endguest
@auth
<form class="text-white inline-block rounded bg-red-500 w-fit px-3 py-2" action="/logout" method="POST">
         
  @csrf
  <button type="submit" >Log out</button>

</form>

@endauth 
                                     
            </div>


   
    </el-disclosure>
    
  </nav>

  <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-white">{{$heading}}
</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto text-white max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
{{$slot}}
    </div>
  </main>
</div>
</body>
</html>