@extends('layout.site')
@section('content')
<main>
    <div class="layout-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 font-monospace">
                    <div class="contact py-2">
                        <h4>
                            Cửa hàng
                        </h4>
                        <div class="info-contact">
                            <div class="group-address">
                                <ul>
                                    <li> 
                                        <div class="info">
                                            <b>Địa chỉ</b>
                                            <span>
                                                
                                                425 Bưng Ông Thoàn, Phường Tăng Nhơn Phú B, Quận 9, TP. HCM
                                                
                                            </span>
                                        </div>
                                        
                                    </li>
                                    <li>
                                       
                                        <div class="info">
                                            <b>Thời gian làm việc</b>
                                            <span>
                                                8h - 22h<br>
                                                 Từ thứ 2 đến chủ nhật
                                            </span>
                                        </div>
    
                                    </li>
                                    <li>
                                        
                                        <div class="info">
                                            <b>Hotline</b>
                                            <a title="190056750" href="tel:190056750">190056750</a>
                                        </div>
                                    </li>
                                    <li>
                                        
                                        <div class="info">
                                            <b>Email</b>
                                            <a  title="trungkynguyen2004@gmail.com" href="mailto:trungkynguyen2004@gmail.com">trungkynguyen2004@gmail.com</a>
                                        </div>
                                    </li>
    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-contact col-md-6 py-2">
                        <h4>
                            Liên hệ với chúng tôi
                        </h4>
                        <span class="content-form">
                            Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
                        </span>
                        <div class="mb-3 py-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"><br>
                            <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                        </div>
                        <div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung"></textarea>
                        </div>
                        <div class="col-12 py-3">
                            <button class="btn btn-primary" type="submit">Gửi thông tin</button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
@section('title','Lien he')
@section('header')
    <link rel="stylesheet" href="{{ asset('contact.css') }}">
@endsection