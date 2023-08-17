@extends('admin.admin_master')
@section('admin')
@php
$portfoliocategory = App\Models\PortfolioCategory::latest()->get();
@endphp
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Adicionar Produtos</h4>
            
            <form method="post" action="{{ route('store.protfolio') }}" enctype="multipart/form-data">
                @csrf

               

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Título do Produto *</label>
                <div class="col-sm-10">
                    <input name="portfolio_name" class="form-control" type="text" id="example-text-input">
                    @error('portfolio_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Sub título *</label>
                <div class="col-sm-10">
                    <input name="portfolio_title" class="form-control" type="text" id="example-text-input">

                    @error('portfolio_title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Categoria *</label>
                    <select name="category" class="form-select" id="example-select">
                        <option selected disabled>Selecionar Categoria</option>
                        @foreach($portfoliocategory as $category)
                            <option value="{{ $category->portfolio_category }}">{{ $category->portfolio_category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            

 

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Descrição do Produto*</label>
                <div class="col-sm-10">
      <textarea id="elm1" name="portfolio_description">
   
      </textarea>
                </div>
            </div>
            <!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Imagem do Produto *</label>
    <div class="col-sm-10">
        <input name="portfolio_image" class="form-control" type="file" id="image">
    </div>
</div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

             
            <div class="row mb-3">
                <label for="example-text-input2" class="col-sm-2 col-form-label">Multiplas Imagens</label>
                <div class="col-sm-10">
                    <input type="file" name="multi_img[]" class="form-control" id="multiImg" multiple="">
                    <div class="row" id="showImages">
                        <img id="noImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="No Image" style="padding: 0;">
                    </div>
                </div>
            </div>
 
 

           
            <input type="submit" class="btn btn-info waves-effect waves-light" value="Inserir">
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
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#multiImg').change(function(e){
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
