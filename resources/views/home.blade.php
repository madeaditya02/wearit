@extends('layouts.user')

@section('title')
    Home
@endsection

@section('head')
    <style>
        .swiper {
            width: 100%;
        }

        .swiper .swiper-pagination-bullet {
            background-color: transparent;
            border: 1px solid #fff;
            width: 12px;
            height: 12px;
        }

        .swiper .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="flex gap-6 justify-between px-10 md:px-28 pt-28 relative h-fit">
        <div class="w-full md:w-[40%]">
            <h1 class="font-rufina text-4xl sm:text-6xl text-primary-dark leading-tight mb-6">Discover and Find Your Own
                Fashion!</h1>
            <p class="sm:text-lg leading-snug mb-12">Explore our curated collection of stylish clothing and accessories
                tailored
                to
                your unique taste.</p>
            <a href="/product" class="px-12 py-4 uppercase bg-primary text-white sm:text-lg rounded">Explore Now</a>
        </div>
        <img src="/img/landing-page-2.png" alt=""
            class="hidden md:block w-[40%] h-[480px] object-cover object-top rounded-[36px]">
        <img src="/img/logo.png" alt="" class="opacity-10 absolute -z-10 top-0 -left-[200px] bottom-0 h-full">
    </div>

    {{-- <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div> --}}

    <div class="my-28 bg-primary swiper mySwiper" x-data="discounts">
        <div class="swiper-wrapper bg-transparent">
            <template x-for="diskon in discounts">
                <div
                    class="flex gap-x-20 gap-y-5 justify-between swiper-slide !bg-transparent p-10 pb-16 md:px-36 md:py-12 flex-col md:flex-row">
                    <img :src="diskon.produk.gambar_produk" alt=""
                        class="h-[300px] md:h-[400px] w-full md:w-[40%] object-cover hidden md:block">
                    <div class="pt-3 sm:pr-10 text-left">
                        <h2 class="text-white text-3xl font-roboto-slab">Exclusive offer</h2>
                        <p class="text-white leading-normal text-xl mt-5">
                            Unlock the ultimate style upgrade with our exclusive offer Enjoy savings of up to
                            <span class="font-semibold" x-text="`${diskon.jumlah_diskon}%`"></span> off on our <span
                                class="font-semibold" x-text="diskon.produk.nama_produk"></span>
                        </p>
                        <div class="mt-10 mb-14 flex gap-4 sm:gap-9">
                            <div class="bg-white flex flex-col justify-center items-center w-24 h-24 text-primary rounded">
                                <h3 class="text-2xl sm:text-3xl font-semibold" x-text="diskon.days">0</h3>
                                <p class="sm:text-lg">Days</p>
                            </div>
                            <div class="bg-white flex flex-col justify-center items-center w-24 h-24 text-primary rounded">
                                <h3 class="text-2xl sm:text-3xl font-semibold" x-text="diskon.hours">0</h3>
                                <p class="sm:text-lg">Hours</p>
                            </div>
                            <div class="bg-white flex flex-col justify-center items-center w-24 h-24 text-primary rounded">
                                <h3 class="text-2xl sm:text-3xl font-semibold" x-text="diskon.mins">0</h3>
                                <p class="sm:text-lg">Min</p>
                            </div>
                        </div>
                        <a :href="`/product/${diskon.produk.id_produk}`"
                            class="px-12 py-4 uppercase bg-white text-primary text-lg rounded font-medium">
                            Buy Now
                        </a>
                    </div>
                </div>
            </template>
        </div>
        <div class="swiper-button-prev ml-5 text-white hidden md:block"></div>
        <div class="swiper-button-next mr-5 text-white hidden md:block"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="px-8 sm:px-16 lg:px-52 grid grid-cols-4 gap-x-9 gap-y-12">
        <h2 class="col-span-4 text-4xl text-center font-rufina font-medium mb-4">Our Best Seller</h2>
        @foreach ($products as $produk)
            <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                <a href="/product/{{ $produk->id_produk }}">
                    <img src="{{ $produk->gambar_produk }}" alt="" class="w-full mb-5 h-[280px] object-cover">
                </a>
                <h4 class="font-semibold text-center mb-1">{{ $produk->nama_produk }}</h4>
                <div class="flex gap-5 font-medium items-stretch justify-center">
                    <div>{{ Number::currency($produk->harga_produk, 'IDR', 'id') }}</div>
                    {{-- <div class="w-px bg-black"></div>
                    <div class="flex items-center gap-1">
                        <span>5.0</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 text-yellow-300">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div> --}}
                </div>
            </div>
        @endforeach
        <div class="col-span-4 text-center">
            <a href="/product" class="px-9 py-2 inline-flex items-center gap-2 border border-black">
                <span>See all</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
    <div class="my-16 md:m-20 bg-primary px-10 md:px-16 py-12 md:py-16 grid grid-cols-4 gap-6">
        <h2 class="col-span-4 text-4xl text-center font-rufina font-medium mb-4 text-white">Our Key Features</h2>
        <div class="col-span-4 sm:col-span-2 md:col-span-1 bg-white rounded-xl text-center px-6 py-4">
            <h3 class="text-2xl font-semibold font-rufina border-b-2 border-primary pb-2 uppercase">Trendy</h3>
            <p class="mt-5 text-lg font-medium">Trendy Choices for Every Occasion</p>
        </div>
        <div class="col-span-4 sm:col-span-2 md:col-span-1 bg-white rounded-xl text-center px-6 py-4">
            <h3 class="text-2xl font-semibold font-rufina border-b-2 border-primary pb-2 uppercase">EASY</h3>
            <p class="mt-5 text-lg font-medium">Easy Online Shopping Experience</p>
        </div>
        <div class="col-span-4 sm:col-span-2 md:col-span-1 bg-white rounded-xl text-center px-6 py-4">
            <h3 class="text-2xl font-semibold font-rufina border-b-2 border-primary pb-2 uppercase">CONNECTING</h3>
            <p class="mt-5 text-lg font-medium">Connecting You to the World, Worldwide Shipping</p>
        </div>
        <div class="col-span-4 sm:col-span-2 md:col-span-1 bg-white rounded-xl text-center px-6 py-4">
            <h3 class="text-2xl font-semibold font-rufina border-b-2 border-primary pb-2 uppercase">LOWEST PRICE</h3>
            <p class="mt-5 text-lg font-medium">Lowest Prices Guaranteed, Big Discounts, Bigger Savings</p>
        </div>
    </div>
    <div class="mt-16 py-16 px-8 sm:px-12 lg:px-24 bg-primary text-white grid grid-cols-12 gap-y-8">
        <div class="col-span-12 lg:col-span-4">
            <h1 class="text-6xl font-rufina mb-1">WearIt</h1>
            <p class="text-lg">Social Media</p>
            <div class="flex gap-4 items-center mt-6">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-7 fill-white">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-7 fill-white">
                        <path
                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-7 fill-white">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-2 text-lg flex flex-col gap-4">
            <h3 class="uppercase text-xl mb-2">Shop</h3>
            <a href="#" class="inline-block">Products</a>
            <a href="#" class="inline-block">Overview</a>
            <a href="#" class="inline-block">Pricing</a>
            <a href="#" class="inline-block">Releases</a>
        </div>
        <div class="col-span-12 lg:col-span-2 text-lg flex flex-col gap-4">
            <h3 class="uppercase text-xl mb-2">Company</h3>
            <a href="#" class="inline-block">About us</a>
            <a href="#" class="inline-block">Contact</a>
            <a href="#" class="inline-block">News</a>
            <a href="#" class="inline-block">Support</a>
        </div>
        <div class="col-span-12 lg:col-span-4">
            <h3 class="uppercase text-xl mb-7">Stay up to date</h3>
            <div class="flex max-w-full">
                <input type="text"
                    class="px-5 py-2 border border-white min-w-0 flex-grow bg-transparent rounded-sm text-white placeholder:text-white border-transparent focus-visible:outline-none focus-visible:ring-0"
                    placeholder="Enter your email">
                <button class="px-4 py-2 bg-white text-black">SUBMIT</button>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        const discounts = {!! json_encode($discounts) !!} ?? []
        document.addEventListener('alpine:init', () => {
            Alpine.data('discounts', () => ({
                discounts: discounts,
                init() {
                    setInterval(() => {
                        this.discounts = this.discounts.map(d => {
                            const dday = dayjs(d.waktu_akhir)
                            const now = dayjs()
                            // const dday = dayjs('2024-12-01')
                            const days = dday.diff(now, 'day');
                            const hours = dday.diff(now, 'hour') % 24;
                            const minutes = dday.diff(now, 'minute') % 60;
                            const seconds = dday.diff(now, 'seconds') % 60;
                            return {
                                ...d,
                                days: days <= 0 && hours <= 0 && minutes <= 0 ? 0 :
                                    days,
                                hours: days <= 0 && hours <= 0 && minutes <= 0 ? 0 :
                                    hours,
                                mins: days <= 0 && hours <= 0 && minutes <= 0 ? 0 :
                                    minutes,
                            }
                        })
                        console.log(this.discounts);
                    }, 1000);
                }
            }))
        })
    </script>
@endsection
