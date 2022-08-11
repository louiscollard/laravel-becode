<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Restaurants site</title>
</head>
<body>
   <h1>This is create!</h1>

   <form method="POST" action="/restaurants">
      @csrf
      <label for="title">Name :</label>
      <input type="text" name="name" id="title" required><br>
      <label for="title">Address : </label>
      <input type="text" name="address" id="title" required><br>
      <label for="title">Zip code : </label>
      <input type="text" name="zipCode" id="title" required><br>
      <label for="title">Town : </label>
      <input type="text" name="town" id="title" required><br>
      <label for="title">Country : </label>
      <input type="text" name="country" id="title" required><br>
      <label for="title">Description : </label>
      <input type="text" name="description" id="title" required><br>
      <label for="title">Review : </label>
      <input type="text" name="review" id="title" required><br>
      <input type="submit" value="Submit"></input> 
   </form>
</body>
</html>