<?php 
include('configsys.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.164);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #5e91ff;
  color: white;
}
h1{
  text-transform: uppercase;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: blue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About <?php echo $comp_name;?></h1>
  <p><?php echo $abtpage_tag; ?></p>
  <p><?php echo $abtpage2_tag; ?></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
      <h2><?php echo $emp1_name; ?></h2>
        <p class="title"><?php echo $emp1_deg; ?> | <?php echo $comp_name;?></p>
        <p><?php echo $emp1_abt?></p>
        <p><?php echo $emp1_email;?></p>
        <p><a href="mailto:<?php echo $emp1_email;?>subject=Contact"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2><?php echo $emp2_name; ?></h2>
        <p class="title"><?php echo $emp2_deg; ?> | <?php echo $comp_name;?></p>
        <p><?php echo $emp2_abt?></p>
        <p><?php echo $emp2_email;?></p>
        <p><a href="mailto:<?php echo $emp2_email;?>subject=Contact"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2><?php echo $emp3_name; ?></h2>
        <p class="title"><?php echo $emp3_deg; ?> | <?php echo $comp_name;?></p>
        <p><?php echo $emp3_abt?></p>
        <p><?php echo $emp3_email;?></p>
        <p> <a href="mailto:<?php echo $emp3_email;?>subject=Contact"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2><?php echo $emp4_name; ?></h2>
        <p class="title"><?php echo $emp4_deg; ?> | <?php echo $comp_name;?></p>
        <p><?php echo $emp4_abt?></p>
        <p><?php echo $emp4_email;?></p>
        <p><a href="mailto:<?php echo $emp4_email;?>subject=Contact"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>

</html>

<a href=
"mailto:boss@workmail.com?cc=secretary@workmail.com&subject=Emergency"
> </a>