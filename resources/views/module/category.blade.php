<div class="category">
    <div class="d-flex justify-content-between mr-b-20 mr-t-40">
        <div class="title d-flex">
            <div class="title__icon">
                <img src="images/category.png" alt="">
            </div>
            <div class="title__body">
                <h1>دسته بندی</h1>
                <div class="text">شما میتوانید دوره آموزشی خود را از دسته بندی زیر انتخاب کنید</div>
            </div>
        </div>
        <div class="arrows d-flex">
            <div class="arrow-right mdi mdi-arrow-right-drop-circle-outline pointer"></div>
            <div class="arrow-left mdi mdi-arrow-left-drop-circle-outline pointer"></div>
        </div>
    </div>
    <div class="main-carousel  content" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

        <div class="cat--card carousel-cell">
            @include('module.cat-card')
        </div>

    </div>
</div>