<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider1" class="rev_slider fullwidthabanner">
        <ul>

            @foreach($slider->images as $imagen)

                <li data-transition="random">
                    <!-- Main Image -->
                    {{--<img src="{{ asset('template-web/assets/img/slider/slider-bg-1.jpg') }}" alt="" data-bgposition="center center" data-no-retina>--}}
                    <img src="{{ route('imagenes.ver', $imagen->path) }}" class="img-responsive" alt="{!! $imagen->title !!}" style="margin: 0px auto" data-no-retina>


                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                         data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                         data-fontsize="['20','20','20','16']"
                         data-lineheight="['70','70','40','24']"
                         data-width="full"
                         data-height="none"
                         data-whitespace="normal"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="700"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">

                    </div>
                </li>

            @endforeach

        </ul>
    </div>
</div>