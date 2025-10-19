 
 @props(['name'])
 @error('name')
<p {{ $attributes->merge(['class'=>'class="text-red-500"']) }} >{{ $message }}</p>  
@enderror