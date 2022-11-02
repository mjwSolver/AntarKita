{{-- Extending something --}}
@extends('layouts.app')


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



<div
                    class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                            <span class="md:block">Apa itu AntarKita?</span>
                        
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">AntarKita
                            adalah jasa fotografi yang didirikan Oleh Ilham Risqi, bergerak di bidang fotografi
                            perusahaan, wedding, dll. "Momen Diabadikan" adalah motto kami, dimana kami akan
                            mengabadikan momen berharga anda dengan kualitas yang memuaskan</p>
                    </div>
</div>

<div
                    class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                            <span class="md:block">Apa yang disediakan oleh AntarKita?</span>
                        
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">AntarKita menyediakan berbagai macam jasa fotografi dengan budget yang beragam. Silakan lihat
                    penawaran
                    kami dibawah. Apabila anda tertarik dengan jasa kami, anda dapat mengontak AntarKita (Ilham) melalui
                    tombol WhatsApp kami.</p>
                    </div>
</div>

@endsection