<style>



	.autocomplete {
	  	position: relative;
	  	display: inline-block;
	}

	input[type=text] {
		margin-top: -5px;
	  border: none;
	  background-color: transparent;
	  padding-left: 10px;
	  color:#fff;
	  height: 2.1em;
	  font-size: 14px;
	  border-top-left-radius: 5px;
	  border-bottom-left-radius: 5px;
	  border:1px solid #fff;
	}

	button[type=submit] {
		padding:2px 5px 8px 5px;
		height: 1.87em;
		position: relative;
		border:none;
		color: #fff;
		border:1px solid #fff;
		border-radius: 0;
		margin-top: -4px;
		border-left: none;
		border-top-right-radius: 5px;
	  	border-bottom-right-radius: 5px;
	}

	.autocomplete-items {
		cursor: pointer;
	  	position: absolute;
	  	border: 1px solid transparent;
	  	border-bottom:none;
	  	border-top: none;
	  	z-index: 99;
	  /*position the autocomplete items to be the same width as the container:*/
	  	top: 100%;
	  	left: 0;
	  	right: 0;
	  	background: #000000db;
      text-align: left!important;
      padding:1em 0.8em ;
	}




</style>
<!-- 
	<button class="nav-link searchbtn">
		<form class="" autocomplete="off" class="search_form">
		  	<div class="autocomplete searchitem">
		    	<input id="myInput" type="text" name="searchVal" placeholder="Search" style="float: left;">

		    	<button type="submit" class="btn btn-success searchitem">
		    		<i class="fas fa-search"></i>
				</button>
		  	</div>
		</form>
	</button> -->


	<form class="nav-link" autocomplete="off" class="search_form" action="sresults.php" style="color: #fff!important;">
		<div class="autocomplete">

		    <input id="myInput" type="text" name="searchword" placeholder="Search" required=""><!-- 
    --><button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
            </button>
		 </div>
	</form>


<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/*An array containing all the country names in the world:*/

var aray = <?php

            include('includes/dbConnect.php');
            $sugSQL = "SELECT * FROM store_product";

            $searchSug = $con->query($sugSQL);
            $usernames = array();
            while($rowSUG= $searchSug->fetch_assoc()){
        
                $usernames[] = $rowSUG['product_Name'];
            }
            echo json_encode( $usernames );
        ?>;








/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), aray);

</script>