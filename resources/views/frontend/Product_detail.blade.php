@extends('layout.site')
@section('content')
  <main>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-3">
                <img src="{{ asset('images/ao-thun-nam-10s23tss034-bright-w.webp') }}" style="width: 350px "; alt="">
            </div>
        
        <div class="col-md px-5">
            <h3 class="font-monospace">Áo Thun Nam Tay Ngắn In Hình Form Regular</h3>
            <div class="d-flex md-5 py-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
        
                </div>
                <small class="px-3">5657 view</small>
        
            </div>
            <h8 class="font-monospace md-2">THÔNG TIN CHI TIẾT ÁO: THUN NAM TAY NGẮN IN HÌNH FORM REGULAR - 10S23TSS034.
                Áo thun tay ngắn là một trong những item cơ bản không còn xa lạ thời trang thường ngày. Những chiếc áo thun t-shirt đầu tiên được ra đời vào những thập kỷ đầu của thế kỷ XX được dùng để làm áo lót của những người lính trong quân đội. Cột mốc quan trọng trở thành item “quốc dân” đó là khi các diễn viên Hollywood đưa áo thun trắng lên màn ảnh. Từ đó, áo thun trở thành món đồ thời trang sử dụng phổ biến đến ngày nay.
                Áo Thun Nam Tay Ngắn In Hình Form Regular - 10S23TSS034 được may từ chất liệu cotton nên vô cùng thoáng mát, thấm hút mồ hôi tốt kết hợp cũng form áo cổ điển vừa vặn, phần eo không ôm và suông thẳng từ nách xuống vạt áo. Đây là một item hiện đại kết hợp phần hòa tiết in thân trước giúp chiếc áo ấn tượng hơn và dễ mix cùng nhiều trang phục khác nhau.</h8>
            <ul class="nav md-4 pt-3">
                <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                <li class="nav-item px-2"><del>650.000đ</del> </li>
                <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
            </ul>
            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-success btn-minus">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control input-number" value="1" min="1" max="100">
                    <div class="input-group-btn">
                        <button class="btn btn-success btn-plus">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <button class="btn btn-success px-3 ms-2" type="button">
                Thêm vào giỏ
                </button>
            </div>
        
        </div>
            </div>
            
        </div>
    </main>
@endsection
@section('title','Chi tiet san pham')
@section('header')
    <link rel="stylesheet" href="{{ asset('product_detail.css') }}">
@endsection