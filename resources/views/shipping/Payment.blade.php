@extends('layouts.user')

@section('title', 'Payment')

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
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        >
    </span>

    <!-- Payment -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
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
            <div class="absolute w-[150px] h-[49px] left-[320px] top-[240px] flex justify-center items-center bg-[#002E89] rounded-[7px] p-[11px_27px]">
                <div class="w-[196px] h-[27px] ml-7 font-poppins font-semibold text-[18px] leading-[27px] text-white capitalize">
                    Buy
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tulisan back to cart -->
<div class="absolute w-[200px] h-[33px] left-1/2 -translate-x-[74px] top-[860px] font-poppins font-semibold text-[22px] leading-[33px] text-[#011F66] capitalize">
    Back To Shipping
</div>

<!-- Shipping Method -->
<div class="relative">
    <!-- Title -->
    <div class="absolute w-[193px] h-[38px] left-[78px] top-[200px] font-poppins text-[24px] leading-[37px] tracking-[-1.31461px] text-[#272727]">
        Payment Method
    </div>

    <!-- Frame Container 1 -->
    <div class="absolute w-[650px] h-[80px] left-[78px] top-[250px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            Credit Card
        </div>
        <!-- Dropdown Icon -->
            <div class="absolute right-[20px] top-[30px] cursor-pointer" onclick="toggleDropdown()">
            <!-- Arrow Down Icon -->
                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 15l-6-6h12l-6 6z" fill="#272727"/>
        </svg>
    </div>
    <!-- Dropdown Content -->
    <div id="dropdown-options" class="hidden w-full mt-[20px]">
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 1: PayPal
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 2: Bank Transfer
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 3: Other Method
        </div>
    </div>
    </div>
    

    <!-- Frame Container 2 -->
    <div class="absolute w-[650px] h-[80px] left-[78px] top-[350px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            Mobile Banking
        </div>
            <!-- Dropdown Icon -->
    <div class="absolute right-[20px] top-[30px] cursor-pointer" onclick="toggleDropdown()">
        <!-- Arrow Down Icon -->
        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 15l-6-6h12l-6 6z" fill="#272727"/>
        </svg>
    </div>
    <!-- Dropdown Content -->
    <div id="dropdown-options" class="hidden w-full mt-[20px]">
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 1: PayPal
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 2: Bank Transfer
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 3: Other Method
        </div>
    </div>
    </div>

        
        <div class="absolute w-[450px] h-[80px] left-[274px] top-[450px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            Bank BCA
        </div>
        </div>

        <div class="absolute w-[450px] h-[80px] left-[274px] top-[540px] border border-[#D9D9D9] rounded-[10px] bg-white opacity-100">
        <!-- Checkbox -->
        <div class="absolute w-[778px] h-[118px] left-[36px] top-[30px] flex items-start">
            <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"/>
        </div>
        <!-- JNE Text -->
        <div class="absolute left-[90px] top-[30px] w-[600px] h-[23px] text-[20.46px] leading-[23px] tracking-[-0.876923px] text-[#272727]">
            Bank BNI
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
            Qris
        </div>
            <!-- Dropdown Icon -->
    <div class="absolute right-[20px] top-[30px] cursor-pointer" onclick="toggleDropdown()">
        <!-- Arrow Down Icon -->
        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 15l-6-6h12l-6 6z" fill="#272727"/>
        </svg>
    </div>
    <!-- Dropdown Content -->
    <div id="dropdown-options" class="hidden w-full mt-[20px]">
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 1: PayPal
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 2: Bank Transfer
        </div>
        <div class="border-t border-[#D9D9D9] px-[20px] py-[10px] text-[#272727] cursor-pointer hover:bg-[#f9f9f9]">
            Option 3: Other Method
        </div>
    </div>
    </div>
</div>


@endsection