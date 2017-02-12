    <ul class="rslides" id="slider1">
        @if(isset($slider_images))
            @foreach($slider_images as $imgs)
                <li><img src="/assets/images/sliders/{!! $param1_lowered !!}/{!!$imgs!!}" alt=""></li>
            @endforeach
        @else
            <li><img src="/assets/images/sliders/slider-placeholder-poJuzHS81k9.png" alt=""></li>
        @endif
    </ul>