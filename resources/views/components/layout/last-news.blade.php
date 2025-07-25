<div class="py-9">
    @foreach($last_news as $new)
        <div class="custom-new-mini">
            <p><a class="" href="{{ route('site_new', ['slug' => $new->slug]) }}"><span class="custom-arrow"></span><span>{{ $new->short_desc }}</span></a>
            </p>
        </div>
    @endforeach
</div>
