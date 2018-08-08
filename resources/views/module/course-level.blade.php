<div class="course-level d-flex flex-column flex-lg-row">
    <div class="course-level__img">
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
                        <img src="{{  URL::asset('images/play.png') }}" alt="">
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
                <item class="d-sm-flex">
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