<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Restaurants site</title>
</head>
<body>
   <h1>This is edit!</h1>

   <form method="PUT" action="/restaurants/{{ $restaurant->id }}">
      @csrf
      @method('PATCH')
      <label for="title">Name :</label><br>
      <input type="text" name="name" id="title" value="{{ $restaurant->name }}" required><br>
      <label for="title">Address : </label><br>
      <input type="text" name="address" id="title" value="{{ $restaurant->address }}" required><br>
      <label for="title">Zip code : </label><br>
      <input type="text" name="zipCode" id="title" value="{{ $restaurant->zipCode }}" required><br>
      <label for="title">Town : </label><br>
      <input type="text" name="town" id="title" value="{{ $restaurant->town }}" required><br>
      <label for="title">Country : </label><br>
      <input type="text" name="country" id="title" value="{{ $restaurant->country }}" required><br>
      <label for="title">Description : </label><br>
      <input type="text" name="description" id="title" value="{{ $restaurant->description }}" required><br>
      <label for="title">Review : </label><br>
      <input type="text" name="review" id="title" value="{{ $restaurant->review }}" required><br><br>
      <input type="submit" value="Update"></input> 
   </form>
</body>
</html>