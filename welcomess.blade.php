<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <title>Recommender System in Laravel</title>
    <style>
        .large-product-image {
            width: auto;
            height: 200px;
        }
    </style>
</head>
<body>
<div class="container">
    {{-- <div class="row mb-5" style="border-bottom: 1px solid #ccc">
        <div class="col text-center">
      
            <img src="{{ asset( $selectedProduct->image ?? '/images/logo.png') }}" alt="" class="p-3" style="height: 80px; width: auto; border-top: 1px solid #ccc; background-color: #f7f7f7">
            @if(isset($dishes))
    @foreach ($dishes as $dish)
        <a href="/?id={{ $dish['id'] }}" style="text-decoration: none;">
            <img src="{{$dish['image'] ? asset('storage/' . $dish['image']) : asset('/images/logo.png')}}" alt="" class="p-3" style="height: 80px; width: auto;" >
        </a>
    @endforeach
@endif

        </div>
    </div>
    <div class="row">
        <div class="offset-3 col-6">
            <h5>Selected Product</h5>
        </div>
    </div>
    <div class="row mb-5">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="text-center" style="background-color: #ccc">
                    <img src="{{ asset(isset($selectedProduct) && $selectedProduct->image ? 'storage/' . $selectedProduct->image : '/images/logo.png') }}" alt="" class="menu-image">


                </div>
                <div class="card-body">
                    @if(isset($selectedProduct))
                        <p class="card-text text-muted">{{ $selectedProduct->name }} (${{ $selectedProduct->price }})</p>
                    @endif
                </div>
                
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="offset-3 col-6">
            <h5>Similar dishes</h5>
        </div>
    </div>
    @foreach ($similarDishes as $similarDish)
    <div class="row mb-5">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="text-center" style="background-color: #ccc">
                    <img src="{{$similarDish['image'] ? asset('storage/' . $similarDish['image']) : asset('/images/logo.png')}}" alt="" class="menu-image">
                </div>
                <div class="card-body">
                    @if(isset($similarDish['similarity']))
                        <h5 class="card-title">Similarity: {{ round($similarDish['similarity'] * 100, 1) }}%</h5>
                    @endif
                    <p class="card-text text-muted">{{ $similarDish['name'] }} (${{ $similarDish['price'] }})</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
