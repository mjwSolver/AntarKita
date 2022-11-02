@extends('layouts.app')

{{-- section something --}}

@section('container')

{{-- @foreach ($collection as $item)
	
@endforeach --}}

<section class="p-12 h-[50vh] text-center relative bg-no-repeat bg-cover rounded-lg pt-32"
		{{-- style="background-image: url('images/singles/single3_sm.jpg'); height: 500px;"> --}}
		style="background-image: url('images/prewed/prewed6_sm.jpg');">
		<div class="absolute inset-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
			<div class="flex justify-center items-center h-full">
				<div class="text-white">
					<h2 class="font-semibold text-4xl mb-4 mt-10">Portfolio</h2>
					<span class="font-normal text-lg mb-6">Berikut adalah portfolio AntarKita</span>
				</div>
			</div>
		</div>
</section>

<section class="gap-8 space-y-8 columns-2 md:columns-3 lg:columns-4 p-8 pt-32">
	<figure class="relative max-w-xs sm:max-w-sm md:max-w-md cursor-pointer">
		<img class="rounded-lg shadow-xl hover:shadow-2xl"
			src="/images/prewed/prewed2_sm.jpg" alt="prewed">
		<figcaption class="absolute text-lg -mt-16 text-white w-full px-4 py-1 bg-zinc-800/50 rounded-lg backdrop-blur-sm">
		  <div class="font-sans font-medium">
			<h1>Portrait</h1>
		  </div>
		  <div> <span class="font-sans font-light">Sunny outside</span> </div>
		  </figcaption>
	  </figure>

	  <figure class="relative max-w-xs sm:max-w-sm md:max-w-md cursor-pointer">
		<img class="rounded-lg shadow-xl hover:shadow-2xl"
			src="/images/prewed/prewed2_sm.jpg" alt="prewed">
		<figcaption class="absolute text-lg -mt-16 text-white w-full px-4 py-1 bg-zinc-800/50 rounded-lg backdrop-blur-sm">
		  <div class="font-sans font-medium">
			<h1>Portrait</h1>
		  </div>
		  <div> <span class="font-sans font-light">Sunny outside</span> </div>
		  </figcaption>
	  </figure>

	  <figure class="relative max-w-xs sm:max-w-sm md:max-w-md cursor-pointer">
		<img class="rounded-lg shadow-xl hover:shadow-2xl"
			src="/images/prewed/prewed1_sm.jpg" alt="prewed">
		<figcaption class="absolute text-lg -mt-16 text-white w-full px-4 py-1 bg-zinc-800/50 rounded-lg backdrop-blur-sm">
		  <div class="font-sans font-medium">
			<h1>Portrait</h1>
		  </div>
		  <div> <span class="font-sans font-light">Sunny outside</span> </div>
		  </figcaption>
	  </figure>

	  <figure class="relative max-w-xs sm:max-w-sm md:max-w-md cursor-pointer">
		<img class="rounded-lg shadow-xl hover:shadow-2xl"
			src="/images/prewed/prewed1_sm.jpg" alt="prewed">
		<figcaption class="absolute text-lg -mt-16 text-white w-full px-4 py-1 bg-zinc-800/50 rounded-lg backdrop-blur-sm">
		  <div class="font-sans font-medium">
			<h1>Portrait</h1>
		  </div>
		  <div> <span class="font-sans font-light">Sunny outside</span> </div>
		  </figcaption>
	  </figure>
</section>
@endsection