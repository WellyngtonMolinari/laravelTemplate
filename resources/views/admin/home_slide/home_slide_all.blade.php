@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Sessão Principal</h4>
            
            <form method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $homeslide->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $homeslide->title }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Sub-Título </label>
                <div class="col-sm-10">
                    <input name="short_title" class="form-control" type="text" value="{{ $homeslide->short_title }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Vídeo url</label>
                <div class="col-sm-10">
                    <input name="video_url" class="form-control" type="text" value="{{ $homeslide->video_url }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="imageSelect" class="col-sm-2 col-form-label">Imagem flutuante (transparente)</label>
                <div class="col-sm-10">
                    <select name="home_slide" class="form-control" id="imageSelect">
                        <option value="">Não adicionar</option>
                        <option value="add_image">Adicionar imagem</option>
                    </select>
                </div>
            </div>
            
            <div class="row mb-3" id="imageInputContainer" style="display: none;">
                <label for="imageInput" class="col-sm-2 col-form-label">Imagem flutuante</label>
                <div class="col-sm-10">
                    <input name="home_slide" class="form-control" type="file" id="imageInput">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($homeslide->home_slide))? url( $homeslide->home_slide):url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input2" class="col-sm-2 col-form-label">Carousel</label>
                <div class="col-sm-10">
                    <input type="file" name="carousel_img[]" class="form-control" id="carousel" multiple="">
                    <div class="row" id="showImages">
                        <img id="noImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="No Image" style="padding: 0;">
                    </div>
                </div>
            </div>

<input type="submit" class="btn btn-info waves-effect waves-light" value="Atualizar Sessão Principal">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#imageSelect').change(function(){
            var selectedOption = $(this).val();
            if (selectedOption === 'add_image') {
                $('#imageInputContainer').show();
            } else {
                $('#imageInputContainer').hide();
            }
        });

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
    });

</script>


        

@endsection 
