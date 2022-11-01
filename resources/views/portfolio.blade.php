{{-- Extending something --}}
@extends('layouts.app')

{{-- section something --}}

@section('container')
<section class="overflow-hidden text-gray-700">
	<div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
		<div class="flex flex-wrap -m-1 md:-m-2">
			<div class="flex flex-wrap w-1/2">
				<div class="w-1/2 p-1 md:p-2">
					<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
						src="images/picture2.png">
				</div>
				<div class="w-1/2 p-5 md:p-2">
					<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
						src="images/picture3.png">
				</div>
				<div class="w-full p-1 md:p-2">
					<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
						src="images/picture1.png">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection