<div id="full-slider-wrapper" style="margin-top: 0px">
    <div id="layerslider" style="width:100%;height:600px;">

        @foreach($slider->images as $imagen)

            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                <img src="{{ route('imagenes.ver', $imagen->path) }}" class="ls-bg" alt="{!! $imagen->title !!}">
                @if($slider->text_active)
                <h3 class="ls-l slide_typo"
                    style="top: 45%; left: 50%;"
                    data-ls="offsetxin:0;
                    durationin:2000;
                    delayin:1000;
                    rotatexin:25;
                    transformoriginin:50% bottom 0;
                    offsetxout:0;
                    rotatexout:45;
                    transformoriginout:50% bottom 0;">

                    {!! $slider->name !!}

                </h3>
                @endif
            </div>

        @endforeach

    </div>
</div><!-- End layerslider -->
