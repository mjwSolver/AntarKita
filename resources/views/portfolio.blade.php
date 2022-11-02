@extends('layouts.app')

{{-- section something --}}

@section('container')

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

<section class="gap-8 space-y-8 columns-2 md:columns-4 lg:columns-4 xl:columns-5 p-8 pt-20 md:pt-28 lg:pt-30 xl:pt-32">

	@foreach ($photos as $photo)

	<figure class="relative cursor-pointer
		max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg
		">

		<img class="rounded-lg shadow-xl
			hover:shadow-2xl hover:scale-110
			transition ease-in-out delay-150 duration-300
			"
			src="/images/{{$photo['imagepath']}}" alt="prewed">
		<figcaption class="absolute px-3 py-1
			ml-4 -mt-16 rounded-lg backdrop-blur-sm
			text-lg text-zinc-50 bg-zinc-800/75">

		  <div class="font-sans font-medium">
			<h1>{{$photo['title']}}</h1>
		  </div>
		  {{-- <div> <span class="font-sans font-light">{{$photo['sub']}}</span> </div> --}}
		  </figcaption>
	  </figure>

	@endforeach

</section>
@endsection