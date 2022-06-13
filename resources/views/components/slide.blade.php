<div class="banner">
    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active d-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 3"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                aria-label="Slide 3"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                aria-label="Slide 3"></button>
            <button type="button" class="d-none" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://f5-zpcloud.zdn.vn/5804550138139762647/9026c856e5c0259e7cd1.jpg" class="d-block w-100"
                    height="400" alt="">
            </div>
            @foreach ($banner as $item)
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/storage/banner/{{ $item->hinhanh }}" class="d-block w-100" height="400" alt="">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
