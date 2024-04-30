@extends('layouts.index')

@section('content')
    <div class="w-full flex self-start mt-24 flex-col text-white bg-[#191919]">
        <div class="w-full flex flex-col container mx-auto bg-center bg-cover bg-no-repeat">
            <div class="w-full flex flex-col gap-y-3">
                <nav aria-label="Breadcrumb" class="py-2 px-4">
                    <ol class="flex items-center gap-1 text-sm text-gray-200">
                        <li>
                            <a href="/" class="block transition hover:text-gray-300">
                                <span class="sr-only"> Home </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </a>
                        </li>

                        <li class="rtl:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clipRule="evenodd" />
                            </svg>
                        </li>

                        <li>
                            <a href="/books" class="block transition hover:text-gray-300">
                                Books
                            </a>
                        </li>

                        <li class="rtl:rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clipRule="evenodd" />
                            </svg>
                        </li>

                        <li>
                            <a href="/books/f_id" class="block transition hover:text-gray-300">
                                Jujutsu Kaisen 13
                            </a>
                        </li>
                    </ol>
                </nav>
                <div class="w-full flex flex-col sm:flex-row sm:items-start gap-4">
                    <div class="w-full sm:w-2/6 flex justify-center sm:sticky sm:top-0">
                        <div class="p-8 aspect-square border flex items-center justify-center shadow-md">
                            <img src="{{ asset('/storage/book-image/default.jpg') }}" alt="tse"
                                class="object-cover w-full max-w-64 aspect-[6/9] shadow-book" />
                        </div>
                    </div>
                    <div class="w-full sm:w-4/6 flex flex-col px-4 py-2 gap-1">
                        <div class="w-full flex flex-col gap-1 py-4">
                            <h2 class="font-extralight text-gray-400 text-base">Gege Akutami</h2>
                            <h2 class="font-normal text-2xl">Jujutsu Kaisen 13</h2>
                        </div>
                        <Divider />
                        <div class="w-full flex flex-col gap-8 pt-2">
                            <div class="w-full flex flex-col gap-1 py-2">
                                <span class="font-bold">Deskripsi Buku</span>
                                <div class="w-full text-sm text-justify flex flex-col gap-4 leading-6">
                                    <div>
                                        Dagon berubah menjadi jurei yang menakutkan! Serangan energi kutukan yang tak ada
                                        habisnya pun membanjiri Naobito, Maki, dan Nanami. Di sisi lain, sekelompok jusoshi
                                        yang mengabdikan diri pada Geto berusaha untuk
                                        mendapatkan kembali tubuh Geto dengan membangkitkan sosok yang paling keji.
                                    </div>
                                    <div>
                                        Selling Point: Serial populer di Jepang (dari majalah Shounen Jump, di mana
                                        judul-judulnya hampir semua jadi Best Seller di Jepang dan Internasional). Action
                                        seru dan cerita epik. Anime-nya tayang (di Jepang) Oktober
                                        2020. Selalu masuk 10 besar Weekly Oricon. Movie-nya pun laris manis di bioskop
                                        bukan hanya Jepang, tapi juga Indonesia (tayang di bioskop Indonesia 16 maret 2022).
                                        Anime season 2-nya juga tayang di 2023.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-col gap-4 py-2">
                                <span class="font-bold">Detail</span>
                                <div class="w-full grid grid-cols-2 gap-4">
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-xs font-base text-gray-200">Jenis Buku</span>
                                        <span class="text-sm">Komik</span>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-xs font-base text-gray-200">Penerbit</span>
                                        <span class="text-sm">Elex Media Komputindo</span>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-xs font-base text-gray-200">Tanggal Terbit</span>
                                        <span class="text-sm">7 Jan 2014</span>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-xs font-base text-gray-200">Penulis</span>
                                        <span class="text-sm">Gege Akutami</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
