@extends('layouts.user')

@section('title', 'Address')

@section('head')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-QHVsn5vGeEKhmkji"></script>
@endsection

@section('content')
    <div x-data="checkout">
        <div class="flex flex-col space-y-2 px-6 ml-12">
            <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Checkout</h1>
            <div class="flex items-center space-x-4 text-xl font-poppins font-medium mt-8">
                <button x-on:click="setState('address')">Address</button>
                <span :class="state == 'shipping' || state == 'payment' ? 'text-black' : 'text-gray-400'">&gt;</span>
                <button x-on:click="setState('shipping')"
                    :class="state == 'shipping' || state == 'payment' ? 'text-black' : 'text-gray-400'">Shipping</button>
                <span :class="state == 'payment' ? 'text-black' : 'text-gray-400'">&gt;</span>
                <button x-on:click="setState('payment')"
                    :class="state == 'payment' ? 'text-black' : 'text-gray-400'">Payment</button>
            </div>
        </div>

        <form class="flex justify-between mt-8 mb-8 ml-20 mr-20 gap-6 items-start address-form">
            <!-- Address Section -->
            <template x-if="state == 'address'">
                <div class="w-[65%] space-y-6 section" data-section="address">
                    @foreach ($addresses as $i => $address)
                        <!-- alamat pertama -->
                        <div class="flex items-start gap-6">
                            <input type="radio" id="address-{{ $i }}" name="address"
                                value="{{ $address->id_alamat }}"
                                :checked="selectedAddress?.id_alamat == {{ $address->id_alamat }}"
                                class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800 mt-1.5">
                            <div class="flex flex-col gap-4">
                                <label for="address-{{ $i }}"
                                    class="font-poppins text-2xl capitalize cursor-pointer">{{ $address->nama_alamat }}</label>
                                <span class="font-poppins text-lg capitalize">{{ $address->alamat_lengkap }}</span>
                                {{-- <span class="font-poppins text-lg capitalize">Contact - 0815555444</span> --}}
                            </div>
                            {{-- <div class="ml-auto flex gap-4 text-lg font-poppins">
                                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                                <span class="text-gray-400">|</span>
                                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
                            </div> --}}
                        </div>
                    @endforeach
                    <div class="w-full max-w-[900px] h-px bg-gray-300"></div>

                    <!-- icon + add new address -->
                    {{-- <div class="flex justify-start gap-3">
                        <!-- Plus Icon Button -->
                        <button type="button"
                            class="w-8 h-8 flex items-center justify-center bg-blue-800 text-white text-3xl font-bold rounded-full hover:bg-blue-700 focus:outline-none">
                            <span>+</span>
                        </button>
                        <!-- Text 'Add New Address' -->
                        <span class="text-lg text-blue-800">Add New Address</span>
                    </div> --}}

                    <!-- Back to Cart -->
                    <a href="/cart"
                        class="font-poppins font-semibold text-2xl text-blue-900 capitalize inline-block mt-6">Back To
                        Cart</a>
                </div>
            </template>
            <template x-if="state == 'shipping'">
                <div class="w-[65%] section" data-section="shipping">
                    <!-- Tabel Konten -->
                    <div class="border border-gray-300 rounded-[10px] bg-white p-6">
                        <!-- Content -->
                        <div class="space-y-6">
                            <!-- Name -->
                            <div class="flex justify-between items-center text-xl">
                                <div class="flex items-center">
                                    <span class="text-gray-400">Tujuan</span>
                                    <span class="text-gray-800 ml-8" x-text="selectedAddress.nama_alamat">Andi
                                        Sutedjo</span>
                                </div>
                                <button type="button" x-on:click="setState('address')"
                                    class="text-blue-500 text-[16px] font-medium ml-auto mr-10 hover:text-blue-700">Edit</button>
                            </div>
                            <hr class="my-5">
                            <!-- Address -->
                            <div class="flex justify-between items-center text-xl leading-[23px]">
                                <div class="flex items-center">
                                    <span class="text-gray-400">Alamat</span>
                                    <span class="text-gray-800 ml-8" x-text="selectedAddress.alamat_lengkap">Jalan Giri
                                        Kencono
                                        29, Jimbaran, KEC. Kuta Selatan, KAB.
                                        Badung, Bali 80361 and other</span>
                                </div>
                                <button type="button" x-on:click="setState('address')"
                                    class="text-blue-500 text-[16px] font-medium ml-20 mr-10 hover:text-blue-700">Edit</button>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping method -->
                    <div class="mt-5">
                        <div class="font-poppins text-xl text-gray-800 mb-6">Shipping Method</div>

                        <label for="jne"
                            class="w-full py-5 border border-gray-300 cursor-pointer rounded-lg bg-white mb-4 flex items-center px-5">
                            <input type="radio" name="shipping" value="jne" id="jne" x-on:input="changeCourier"
                                class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                            <div class="text-lg text-gray-800 flex-1">JNE</div>
                            {{-- <span
                                class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span> --}}
                        </label>

                        <label for="pos"
                            class="w-full py-5 border border-gray-300 cursor-pointer rounded-lg bg-white mb-4 flex items-center px-5">
                            <input type="radio" name="shipping" value="pos" id="pos" x-on:input="changeCourier"
                                class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                            <div class="text-lg text-gray-800 flex-1">POS Indonesia</div>
                            {{-- <span
                                class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span> --}}
                        </label>

                        <label for="tiki"
                            class="w-full py-5 border border-gray-300 cursor-pointer rounded-lg bg-white mb-4 flex items-center px-5">
                            <input type="radio" name="shipping" value="tiki" id="tiki" x-on:input="changeCourier"
                                class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                            <div class="text-lg text-gray-800 flex-1">TIKI</div>
                            {{-- <span
                                class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span> --}}
                        </label>
                    </div>
                    <!-- Back to Address Button -->
                    <button class="flex justify-center items-center text-primary font-semibold capitalize my-3">
                        Back To Address
                    </button>
                </div>
            </template>

            <template x-if="state == 'payment'">
                <div class="w-[65%] section" data-section="shipping">
                    <h2 class="text-4xl font-semibold">Processing Payment...</h2>
                </div>
            </template>

            <!-- Order Summary Section -->
            <div class="w-[376px] border-2 border-gray-300 p-6 space-y-6">
                <p class="text-xl font-semibold font-poppins text-center capitalize">Order Summary</p>
                <div class="flex justify-between text-lg font-medium font-poppins">
                    <p>Price</p>
                    <p x-text="formatter.format(estimated_total)">Rp. 150.000,00</p>
                </div>
                <template x-if="discounts.length">
                    <div class="flex justify-between text-lg font-medium font-poppins">
                        <p>Discount</p>
                        <div>
                            <template x-for="discount in discounts">
                                <p class="mb-1 last:mb-0" x-text="`${discount.jumlah_diskon}%`"></p>
                            </template>
                        </div>
                    </div>
                </template>
                <div class="flex justify-between text-lg font-medium font-poppins">
                    <p>Shipping</p>
                    <template x-if="!loadingOngkir">
                        <p x-text="formatter.format(ongkir[selectedCourier] ?? 0)"></p>
                    </template>
                    <template x-if="loadingOngkir" class="animate-spin">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="block size-6 animate-spin">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </template>
                </div>
                <div class="flex justify-between text-lg font-medium font-poppins">
                    <p>Quantity</p>
                    <p x-text="cart.length + ' Item'">1 Item</p>
                </div>
                <div class="flex justify-between text-lg font-medium font-poppins border-t pt-4">
                    <p>Total</p>
                    <p x-text="formatter.format(total_harga)">Rp. 150.000,00</p>
                </div>
                <button type="button" x-on:click="submitNext"
                    class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg"
                    x-text="`${state == 'address' ? 'Continue To Shipping' : 'Process Payment'}`">Continue
                    To
                    Shipping</button>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        })
        const addresses = {!! json_encode($addresses) !!} ?? []
        const cart = {!! json_encode($cart) !!} ?? []
        const estimasi_total = {!! json_encode($estimasi_total) !!} ?? []
        const discounts = {!! json_encode($discounts) !!} ?? []
        const total_harga = {!! json_encode($total_harga) !!} ?? []
        console.log(addresses);
        document.addEventListener('alpine:init', () => {
            Alpine.data('checkout', () => ({
                state: 'address',
                selectedAddress: null,
                ongkir: {
                    jne: null,
                    pos: null,
                    tiki: null,
                },
                cart: cart,
                estimated_total: estimasi_total,
                total_harga: total_harga,
                discounts: discounts,
                loadingOngkir: false,
                selectedCourier: null,
                async setState(state) {
                    if (state == 'shipping') {
                        const formData = new FormData(document.querySelector('.address-form'))
                        const selected = addresses.filter(a => a.id_alamat == formData.get(
                            'address'))
                        this.selectedAddress = selected ? selected[0] : null
                        if (this.selectedAddress)
                            this.state = state
                    } else if (state == 'payment') {
                        if (!(this.selectedAddress && this.selectedCourier && !this.loadingOngkir))
                            return
                        this.state = state
                        const formData = new FormData()
                        formData.append('total_harga', this.total_harga)
                        const res = await fetch('/api/midtrans-token', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            }
                        })
                        const token = await res.json()
                        const id_alamat = this.selectedAddress.id_alamat
                        const ongkir = this.ongkir[this.selectedCourier]
                        const kurir = this.selectedCourier
                        window.snap.pay(token.token, {
                            onSuccess: async function(result) {
                                console.log(id_alamat);
                                Swal.fire({
                                    title: "Transaction",
                                    text: "Completing the transaction process.",
                                    icon: "info",
                                    allowOutsideClick: false
                                }).then((result) => {
                                    window.location.href = "/"
                                });
                                Swal.showLoading()
                                const formData = new FormData()
                                formData.append('id_alamat', id_alamat)
                                formData.append('courier', kurir)
                                formData.append('ongkir', ongkir)
                                await fetch('/api/new-transaction', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                    }
                                })
                                Swal.update({
                                    title: "Success",
                                    text: "Transaction success.",
                                    icon: "success",
                                    allowOutsideClick: false
                                })
                                Swal.hideLoading()
                                // Swal.fire({
                                //     title: "Berhasil",
                                //     text: "Pembayaran berhasil dilakukan.",
                                //     icon: "success",
                                // }).then((result) => {
                                //     window.location.href = "/"
                                // });
                            },
                            onPending: function() {
                                alert("payment pending!");
                            },
                            onError: function(result) {
                                /* You may add your own implementation here */
                                alert("payment failed!");
                                console.log(result);
                            },
                            onClose: function() {
                                /* You may add your own implementation here */
                                alert(
                                    'you closed the popup without finishing the payment'
                                );
                            }
                        });
                    } else {
                        this.state = state
                    }
                },
                async submitNext(event) {
                    // event.preventDefault()
                    if (this.state == 'address') {
                        this.setState('shipping')
                        // this.getCost()
                    } else if (this.state == 'shipping' || this.state == 'payment') {
                        this.setState('payment')
                        // this.state = 'payment'
                        // const formData = new FormData()
                        // formData.append('total_harga', this.total_harga)
                        // const res = await fetch('/api/midtrans-token', {
                        //     method: 'POST',
                        //     body: formData,
                        //     headers: {
                        //         'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        //     }
                        // })
                        // const token = await res.json()
                        // const id_alamat = this.selectedAddress.id_alamat
                        // window.snap.pay(token.token, {
                        //     onSuccess: async function(result) {
                        //         console.log(id_alamat);

                        //         const formData = new FormData()
                        //         formData.append('id_alamat', id_alamat)
                        //         await fetch('/api/new-transaction', {
                        //             method: 'POST',
                        //             body: formData,
                        //             headers: {
                        //                 'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        //             }
                        //         })
                        //         Swal.fire({
                        //             title: "Berhasil",
                        //             text: "Pembayaran berhasil dilakukan.",
                        //             icon: "success",
                        //         }).then((result) => {
                        //             window.location.href = "/"
                        //         });
                        //     },
                        //     onPending: function() {
                        //         alert("payment pending!");
                        //     },
                        //     onError: function(result) {
                        //         /* You may add your own implementation here */
                        //         alert("payment failed!");
                        //         console.log(result);
                        //     },
                        //     onClose: function() {
                        //         /* You may add your own implementation here */
                        //         alert(
                        //             'you closed the popup without finishing the payment'
                        //         );
                        //     }
                        // });
                    }
                },
                changeCourier(event) {
                    this.selectedCourier = event.target.value
                    this.getCost(this.selectedCourier)
                },
                async getCost(courier) {
                    // this.total_harga = this.total_harga
                    console.log(this.selectedAddress.regency_id);

                    if (!this.ongkir[courier]) {
                        this.loadingOngkir = true
                        const res = await fetch('/api/cekongkir?' + new URLSearchParams({
                            origin: 114,
                            destination: this.selectedAddress.regency_id,
                            weight: 500,
                            courier
                        }))
                        const ongkir = await res.json()
                        console.log(ongkir);
                        if (courier == 'jne' || courier == 'tiki') {
                            this.ongkir[courier] = ongkir.filter(o => o.service ==
                                'REG' || o.service == 'CTC')[0].cost[0].value
                        } else {
                            this.ongkir[courier] = ongkir.filter(o => o.service ==
                                'Pos Reguler')[0].cost[0].value
                        }
                        this.loadingOngkir = false
                    }
                    this.total_harga += this.ongkir[courier]
                }
            }))
        })
    </script>
@endsection
