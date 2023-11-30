<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <title>Document</title>
</head>
<body>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
              <div class="row">

            @foreach ($produits as $item)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/'.$item -> photo)}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{ $item -> prix }} DH</h5>
                  <p class="card-text"> {{ $item -> description }}</p>
                </div>
              </div>
            @endforeach
        </div>
              </div>
        </div>
    </div>
    </div>

    </div>
    
</body>
</html>
