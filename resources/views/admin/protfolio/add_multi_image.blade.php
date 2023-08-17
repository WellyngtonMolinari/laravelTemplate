@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@php
$portfolio = App\Models\Portfolio::latest()->get();
@endphp
<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Adicionar Multi Imagem</h4> <br><br>
            
            <form method="post" action="{{ route('store.multi.image') }}" enctype="multipart/form-data">
                @csrf
          
             <div class="row mb-3">
                <label for="portfolio_id" class="col-sm-2 col-form-label">Selecionar Produto</label>
                <div class="col-sm-10">
                    <select name="portfolio_id" class="form-control">
                        @foreach($portfolio as $portfolio)
                            <option value="{{ $portfolio->id }}">{{ $portfolio->portfolio_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- end row -->



            <div class="row mb-3">
                <label for="multi_img" class="col-sm-2 col-form-label">Adicionar Multi Imagens</label>
                <div class="col-sm-10">
                    <input name="multi_img[]" class="form-control" type="file" multiple>
                    <div class="row" id="showImages">
                        <img id="noImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="No Image" style="padding: 0;">
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Adicionar">
                </div>
            </div>
            <!-- end row -->
           
        </form>

        </div>
    </div>
</div> <!-- end col -->
</div>

</div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('input[name="multi_img[]"]').change(function(e){
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
