<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <title> @yield('title')</title>
</head>
<body>
    <header class="section_header bg-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.html">
                        <img src="{{ asset('images/logo.webp') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md-8 ">
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="trang-chu">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-black" href="#">Về chúng tôi</a>
                        </li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="san-pham" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sản phẩm
                            </a>
                            <ul class="dropdown-menu font-monospace">
                              <li><a class="dropdown-item" href="san-pham">Áo</a></li>
                              <li><a class="dropdown-item" href="#">Quần</a></li>
                              <li><a class="dropdown-item" href="#">Giày & Phụ kiện</a></li>
                              <li><a class="dropdown-item" href="#">Collection</a></li>
                              <li><a class="dropdown-item" href="#">Best Saler</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                          <a class="nav-link text-yellow" href="#">Sale</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Tin tức
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Khách hàng
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="lien-he">Liên hệ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black" href="#">Cửa hàng</a>
                          </li>
                      </ul>
                </div>
                <div class="col-md-2">
                    <ul class="nav pt-3">
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-regular fa-user"></i>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-regular fa-heart"></i>
                                <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                                  0
                                  <span class="visually-hidden">unread messages</span>
                                </span>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-regular fa-bell"></i>
                            <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </li>
                        <li class="nav-item px-2 position-relative">
                            <i class="fa-brands fa-shopify"></i>
                            <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="section_footer bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="font-monospace"> THÔNG TIN</h4>
                    <p class="font-monospace">Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
                    <i class="fa-solid fa-location-dot" style="color: #525456;"></i>
                    <i class="font-monospace">70 Lữ Gia, Phường 15, Quận 11, TP. HCM</i>
                    <p></p>
                    <i class="fa-solid fa-phone-volume" style="color: #525456;"></i>
                    <i class="font-monospace">1900 6750</i>
                    <p></p>
                    <i class="fa-solid fa-paper-plane" style="color: #525456;"></i>
                    <i class="font-monospace">support@sapo.vn</i>  
                </div>
                <div class="col-md">
                    <h4 class="font-monospace"> CHÍNH SÁCH</h4>
                    <p class="font-monospace">Chính sách thành viên</p>
                    <p class="font-monospace">Chính sách vận chuyển</p>
                    <p class="font-monospace">Chăm sóc khách hàng</p>
                    <p class="font-monospace">Phương thức thanh toán</p>
                    <p class="font-monospace">Chính sách đổi trả / bảo hành</p>
                </div>
                <div class="col-md">
                    <h4 class="font-monospace">HƯỚNG DẪN</h4>
                    <p class="font-monospace">Denny Member</p>
                    <p class="font-monospace">Mua hàng dễ dàng</p>
                    <p class="font-monospace">Hợp tác nhượng quyền</p>
                    <p class="font-monospace">Hướng dẫn mua hàng online</p>
                    <p class="font-monospace">Hướng dẫn kiểm tra hạng thẻ thành viên</p>
    
                </div>
                <div class="col-md-3">
                    <h4 class="font-monospace">ĐĂNG KÝ NHẬN TIN</h4>
                    <input type="email" class="form-floating bg-dark text-white" id="exampleFormControlInput1" placeholder="Nhập địa chỉ email">
                    <i class="fa-regular fa-envelope"></i>
                    <p></p>
                    <p class="font-monospace">Hình thức thanh toán:</p>
                    <p>
                        <i class="fa-brands fa-cc-visa py-4" style="color: #b2bed2;"></i>
                        <i class="fa-regular fa-credit-card py-4" style="color: #b2bed2;"></i>
                        <i class="fa-solid fa-money-check-dollar" style="color: #b2bed2;"></i>
                    </p>
                    <p></p>
                    <p class="font-monospace">Liên kết sàn:</p>
                    <p>
                        <i class="fa-brands fa-facebook py-4" style="color: #b2bed2;"></i> 
                        <i class="fa-brands fa-instagram py-4" style="color: #b2bed2;"></i>
                        <i class="fa-brands fa-github" style="color: #b2bed2;"></i>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/layoutsite.js') }}"></script>
</body>
</html>