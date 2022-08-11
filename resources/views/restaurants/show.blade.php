<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Restaurants site</title>
</head>
<body>
   <h1>This is show !</h1>

   @foreach($restaurants as $key => $restaurant)
    <h2>{{ $restaurant->name }}</h2>
    <p>
      {{ $restaurant->address }}</br>
      {{ $restaurant->zipCode }}</br>
      {{ $restaurant->town }}</br>
      {{ $restaurant->country }}</br>
      {{ $restaurant->description }}</br>
      {{ $restaurant->review }}</br>
   </p>
   @endforeach
</body>
</html>