<?php include('admin/config/base-url.php'); ?>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Aplikasi Metode Enkrip AES</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Aplikasi Enkrip AES</p>
</footer>
<!-- Sweet Alert -->
<script src="sweetalert/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert/sweetalert2.min.css">

<script src="jquery/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function() { 
$("#formLogin").submit(function(e) {
var data = $("#formLogin").serialize();
  $.ajax({

        type : 'POST',
        url  : 'proses_login.php',
        data : data,
        success :  function(response){
          
          if (response == "success") {
            Swal.fire({
              icon: 'success',
              type: 'success',
              title: 'Success!',
              text: 'Login Berhasil',
              timer: 1000
            });
            setTimeout(function() {window.location.href = '<?= $base_url_back.'/index.php' ?>'}, 1000);
            
          }else{

            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Username atau password salah',
            });
            
            /* console.log(myJson);
            alert(myJson.status); */
            
          }
        }/*  */
        });
          return false;
    });
});
</script>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>