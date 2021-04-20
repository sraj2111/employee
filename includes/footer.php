<?php 
 include_once('configsys.php')
 ?>
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          
          <div class="copyright text-center my-auto">
         <a href="includes/t&c.php"> Terms and Conditions </a> | <a href="includes/aboutus.php"> About Us </a>
          <br><br>
            <span>Copyright &copy; <?php echo $comp_name;?> | <span id="year"></span></span>
          </div>
        </div>
        
        <script>

  var d = new Date();
  var n = d.getFullYear();
  document.getElementById("year").innerHTML = n;

</script>
      </footer>