@extends('techhub.layouts.landingpage')
@section('content')
<div class="container">
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne">
  <h2 class="mb-0">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      About Us
    </button>
  </h2>
</div>

<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
  <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingTwo">
  <h2 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Our Vision
    </button>
  </h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
  <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingThree">
  <h2 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Our Mission
    </button>
  </h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
  <div class="card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
  </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingOne">
  <h2 class="mb-0">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapseOne">
      Contact Us
    </button>
  </h2>
</div>

<div id="collapsefour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
  <div class="card-body">
    <div class="form-group row showcase_row_area">
      <div class="col-md-2 showcase_text_area">
        <label for="inputType1">Your Email</label>
      </div>
      <div class="col-md-10 showcase_content_area">
        <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
      </div>
    </div>
    <div class="form-group row showcase_row_area">
      <div class="col-md-2 showcase_text_area">
        <label for="inputType1">Title</label>
      </div>
      <div class="col-md-10 showcase_content_area">
        <input type="text" class="form-control" id="message" name="Message" placeholder="Title">
      </div>
    </div>
    <div class="form-group row showcase_row_area">
    <div class="col-md-2 showcase_text_area">
      <label for="inputType9">Message</label>
    </div>
    <div class="col-md-10 showcase_content_area">
      <textarea class="form-control" id="inputType9" cols="12" rows="4" placeholder="Message"></textarea>
    </div>
  </div>
  <div class="form-group row showcase_row_area">
  <div class="col-md-2 showcase_text_area">
  </div>
  <div class="col-md-10 showcase_content_area">
    <a href="mailto:techhub@gmail.com"><button class="btn btn-primary">Send</button></a>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>
@endsection
