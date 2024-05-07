<?php




?>

<html>
    <head>
    <meta charset="utf-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="theme-color" content="#712cf9">
    </head>
</body>
<style>

    </style>
<main>
<div class="container">
  <div class="row">
    <div class="col-md-3">
  
      <div class="d-flex flex-column">
        
        <input type="text" placeholder="Recherche..." class="p-2 mx-2 my-3 border rounded w-100">

     
        <div class="list-group list-group-flush border-bottom scrollarea">
          
          <a href="#" class="list-group-item list-group-item-action py-3">
      
          </a>
   
        </div>

      
        <div class="d-flex justify-content-center mt-auto">
          <button class="btn btn-outline-primary me-2">&lt;</button>
          <span>Page 1</span>
          <button class="btn btn-outline-primary ms-2">&gt;</button>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      
      <div class="d-flex flex-column">
     
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
          </div>
        </nav>

       
        <div class="d-flex">
     
          <div class="flex-grow-1">
 
            <div class="iframe-container mt-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d..."></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main>
<script>
$(function() {
  $( ".calendar" ).datepicker({
		dateFormat: 'dd/mm/yy',
		firstDay: 1
	});
	
	$(document).on('click', '.date-picker .input', function(e){
		var $me = $(this),
				$parent = $me.parents('.date-picker');
		$parent.toggleClass('open');
	});
	
	
	$(".calendar").on("change",function(){
		var $me = $(this),
				$selected = $me.val(),
				$parent = $me.parents('.date-picker');
		$parent.find('.result').children('span').html($selected);
	});
});


</script>
</body>
</html>
