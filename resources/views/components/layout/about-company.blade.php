
<div class="bg-[#F5F5F5]">
    <div class="custom-block pt-8">

        <div class="flex justify-between w-full max-sm:block ">

            <div class="w-[40%] p-6 max-xl:w-auto max-xl:w-min[500px] max-lg:w-min[450px] max-sm:w-full  max-sm:w-min[450px]  max-sm:p-0">
                <div class="relative">
                    <div
                        class="z-2 top-11 -left-28 absolute w-[197px] h-[197px] bg-cover border-solid border-[11px] border-white max-lg:-left-10 max-sm:-left-0"
                        style="background-image: url({{ Storage::url('images/home/k2.jpg') }})"></div>

                    <div class="relative z-1 w-[440px] h-[440px] bg-cover border-solid border-[11px] border-white max-lg:w-[340px] max-lg:h-[340px]  max-sm:h-[440px] max-sm:w-[90%] max-sm:left-9"
                         style="background-image: url({{ Storage::url('images/home/k1.jpg') }})"></div>

                    <div class="z-0 bottom-15 -left-27 absolute w-[126px] h-[82px] bg-cover max-lg:bottom-10 max-sm:bottom-15  max-sm:left-0"
                         style="background-image: url({{ Storage::url('images/home/wafe.png') }})"></div>
                </div>


            </div>
            <div class="w-[60%] p-6 max-xl:w-full  max-sm:w-full max-sm:pb-0!">

                <h1 class="h1-rubik pb-0  text-3xl/12 text-[#02356A] max-lg:text-2xl">{{ $d_title }}</h1>

                <div class="pt-3 font-segoe text-[#3BA3D0] text-lg">  {{ $d_subtitle }}</div>


                <div class="custom-desc py-2 relative">
                    {!!  $d_desc1 !!}
                  <div class="hidden md:max-lg:block font-segoe text-[#3BA3D0] cursor-pointer c_click__js"><span>Подробнее...</span></div>
                    <div class="max-lg:hidden max-sm:block c_copy__js">
                        {!!  $d_desc2 !!}
                    </div>
                </div>


            </div>


        </div>
        <div class="c_paste__js custom-desc pl-6 pr-6 pb-6"></div>


    </div>
</div>
