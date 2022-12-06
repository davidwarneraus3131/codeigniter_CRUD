<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <title>Edit Your Games</title>
</head>
<style>
   body{
background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.1)),url(https://images.pexels.com/photos/924824/pexels-photo-924824.jpeg?auto=compress&cs=tinysrgb&w=600),no-repeat;
background-size:100%;

   }

   h1{
    color: #474bff;
    letter-spacing:2px;
    text-align:center;
    font-family:Fantasy,sans-serif;
    
   }
</style>
<body>

<form method="POST" action="<?=base_url('Mathi/Updateproduct/' .$product->id )?>">


<h1><u><?=$title?><u></h1>
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
      
          <input type="text" id="autocomplete-input" class="autocomplete" name="title" required><?=$product->title?>
          <label for="autocomplete-input">MODIFY YOUR TITLE</label>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
         
          <input type="text" id="autocomplete-input" class="autocomplete" name="description"><?=$product->description?>
          <label for="autocomplete-input">MODIFY YOUR DESCRIPTION</label>
        </div>
      </div>
    </div>
  </div>


  <button class="btn waves-effect waves-light" type="submit" name="submit">Submit </button>


</form>
    
</body>
</html>