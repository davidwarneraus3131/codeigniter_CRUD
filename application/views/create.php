<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <title>Document</title>
</head>

<style>
h1{
    display:grid;
    place-items:center;
   
}

body{

 
  background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.1)),url(https://media.istockphoto.com/id/1343625896/photo/empty-futuristic-city-corridors-with-cyborg-soldiers.jpg?b=1&s=612x612&w=0&k=20&c=pTK2hT0VS75rb_M2k8MKVPear1f0WTgHoaKt8kiimJs=),no-repeat;
  
}

.row{
    margin-left:380px;
}
</style>
<body>
   


    
<form action="<?=base_url('Mathi/storedata')?>" method="POST">
<h1>Create a  New game</h1>

<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="https://3.bp.blogspot.com/-tjvWJwWS96Y/Wpl58SQgKiI/AAAAAAAAAaU/A9WuzE2AGYMFWUVWKKK0pkh0UIndg4kfQCLcBGAs/s1600/x%2Bmen%2B1.jpg">
          <span class="card-title">THe Wolverine</span>
        </div>
        <div class="card-content">
        <input type="text" name="title" placeholder="Enter Game Title"><br><br>
        <textarea name="description" rows="10" placeholder="Enter GAme Description"></textarea>

        </div>
        <div class="card-action">
        <button class="btn waves-effect waves-light" type="submit" name="action">SAVE
    
  </button>
        
        </div>
      </div>
    </div>
  </div>


</form>
</body>
</html>