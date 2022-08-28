<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img\logo\logo-2.jpg') }}" />
    <title>Fashion Blackpink</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-icon\css\all.css') }}">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
</head>

<body>
    <header>
        <div class="header-top container-fluid">
            <div class="row row-one">
                <div class="col-md-4 col-4 col-one">
                    <i class="fa-solid fa-phone"></i>
                    <strong>094 404 1213</strong>
                    <i class="fa-solid fa-envelope top-email"></i>
                    <a href="mailto:hhuy27102001@gmail.com">hhuy27102001@gmail.com</a>
                </div>
                <div class="col-md-4 col-4 text-center col-two">
                    <span>Miễn phí vận chuyển trên 60.00$</span>
                </div>
                <div class="col-md-4 col-4 col-three"></div>
            </div>
        </div>
        <div class="header-between container-fluid">
            <div class="row row-two">
                <div class="col-md-2 col-2"></div>
                <div class="col-md-8 col-8">
                    <div class="img">
                        <a href="{{ route('home') }}" class="d-flex justify-content-center">
                            <img src="{{ asset('img\logo\logo.png') }}" alt="LogoBlackpink">
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-2">
                    <div class="icon">
                        <a href="#">
                            <i class="icon-top-color fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#">
                            <i class="icon-top-color fa-solid fa-circle-user"></i>
                        </a>
                        <a href="#">
                            <i class="icon-top-color fa-solid fa-heart"></i>
                        </a>
                        <a href="#">
                            <i class="icon-top-color fa-solid fa-bag-shopping"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom container-fluid">
            <nav class="row navbar navbar-expand-lg navbar-light bg-light">
                <ul class="nav-menu d-flex justify-content-center  me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Quần Áo KPOP</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Quần áo KDrama</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Quần Áo Hàn Quốc</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Trang phục</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Dịch vụ</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="slider">
        <div class="img">
            <img src="{{ asset('img\slider\slider-1.jpg') }}" alt="" class="">
        </div>
    </div>
    <div class="slick-slider container-fluid">
        <div class="slick-slider-text">
            <p class="slick-slider-content">Hãy lấp đầy tủ quần áo của bạn với thời trang thần tượng phổ biến nhất của
                chúng tôi</p>
        </div>
        <div class="img-slider">
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
        </div>
        <div class="slick-slider-btn container d-flex justify-content-center">
            <div class="btn">
                <a href="#">
                    <button type="submit">Bán chạy nhất</button>
                </a>
            </div>
        </div>
    </div>
    <div class="show-clothes">
        <div class="list-item row">
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes\blackpink-fashion-style-hp-scale-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Blackpink Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes\blackpink-fashion-style-hp-scale-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Blackpink Fashion</h3>
                    </div>
                </a>
            </div>
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes\blackpink-fashion-style-hp-scale-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Blackpink Fashion</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="show-clothes-more container">
        <div class="show-clothes-more-list row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="show-clothes-more-colum">
                    <div class="item">
                        <a href="#">Twice Fashion</a>
                    </div>
                    <div class="item">
                        <a href="#">Red Velvet Fashion</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="show-clothes-more-colum">
                    <div class="item">
                        <a href="#">NCT Fashion</a>
                    </div>
                    <div class="item">
                        <a href="#">Stray Kids Fashion</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="slick-slider-btn container d-flex justify-content-center">
            <div class="btn">
                <a href="#">
                    <button type="submit">Các nhóm nhạc K-pop khác</button>
                </a>
            </div>
        </div>
    </div>
    <div class="introduction container">
        <div class="introduction-list row">
            <div class="col-md-6">
                <div class="introduction-item">
                    <a href="#">
                        <img src="{{ asset('img\introduction\introduction-1.png') }}" alt=""
                            class="img-fluid mx-auto d-block">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="introduction-item">
                    <div class="item-content-text">
                        <h4 class="text-center">10 XU HƯỚNG THỜI TRANG SANG TRỌNG CỦA HÀN QUỐC 2022</h4>
                        <p class="text-center">Đó lại là thời điểm trong năm khi mọi người xem Autumn In My Heart với
                            ly cà phê gia vị bí ngô trên tay: mùa thu. Đã đến lúc tạm biệt những bộ đồ bơi phẳng phiu và
                            chào đón những chiếc áo khoác với vòng tay rộng mở. Tất nhiên, các nhà thiết kế thời trang
                            Hàn Quốc không còn xa lạ với nhu cầu ngày càng tăng về những thứ cần thiết cho tủ quần áo ấm
                            cúng nhưng phong cách cho tiết trời mùa thu. Khi chúng ta chuyển từ những chiếc váy hoa sang
                            những chiếc áo khoác len, cuối cùng chúng ta cũng có thể tỏa ra nguồn năng lượng của nhân
                            vật chính K-Drama với xu hướng thời trang mùa thu Hàn Quốc năm nay.</p>
                        <p class="text-center">Điều tuyệt vời nhất trong mùa thu là thời tiết đủ lạnh để có thể vui
                            chơi với việc xếp lớp. Như đã chỉ ra bởi K-Idols yêu thích của chúng tôi, một trong những xu
                            hướng mùa thu xác định nhất trong năm là xếp lớp áo khoác ngoài quá khổ trên áo có cổ để
                            nâng tầm trang phục cơ bản. Bằng cách thử nghiệm với những món đồ như vậy, bạn có thể biến
                            tủ quần áo của mình thành một nguồn cảm giác thoải mái mới.</p>
                        <div class="d-flex justify-content-center">
                            <div class="introduction-btn">
                                <a href="#" class="d-block">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slick-slider container-fluid">
        <div class="slick-slider-text">
            <p class="slick-slider-content">Quần áo từ những bộ phim Hàn Quốc yêu thích của bạn</p>
        </div>
        <div class="img-slider">
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
            <div class="img-item">
                <div class="img">
                    <a href="#">
                        <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                            alt="">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <a href="">Black Pants With White Linings | Jay – Enhypen</a>
                    </h3>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="price">28.90$</span>
                </div>
            </div>
        </div>
        <div class="slick-slider-btn container d-flex justify-content-center">
            <div class="btn">
                <a href="#">
                    <button type="submit">Thời trang KDrama</button>
                </a>
            </div>
        </div>
    </div>
    <div class="show-clothes">
        <div class="list-item row">
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes-two\show-clothes-1.webp') }}" alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Mùa hè yêu dấu của chúng ta</h3>
                    </div>
                </a>
            </div>
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes-two\show-clothes-1.webp') }}" alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Mùa hè yêu dấu của chúng ta</h3>
                    </div>
                </a>
            </div>
            <div class="item col-md-4">
                <a href="#">
                    <div class="img">
                        <img src="{{ asset('img\show-clothes-two\show-clothes-1.webp') }}" alt="">
                    </div>
                    <div class="show-clothes-text">
                        <h3>Mùa hè yêu dấu của chúng ta</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="comment container-fluid">
        <div class="comment-heading">
            <strong>
                <p class="text-center">Đánh giá của chúng tôi</p>
            </strong>
        </div>
        <div class="comment-heading-content">
            <div class="comment-title text-center">
                <a href="#">
                    <div class="comment-star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="comment-sub-heading text-center">Từ 1086 nhận xét</div>
                </a>
            </div>
        </div>
        <div class="comment-content">
            <div class="slick-slider container-fluid">
                <div class="img-slider">
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                    <div class="img-item">
                        <div class="star-icon text-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="img-item-text">
                            <p class="text-center">The t-shirt has arrived in great conditions (it just needs to be
                                steamed) and it really is the same Jennie is wearing in the 'Solo' diaries. The quality
                                is also very good, considered the price that I paid, so I'm hugely satisfied with my
                                purchasing. I</p>
                        </div>
                        <div class="img comment-img">
                            <a href="#">
                                <img src="https://www.fashionchingu.com/wp-content/uploads/2020/03/Taehyung-Oversized-Cargo-Pants-Inspiration-00002-300x400.jpg"
                                    alt="" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title text-center comment-title">
                                <a href="">Black summer Sandals I</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description container">
        <div class="row">
            <div class="description-content-left col-md-6">
                <div class="description-heading">
                    <strong>
                        <p class="d-block text-center">
                            Tại sao bạn sẽ thích Fashion Blackpink
                            <i class="fa-solid fa-heart"></i>
                        </p>
                    </strong>
                    <div class="description-item">
                        <div class="description-icon">
                            <i class="fa-solid fa-user-vneck-hair-long"></i>
                        </div>
                        <div class="description-content">
                            <div class="description-left-title">
                                <i class="fa-solid fa-user"></i>
                                <span>HỖ TRỢ TỐT NHẤT MÀ BẠN CÓ THỂ NHẬN ĐƯỢC</span>
                            </div>
                            <div class="content">
                                <p>Chúng tôi yêu Blackpink của chúng tôi và tất cả những người ghé thăm trang web của
                                    chúng tôi. Sau khi bạn liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong
                                    vòng 12-24 giờ.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="description-item">
                        <div class="description-icon">
                            <i class="fa-solid fa-user-vneck-hair-long"></i>
                        </div>
                        <div class="description-content">
                            <div class="description-left-title">
                                <i class="fa-solid fa-face-smile"></i>
                                <span>HỖ TRỢ TỐT NHẤT MÀ BẠN CÓ THỂ NHẬN ĐƯỢC</span>
                            </div>
                            <div class="content">
                                <p>Chúng tôi yêu Blackpink của chúng tôi và tất cả những người ghé thăm trang web của
                                    chúng tôi. Sau khi bạn liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong
                                    vòng 12-24 giờ.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="description-item">
                        <div class="description-icon">
                            <i class="fa-solid fa-user-vneck-hair-long"></i>
                        </div>
                        <div class="description-content">
                            <div class="description-left-title">
                                <i class="fa-solid fa-money-bill"></i>
                                <span>HỖ TRỢ TỐT NHẤT MÀ BẠN CÓ THỂ NHẬN ĐƯỢC</span>
                            </div>
                            <div class="content">
                                <p>Chúng tôi yêu Blackpink của chúng tôi và tất cả những người ghé thăm trang web của
                                    chúng tôi. Sau khi bạn liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong
                                    vòng 12-24 giờ.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="description-item">
                        <div class="description-icon">
                            <i class="fa-solid fa-user-vneck-hair-long"></i>
                        </div>
                        <div class="description-content">
                            <div class="description-left-title">
                                <i class="fa-solid fa-paper-plane"></i>
                                <span>HỖ TRỢ TỐT NHẤT MÀ BẠN CÓ THỂ NHẬN ĐƯỢC</span>
                            </div>
                            <div class="content">
                                <p>Chúng tôi yêu Blackpink của chúng tôi và tất cả những người ghé thăm trang web của
                                    chúng tôi. Sau khi bạn liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong
                                    vòng 12-24 giờ.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="description-item">
                        <div class="description-icon">
                            <i class="fa-solid fa-user-vneck-hair-long"></i>
                        </div>
                        <div class="description-content">
                            <div class="description-left-title">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>HỖ TRỢ TỐT NHẤT MÀ BẠN CÓ THỂ NHẬN ĐƯỢC</span>
                            </div>
                            <div class="content">
                                <p>Chúng tôi yêu Blackpink của chúng tôi và tất cả những người ghé thăm trang web của
                                    chúng tôi. Sau khi bạn liên hệ với chúng tôi, chúng tôi sẽ liên hệ với bạn trong
                                    vòng 12-24 giờ.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-content-right col-md-6">
                <div class="description-heading">
                    <strong>
                        <p class="d-block text-center">
                            Sản phẩm của chúng tôi trên YouTube
                        </p>
                    </strong>
                </div>
                <div class="description-video">
                    <iframe class="d-flex justify-content-center" width="560" height="315" src="https://www.youtube.com/embed/gQlMMD8auMs?start=73" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="description-btn">
                        <a href="#" class="d-block">Truy cập tất cả các video trên Youtube của chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="types-clothes container">
        <div class="types-clothes-heading">
            <p class="stypes-clothes-content text-center">Quần áo KPop được phân loại theo loại</p>
        </div>
        <div class="show-clothes">
            <div class="list-item row">
                <div class="type-clothes-item item col-md-3">
                    <a href="#">
                        <div class="img">
                            <img src="{{ asset('img\types-clothes\types-clothes-1.jpg') }}"
                                alt="">
                        </div>
                    </a>
                    <h3 class="text-center">KPOP Hoodies</h3>
                </div>
                <div class="type-clothes-item item col-md-3">
                    <a href="#">
                        <div class="img">
                            <img src="{{ asset('img\types-clothes\types-clothes-1.jpg') }}"
                                alt="">
                        </div>
                    </a>
                    <h3 class="text-center">KPOP Hoodies</h3>
                </div>
                <div class="type-clothes-item item col-md-3">
                    <a href="#">
                        <div class="img">
                            <img src="{{ asset('img\types-clothes\types-clothes-1.jpg') }}"
                                alt="">
                        </div>
                    </a>
                    <h3 class="text-center">KPOP Hoodies</h3>
                </div>
                <div class="type-clothes-item item col-md-3">
                    <a href="#">
                        <div class="img">
                            <img src="{{ asset('img\types-clothes\types-clothes-1.jpg') }}"
                                alt="">
                        </div>
                    </a>
                    <h3 class="text-center">KPOP Hoodies</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="footer-content">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <div class="footer-heading">
                        <h3 class="text-center">Liên hệ</h3>
                    </div>
                    <div class="footer-content-text">
                        <p>Nếu bạn có câu hỏi hoặc thắc mắc, chỉ cần liên hệ với chúng tôi và chúng tôi sẽ trả lời bạn trong vòng 16 giờ, 7 ngày một tuần.</p>
                    </div>
                    <div class="phone-number">
                        <i class="fa-solid fa-phone"></i>
                        094 404 1213
                    </div>
                    <div class="email">
                        <a href="#">hhuy27102001@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-3 footer-item">
                    <div class="footer-heading">
                        <h3 class="text-center">Kiểm tra đánh giá của chúng tôi</h3>
                    </div>
                    <div class="footer-content-text">
                        <p>Thuyết phục bản thân từ hơn hàng trăm nhận xét</p>
                    </div>
                    <div class="footer-star-icon text-left">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="footer-reviews-text">
                        <a href="#">
                            <p>»Xem tất cả các đánh giá</p>
                        </a>
                        <a href="#">
                            <p>»Bài đánh giá trên YouTube   </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 footer-item">
                    <div class="footer-heading">
                        <h3 class="text-center">Kiểm tra đánh giá của chúng tôi</h3>
                    </div>
                    <div class="footer-content-text">
                        <p>Nhận các đợt giảm giá sản phẩm mới nhất, doanh số bán hàng và các nội dung thú vị khác gửi thẳng đến hộp thư đến của bạn</p>
                    </div>
                    <form action="" method="post" class="footer-form">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="footer-form-email">
                        <input type="submit" value="Đặt mua" class="footer-form-btn">
                    </form>
                </div>
                <div class="col-md-3 footer-item">
                    <div class="footer-heading">
                        <h3 class="text-center">Thời trang Blackpink</h3>
                    </div>
                    <div class="footer-content-text">
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>Dấu ấn - thông báo pháp lý</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>Điều khoản & Điều kiện</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>Dữ liệu Chính sách bảo mật Chính sách</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>trả lại Chính sách</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>sở hữu trí tuệ</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <p>Phiếu thưởng - điều khoản và điều kiện</p>
                            </a>
                        </div>
                        <div class="footer-col-4-item">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom container-fluid">
            <div class="footer-bottom-text">
                <p class="text-center">Bản quyền 2022 Blackpink</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap\js\bootstrap.min.js') }}"></script>
    <script src="{{ asset('js\main.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js\jquery\jquery-slick-slider.js') }}"></script>
</body>

</html>
