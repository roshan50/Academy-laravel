<div class="container-fluid bg-primary">
    <div class="container d-flex flex-lg-row flex-column">
        <div class="course-video">
            <video class="video"  controls>
                <source src="{{  URL::asset('videos/mov_bbb.mp4') }}" type="video/mp4">
                <source src="{{  URL::asset('videos/mov_bbb.ogg') }}" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>
        </div>

        <div class="video-list">
            <h1 class="video-list__title mdi mdi-link-variant">ویدئوهای مرتبط</h1>
            <div class="video-list-group" id="scroll">
                <a href="#" class="video-list-group-item">
                    @include('module.video-card')
                </a>
                <a href="#" class="video-list-group-item">
                    @include('module.video-card')
                </a>
                <a href="#" class="video-list-group-item">
                    @include('module.video-card')
                </a>
                <a href="#" class="video-list-group-item">
                    @include('module.video-card')
                </a>
            </div>
        </div>
    </div>
</div>