@if($reviews)
    <div class="custom-block py-8">
        <div class="flex justify-between px-8! pb-4! border-b-2  border-[#EBEBEB]">

            <h3 class="h1-rubik pb-0  text-3xl/12 text-[#02356A] max-lg:text-2xl">Отзывы</h3>

            <div class="flex justify-end">
                <div class=" reviews_prev reviews_prev__js"></div>
                <div class="reviews_next reviews_next__js"></div>

            </div>

        </div>
        <div class="reviews-carousel reviews__js">

            @foreach($reviews as $review )

                <div class="review"><a href="#"   data-fancybox="review_gallery"
                                       data-src="{{ Storage::url($review->img) }}"
                                       data-caption="{{($review->subtitle)?:$review->title}}"><img class="max-sm:w-[120px]! max-sm:h-[173px]!" width="196" height="282" src="{{ asset(intervention('196x282', $review->img)) }}" alt="" sizes="" srcset=""></a></div>


            @endforeach


        </div>

    </div>
@endif
