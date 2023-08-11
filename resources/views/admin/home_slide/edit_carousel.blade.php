@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Atualizar Carrossel</h4> <br><br>
            
            <form method="post" action="{{ route('update.carousel') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $allCarousel->id }}">
          
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Atualizar Carrossel</label>
                <div class="col-sm-10">
           <input name="carousel_img" class="form-control" type="file" id="image" >
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ asset($allCarousel->carousel_img)  }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Atualizar">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 
