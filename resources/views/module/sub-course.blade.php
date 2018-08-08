<div class="sub-course-card d-flex flex-column flex-lg-row">
    <ul class="courses col-xs-12 col-lg-8  order-1 order-lg-0 list-unstyled border-lg-left">
        <li>
            <?php $i=1; ?>
            @include('module.course-level')
        </li>
        <li>
            <?php $i=2; ?>
            @include('module.course-level')
        </li>
        <li>
            <?php $i=3; ?>
            @include('module.course-level')
        </li>
    </ul>
    <div class="teacher col-xs-12 col-lg-4 order-0 order-lg-1">
        <div class="teacher__header d-flex">
            <div class="teacher__img">
                <img src="{{  URL::asset('images/author.png') }}" alt="">
            </div>
            <div class="teacher__title pr-2">
                <div class="teacher__name">محمدرضا عابدینی</div>
                @include('module.rate')
            </div>
        </div>
        <div class="teacher__body">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را داشته باشند.
        </div>
        <ul class="teacher__footer list-unstyled">
            <li class="d-flex">
                <div class="mdi mdi-account-multiple-outline text-info"></div>
                <div class="d-flex justify-content-between w-100">
                    <div>تعداد دانشجویان</div>
                    <div>126</div>
                </div>
            </li>
            <li class="d-flex">
                <div class="mdi mdi-heart-outline text-danger"></div>
                <div class="d-flex justify-content-between w-100">
                    <div>تعداد علاقمندی ها</div>
                    <div>62</div>
                </div>
            </li>
            <li class="d-flex">
                <div class="mdi mdi-trophy-award text-warning"></div>
                <div class="d-flex justify-content-between w-100">
                    <div>تعداد آرا</div>
                    <div>58</div>
                </div>
            </li>
            <li class="d-flex text-success bg-light-green">
                <div class="mdi mdi-trophy-outline"></div>
                <div class="d-flex justify-content-between w-100">
                    <div>میزان رضایت دانشجویان</div>
                    <div>96%</div>
                </div>
            </li>
        </ul>
    </div>
</div>