@extends('layouts.user')

@section('title', 'Address')

@section('content')
    <div class="flex flex-col space-y-2 p-6 ml-12">
        <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Checkout</h1>
        <div class="flex items-center space-x-4 text-xl font-poppins font-medium mt-8">
            <span>Address</span>
            <span class="text-gray-400">&gt;</span>
            <span class="text-gray-400">Shipping</span>
            <span class="text-gray-400">&gt;</span>
            <span class="text-gray-400">Payment</span>
        </div>
    </div>

    <form class="flex justify-between mt-8 mb-8 ml-20 mr-20 gap-6 items-start address-form">
        <!-- Address Section -->
        <div class="w-[65%] space-y-6 section" data-section="address">
            @foreach ($addresses as $i => $address)
                <!-- alamat pertama -->
                <div class="flex items-start gap-6">
                    <input type="radio" id="address-{{ $i }}" name="address" value="{{ $address->id_alamat }}"
                        class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
                    <div class="flex flex-col gap-4">
                        <label for="address-{{ $i }}"
                            class="font-poppins text-2xl capitalize cursor-pointer">{{ $address->nama_alamat }}</label>
                        <span class="font-poppins text-lg capitalize">{{ $address->alamat_lengkap }}</span>
                        {{-- <span class="font-poppins text-lg capitalize">Contact - 0815555444</span> --}}
                    </div>
                    <div class="ml-auto flex gap-4 text-lg font-poppins">
                        <span class="cursor-pointer hover:text-blue-800">Edit</span>
                        <span class="text-gray-400">|</span>
                        <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
                    </div>
                </div>
            @endforeach
            <div class="w-full max-w-[900px] h-px bg-gray-300"></div>

            <!-- icon + add new address -->
            <div class="flex justify-start gap-3">
                <!-- Plus Icon Button -->
                <button type="button"
                    class="w-8 h-8 flex items-center justify-center bg-blue-800 text-white text-3xl font-bold rounded-full hover:bg-blue-700 focus:outline-none">
                    <span>+</span>
                </button>
                <!-- Text 'Add New Address' -->
                <span class="text-lg text-blue-800">Add New Address</span>
            </div>

            <!-- Back to Cart -->
            <button type="button" class="font-poppins font-semibold text-2xl text-blue-900 capitalize">Back To
                Cart</button>
        </div>

        <div class="w-[65%] section" data-section="shipping">
            <!-- Tabel Konten -->
            <div class="border border-gray-300 rounded-[10px] bg-white p-6">
                <!-- Content -->
                <div class="space-y-6">
                    <!-- Name -->
                    <div class="flex justify-between items-center text-xl">
                        <span class="text-gray-400">Name</span>
                        <span class="text-gray-800 ml-8">Andi Sutedjo</span>
                        <button
                            class="text-blue-500 text-[16px] font-medium ml-auto mr-10 hover:text-blue-700">Edit</button>
                    </div>
                    <hr class="my-5">
                    <!-- Address -->
                    <div class="flex justify-between items-center text-xl leading-[23px]">
                        <span class="text-gray-400">Ship to</span>
                        <span class="text-gray-800 ml-8">Jalan Giri Kencono 29, Jimbaran, KEC. Kuta Selatan, KAB.
                            Badung, Bali 80361 and other</span>
                        <button class="text-blue-500 text-[16px] font-medium ml-20 mr-10 hover:text-blue-700">Edit</button>
                    </div>
                </div>
            </div>
            <!-- Shipping method -->
            <div class="mt-5">
                <div class="font-poppins text-xl text-gray-800 mb-6">Shipping Method</div>

                <div class="w-full py-5 border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-5">
                    <input type="radio" name="shipping"
                        class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                    <div class="text-lg text-gray-800 flex-1">JNE</div>
                    <span
                        class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
                </div>

                <div class="w-full py-5 border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-5">
                    <input type="radio" name="shipping"
                        class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                    <div class="text-lg text-gray-800 flex-1">JNT</div>
                    <span
                        class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
                </div>

                <div class="w-full py-5 border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-5">
                    <input type="radio" name="shipping"
                        class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4" />
                    <div class="text-lg text-gray-800 flex-1">Standard Shipping</div>
                    <span
                        class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
                </div>
            </div>
            <!-- Back to Address Button -->
            <button class="flex justify-center items-center text-primary font-semibold capitalize my-3">
                Back To Address
            </button>
        </div>

        <!-- Order Summary Section -->
        <div class="w-[376px] border-2 border-gray-300 p-6 space-y-6">
            <p class="text-xl font-semibold font-poppins text-center capitalize">Order Summary</p>
            <div class="flex justify-between text-lg font-medium font-poppins">
                <p>Price</p>
                <p>Rp. 150.000,00</p>
            </div>
            <div class="flex justify-between text-lg font-medium font-poppins">
                <p>Shipping</p>
                <p class="shipping-cost">-</p>
            </div>
            <div class="flex justify-between text-lg font-medium font-poppins">
                <p>Quantity</p>
                <p>1 Item</p>
            </div>
            <div class="flex justify-between text-lg font-medium font-poppins border-t pt-4">
                <p>Total</p>
                <p>Rp. 150.000,00</p>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Continue To
                Shipping</button>
        </div>
    </form>
@endsection

@section('javascript')
    <script>
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        })
        const addresses = {!! json_encode($addresses) !!} ?? []
        console.log(addresses);
        // const addressSection = document.querySelector('.address-section')
        // const shippingSection = document.querySelector('.shipping-section')
        const data = {
            state: 'address',
            selectedAddress: null,
            ongkir: null
        }
        const data_handler = {
            set(target, prop, receiver) {
                if (prop == 'state') {
                    document.querySelectorAll('.section').forEach(section => {
                        console.log(section.getAttribute('data-section') != receiver);

                        section.classList.toggle('hidden', section.getAttribute('data-section') != receiver)
                    })
                    // if (receiver == 'address') {}
                } else if (prop == 'ongkir')
                    document.querySelector('.shipping-cost').innerHTML = `${formatter.format(receiver)}`
                return Reflect.set(target, prop, receiver)
            }
        }
        const checkout_data = new Proxy(data, data_handler)

        checkout_data.state = 'address'

        async function submitAddress(event) {
            event.preventDefault()
            const formData = new FormData(event.target)
            const selected = addresses.filter(a => a.id_alamat == formData.get('address'))
            checkout_data.selectedAddress = selected ? selected[0] : null
            checkout_data.state = 'shipping'
            console.log(selected);
            const res = await fetch('/api/cekongkir?' + new URLSearchParams({
                origin: 114,
                destination: checkout_data.selectedAddress.regency_id,
                weight: 500,
                courier: 'jne'
            }))
            const ongkir = await res.json()
            console.log(ongkir);
            checkout_data.ongkir = ongkir.cost[0].value
        }
        document.querySelector('.address-form').addEventListener('submit', submitAddress);
    </script>
@endsection
