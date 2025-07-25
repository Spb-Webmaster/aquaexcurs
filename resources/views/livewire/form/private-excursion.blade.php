<div class="livewire--form--private-excursion">
    <div
        class="flex justify-between items-center py-4 px-4 border-b border-gray-200 dark:border-neutral-700 rounded-xl bg-gray-50">
        <div class="py-3">
            <h3 class="h1-rubik pb-0 max-sm:text-lg">{{ ($response)? $title_response:$title }}</h3>
            <h4 class="custom-grey text-base/5">{{ ($response)? $subtitle_response:$subtitle }}</h4>
        </div>

        <x-form.close id="book-modal"/>

    </div>


    <form  method="post" class="relative" wire:submit="save">

        @if($response)
        <x-form.response.response />
        @else
            <div class="livewire_loader"  wire:loading.block  wire:target="save">
                <div class="wrapper_loader">
                    <span class="loader"></span>
                </div>
            </div>

            <div class="p-4 overflow-y-auto" >
                <div class="w-full py-2">


                    <div class="relative mb-5">
                        <input type="text" id="input-name"
                               wire:model="name"
                               wire:focus="reset_error('name')"
                               class="custom-input peer  @error('name') custom-input-error @enderror"
                               placeholder="">

                        <label for="input-name" class="custom-label">Имя   <span class="text-red-700">*</span></label>

                    </div>

                    <div class="relative mb-5">
                        <input type="text" id="input-phone"
                               wire:model="phone"
                               wire:focus="reset_error('phone')"
                               class="custom-input peer @error('phone') custom-input-error @enderror"
                               placeholder="">

                        <label for="input-phone" class="custom-label">Телефон   <span class="text-red-700">*</span></label>

                    </div>

                    <div class="relative mb-5">
                        <input type="email" id="input-email"
                               wire:model="email"
                               wire:focus="reset_error('email')"
                               class="custom-input peer @error('email') custom-input-error @enderror"
                               placeholder="">

                        <label for="input-email" class="custom-label">Email   <span class="text-red-700">*</span></label>

                    </div>

                    <div class="relative mb-5">
                        <input type="text" id="input-quantity"
                               wire:model="quantity"
                               wire:focus="reset_error('quantity')"
                               class="custom_input_integer__js custom-input peer @error('quantity') custom-input-error @enderror"
                               placeholder="">

                        <label for="input-quantity" class="custom-label">Количество человек </label>

                    </div>



                    <div class="relative mb-5">
                    <textarea  id="input-message"
                               wire:model="message"
                               wire:focus="reset_error('message')"

                               class="custom-input peer @error('message') custom-input-error @enderror"
                               placeholder=""></textarea>

                        <label for="input-message" class="custom-label">Примечание</label>

                    </div>

                    <div class="relative">
                        <input type="text" id="input-flatpickr-date"
                               wire:model="flatpickr_date"
                               wire:focus="reset_error('flatpickr_date')"
                               class="custom-input peer @error('flatpickr_date') custom-input-error @enderror"
                               placeholder="">

                        <label for="input-flatpickr-date" class="custom-label">Выбрать дату</label>

                    </div>

                </div>
            </div>

            <div
                class="flex justify-end items-center gap-x-2 py-7 px-4 border-t border-gray-200 dark:border-neutral-700 bg-gray-50 rounded-xl">
                <button type="submit"
                        class="cursor-pointer inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-lg px-8 py-2.5 text-center max-sm:px-4">
                    Отправить
                </button>

            </div>

@endif



    </form>

</div>













