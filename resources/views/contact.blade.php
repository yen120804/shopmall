@extends('layout')
@section('title', 'Liên hệ')
@section('content')

<div class="container-fluid  ">
  
<div class="img">
  <img src="{{asset('img/banner4.jpg')}}" alt="" style="width:80rem; height:16rem;">
</div>


  <hr class="border border-success border-2 opacity-50">
  <div class="container">
<div class="row p-4">
<div class="col-sm-3 text-center">
  <h1><i class="bi bi-telephone-fill"></i></h1>
  <h3 class="text-success ">ĐIỆN THOẠI</h3>
  <p class="text">088602456</p>

</div>
<div class="col-sm-3 text-center">
  <h1><i class="bi bi-chat-quote-fill"></i></h1>
  <h3 class="text-success">EMAIL</h3>
  <p class="text">yenhuynhhai12082004@gamil.com</p>
</div>
<div class="col-sm-3 text-center">
  <h1><i class="bi bi-map-fill"></i></h1>
  <h3 class="text-success">VĂN PHÒNG</h3>
  <p class="text">004 Hải Yến , phường 6 , Tân An , Long An</p>
</div>
<div class="col-sm-3 text-center">
  <h1><i class="bi bi-map-fill"></i></h1>
  <h3 class="text-success ">CHI NHÁNH</h3>
  <p class="text">538/24 Trường Chinh</p>
</div>

</div>

  </div>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <h2>Câu hỏi thường gặp</h2>
    <hr/>
    <h5 class="fw-normal">Vui lòng đọc câu hỏi thường gặp của chúng tôi trước khi gửi tin nhắn cho chúng tôi</h5>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button bg-success-subtle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Vì sao chọn sản phẩm của chúng tôi
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Chúng tôi cung cấp cho bạn sản phẩn an toàn, giá cả hợp lí
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Điều khác biệt từ chúng tôi
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Bên cạnh dây chuyền phân phối sản phẩm tiên tiến, FOODY còn chú trọng sử dụng nguồn nguyên liệu sạch trong sản xuất.            </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Lợi ích của sản phẩm
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Những loại thực phẩm sạch, cung cấp dồi dào đạm thực vật, giúp cơ thể tránh nguy cơ bệnh tật và nhiễm độc, giàu vitamins và khoáng chất quý, phòng chống ung thư, kháng khuẩn            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <h2>Gửi thắc mắc của bạn cho chúng tôi</h2>
    <hr/>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <a href="#" class="btn btn-success">Gửi</a>
  </div>
</div>
</div>



 
</div>
@endsection