<style>

.dropdown-content{
  display: none;
  position: absolute;
  background-color: #000000db;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.Productsdrop:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  float: none;
  color: #FFF;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

</style>
<div id="backtotopher" style="position: absolute;top: 0;"></div>

<button href="#" class="crunchify-top" id="crunchify-top" onClick="document.getElementById('backtotopher').scrollIntoView({behavior: 'smooth', block: 'end', inline: 'nearest'});">↑</button>


<header class="navigationBar" id="navigationBar" >

  <nav class="navbar navbar-expand-md fixed-top font-weight-bold">

    

    <a class="navbar-brand nav-link p-2 logo" href="index.php">
      <img src="IMG/logo.png">
      <?php echo $storename; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item navabout">
          <button class="nav-link gotodiv" href="#"  onClick="document.getElementById('About_Us_main').scrollIntoView({behavior: 'smooth', block: 'end', inline: 'nearest'});">
            &nbsp;<i class="fas fa-info-circle"></i>&nbsp; About Us
          </button>
        </li>
        <li class="nav-item Productsdrop">
          <a class="nav-link dropbtn"  href="#" >
            &nbsp;<i class="fas fa-shopping-cart"></i>&nbsp; Products
          </a>


          

              <div class="dropdown-content">
                <a href="product.php?category=all">All Products</a>

                <?php 
                  $productSQL = "SELECT * FROM store_categories";
                    $prs = $con->query($productSQL);
                    while($prow = $prs->fetch_assoc()) 
                {?>


                  <a href="product.php?category=<?php echo $prow["categort_ID"];?>"><?php echo $prow["category_Name"] ;?></a>

                <?php } ?>
              </div>


        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">
            &nbsp;<i class="far fa-newspaper"></i>&nbsp; News
          </a>
        </li> -->
        <li class="nav-item">
          <button class="nav-link"   class="go_to_contacts"    onClick="document.getElementById('site_Details').scrollIntoView({behavior: 'smooth', block: 'end', inline: 'nearest'});">
            &nbsp;<i class="fas fa-address-book"></i>&nbsp; Contact
          </button>
        </li>

        <li class="nav-item" style="float: right;">
          <?php include('includes/search.php'); ?>
        </li>
       
      </ul>
      
    </div>
  </nav>

  <nav class="sidenav" id="sidenav"></nav>


</header>

<button class="mobilenum" data-toggle="modal" data-target="#callus">
    <i class="fas fa-phone"></i>
</button>




<!-- The Modal -->
<div class="modal" id="callus" style="top: 30%;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Want to reach us?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;0113037627
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="background: #25d366;border-color: #25d366;">Close</button>
      </div>

    </div>
  </div>
</div>


<script>

$(document).scroll(function() {
  var y = $(this).scrollTop();

  if(y > 120){
    $(".navbar").css("position","relative");
  }

  if(y > 120){
    $(".navbar").css("position","fixed");
    
  }

  if(y < 120){
    $(".navbar").css("position","relative");
    
  }

  if (y > 600) {
    $('.navbar').css({ 'background-color':'#000000db',
    'transition': '0.4s' });
  } else {
    $('.navbar').css({ 'background-color':'#000000db'});
  }
});

$(document).on('click','.gotodiv', function(event) {
    event.preventDefault();
    var target = "#" + this.getAttribute('data-target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 2000);
});

</script>

