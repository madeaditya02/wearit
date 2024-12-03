@extends('layouts.user')

@section('title', 'Shipping')

@section('content')

<div class="absolute w-[213px] h-[60px] left-[78px] top-[140px] font-poppins font-semibold text-[40px] leading-[60px] capitalize text-[#011F66]">
    Check Out
</div>

<div class="absolute w-[464px] h-[24px] left-[78px] top-[220px] flex items-center space-x-4">
    <!-- Address -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        Address
    </span>

    <!-- > -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        >
    </span>

    <!-- Shipping -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        Shipping
    </span>

    <!-- > -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        >
    </span>

    <!-- Payment -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        Payment
    </span>
</div>

<div class="relative">
    <!-- Order Summary -->
    <div class="absolute w-[376px] h-[434px] left-[1019px] top-[260px] flex flex-col items-center p-0 gap-[34px]">
        <!-- frame nya -->
        <div class="w-[376px] h-[351px] relative">
            <!-- Rectangle 75 -->
            <div class="absolute w-[376px] h-[351px] left-[200px] bottom-[40px] border-2 border-[#D9D9D9]"></div>

            <!-- Order Summary -->
            <div class="absolute w-[215px] h-[38px] left-[280px] bottom-[332px] font-poppins font-semibold text-[25px] leading-[38px] text-[#383838]">
                Order Summary
            </div>

            <!-- detail nya -->
            <div class="absolute w-[322px] left-[224px] top-[40px]">
                <!-- Price -->
                <div class="flex justify-between items-center w-full h-[26px] text-[#383838]">
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Price</div>
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Rp. 150.000,00</div>
                </div>

                <!-- Shipping -->
                <div class="flex justify-between items-center w-full h-[26px] mt-[20px] text-[#383838]">
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Shipping</div>
                    <div class="font-poppins font-medium text-[17px] leading-[26px] text-right">Free</div>
                </div>

                <!-- garis di detail nya -->
                <div class="absolute w-[320px] h-[2px] left-[2px] top-[96px] bg-[#D1D1D8]"></div>

                <!-- Quantity -->
                <div class="flex justify-between items-center w-full h-[26px] mt-[42px] text-[#383838]">
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Quantity</div>
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">1 Item</div>
                </div>

                <!-- Total -->
                <div class="flex justify-between items-center w-full h-[26px] mt-[20px] text-[#383838]">
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Total</div>
                    <div class="font-poppins font-medium text-[17px] leading-[26px]">Rp. 150.000,00</div>
                </div>
            </div>

            <!-- Tulisan kotak biru -->
            <div class="absolute w-[256px] h-[49px] left-[260px] top-[240px] flex justify-center items-center bg-[#002E89] rounded-[7px] p-[11px_27px]">
                <div class="w-[300px] h-[27px] font-poppins font-semibold text-[18px] leading-[27px] text-white capitalize">
                    Continue To Payment
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tulisan back to cart -->
<div class="absolute w-[200px] h-[33px] left-1/2 -translate-x-[74px] top-[860px] font-poppins font-semibold text-[22px] leading-[33px] text-[#011F66] capitalize">
    Back To Address
</div>

<!-- tabel konten -->
<div class="relative">
    <div class="absolute w-[910px] h-[178px] left-[78px] top-[200px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <div class="absolute w-[850px] h-0 left-[30px] top-[80px] border-[1.46154px] border-[#E8E8E8] rotate-[0.14deg]"></div>
        <!-- Content -->
        <div class="absolute left-[50px] top-[34px] w-[586.08px] h-[23.31px]">
            <!-- Contact -->
            <div class="absolute left-[-10px] top-0 w-[60px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#818181]">Name</div>
            <!-- Email -->
            <div class="absolute left-[110px] top-[0.31px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">Andi Sutedjo</div></div>
            <!-- Edit Button -->
            <!-- Content -->
            <div class="absolute left-[50px] top-[106px] w-[586.08px] h-[23.31px]">
            <!-- Contact -->
            <div class="absolute left-[-10px] top-0 w-[70px] h-[23px] text-[20.46px]  leading-[23px] tracking-[-0.876923px] text-[#818181]">Ship to</div>
            <!-- Email -->
            <div class="absolute left-[110px] top-[0.31px] w-[730px] h-[23px] text-[20.46px]  leading-[23px] tracking-[-0.876923px] text-[#272727]">Jalan Giri Kencono 29, Jimbaran, KEC. Kuta Selatan, KAB. Badung, Bali 80361 and other</div></div>
        </div>
    </div>
</div>

<!-- Shipping Method -->
<div class="relative">
    <!-- Title -->
    <div class="absolute w-[193px] h-[38px] left-[78px] top-[410px] font-poppins text-[24px] leading-[37px] tracking-[-1.31461px] text-[#272727]">
        Shipping Method
    </div>

    <!-- Frame Container 1 -->
    <div class="absolute w-[650px] h-[80px] left-[78px] top-[462px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            JNE
        </div>
        <!-- Free Button -->
        <div class="absolute right-[25px] top-[25px] font-medium text-[20.46px] text-[#011F66] cursor-pointer hover:text-[#001a4d] active:text-[#00153a]">
            Free
        </div>
    </div>

    <!-- Frame Container 2 -->
    <div class="absolute w-[650px] h-[80px] left-[78px] top-[550px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            JNT
        </div>
        <!-- Free Button -->
        <div class="absolute right-[25px] top-[25px] text-[20.46px] font-medium text-[#011F66] cursor-pointer hover:text-[#001a4d] active:text-[#00153a]">
            Free
        </div>
    </div>

    <!-- Frame Container 3 -->
    <div class="absolute w-[650px] h-[80px] left-[78px] top-[638px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            Standard Shipping
        </div>
        <!-- Free Button -->
        <div class="absolute right-[25px] top-[25px] text-[20.46px] font-medium text-[#011F66] cursor-pointer hover:text-[#001a4d] active:text-[#00153a]">
            Free
        </div>
    </div>
</div>

@endsection