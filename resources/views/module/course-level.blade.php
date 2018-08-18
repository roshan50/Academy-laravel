<div class="course-level d-flex">
    <div class="course-level__img d-none d-lg-block">
        <img src="{{  URL::asset('images/course.jpg') }}" alt="">
    </div>
    <div class="course-level__body">
        <div class="course-level__title text-secondary  font-weight-bold">دوره شماره <?php echo $i; ?></div>
        <div class="course-level__text">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
        </div>
        <div class="course-level__level" id="accordion">
            <a data-toggle="collapse" href="#collapse<?php echo $i; ?>">
                <div class="level__header d-flex mdi mdi-format-line-weight text-primary font-weight-bold">
                    <div>4 مرحله</div>
                    <div class="mdi mdi-menu-<?php if ($i==1) echo 'up';else echo 'down' ?>-outline"></div>
                </div>
            </a>
            <ul class="level__list list-unstyled collapse <?php if ($i==1) echo 'show'; ?>" id="collapse<?php echo $i; ?>" data-parent="#accordion">
                <item class="d-flex">
                    <div class="item__icon">
                        <svg width="40" height="40">
                            <rect width="40" height="40" rx="5" ry="5" style="fill:#efeff0;" />
                            {{--<polygon points="12,10 28,20 12,28" rx="5" ry="5"--}}
                                     {{--style="fill:#efeff0;stroke:#afaeb2;stroke-width:2" />--}}
                            <path d="M12 10 L28 20 L12 28 Z" stroke="#afaeb2"
                                  stroke-width="2" stroke-linejoin="round" fill="#efeff0"/>
                            Sorry, your browser does not support inline SVG.
                        </svg>
                        {{--<img src="{{  URL::asset('images/play.png') }}" alt="">--}}
                    </div>
                    <div class="d-flex justify-content-between w-100 align-items-center pr-3">
                        <div class="item__title">مرحله اول</div>
                        <div class="item__time mdi mdi-clock-outline">21:45</div>
                    </div>
                </item>
                <item class="d-flex">
                    <div class="item__icon">
                        <img src="{{  URL::asset('images/play.png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-between w-100 align-items-center pr-3">
                        <div class="item__title">مرحله دوم</div>
                        <div class="item__time mdi mdi-clock-outline">21:45</div>
                    </div>
                </item>
                <item class="d-flex">
                    <div class="item__icon">
                        <img src="{{  URL::asset('images/play.png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-between w-100 align-items-center pr-3">
                        <div class="item__title">مرحله سوم</div>
                        <div class="item__time mdi mdi-clock-outline">21:45</div>
                    </div>
                </item>
                <item class="d-flex">
                    <div class="item__icon">
                        <img src="{{  URL::asset('images/play.png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-between w-100 align-items-center pr-3">
                        <div class="item__title">مرحله چهارم</div>
                        <div class="item__time mdi mdi-clock-outline">21:45</div>
                    </div>
                </item>
            </ul>
        </div>
    </div>
</div>