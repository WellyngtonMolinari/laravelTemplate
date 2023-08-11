@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Adicionar Carrossel</h4> <br><br>
            
            <form method="post" action="{{ route('store.carousel') }}" enctype="multipart/form-data">
                @csrf

 
          
                <div class="row mb-3">
                    <label for="example-text-input2" class="col-sm-2 col-form-label">Adicionar Carousel</label>
                    <div class="col-sm-10">
                        <input type="file" name="carousel_img[]" class="form-control" id="carousel" multiple="">
                        <div class="row" id="showImages">
                            <img id="noImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="No Image" style="padding: 0;">
                        </div>
                    </div>
                </div>
            <!-- end row -->


               
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Adicionar">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $('#carousel').change(function(e){
            $('#showImages').empty();
            for (var i = 0; i < e.target.files.length; i++) {
                var reader = new FileReader();
                reader.onload = function(e){
                    var img = $('<img>').addClass('rounded avatar-lg').attr('src', e.target.result);
                    $('#showImages').append(img);
                }
                reader.readAsDataURL(e.target.files[i]);
            }
        });

</script>

@endsection 
