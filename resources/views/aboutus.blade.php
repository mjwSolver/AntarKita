{{-- Extending something --}}
@extends('layouts.app')


@section('container')

    <section class="p-12 h-[50vh] text-center relative bg-no-repeat bg-cover rounded-lg pt-32"
             {{-- style="background-image: url('images/singles/single3_sm.jpg'); height: 500px;"> --}}
             style="background-image: url('{{asset('images/singles/single5_sm.jpg')}}'); background-size: cover; background-position: top center">
        <div class="absolute inset-0 w-full h-full overflow-hidden bg-fixed"
             style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="flex justify-center items-center h-full">
                <div class="text-white">
                    <h2 class="font-semibold text-4xl mb-4 mt-10">Tentang AntarKita</h2>
                    <span class="font-normal text-lg mb-6">Mengenai AntarKita Photography</span>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-32 px-8 lg:px-16">
        <div class="mx-auto max-w-7xl">
            <h1 class="text-2xl font-bold">Apa itu AntarKita?</h1>
            <p class="text-lg">
                Apakah anda memerlukan fotografi dengan kualitas yang memuaskan? AntarKita adalah solusinya! AntarKita
                menyediakan berbagai macam jasa fotografi dengan budget yang beragam. Silakan lihat penawaran kami
                dibawah. Apabila anda tertarik dengan jasa kami, anda dapat mengontak AntarKita (Ilham) melalui tombol
                WhatsApp kami.
            </p>
        </div>
    </section>

@endsection
