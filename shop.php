<?php
  // include('config.php');
  include('mainheader.php');
  include('shopnavagation.php');
?>
<body>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
  <h2>Add Shop</h2>
  <form action="" method="POST" enctype="multipart/form-data">
     <div class="form-group">
       <select name="pro">
         <option>Select Store</option>
         </select>
    </div>

    <div class="form-group">
      <label>Shop Name</label>
      <input type="text" class="form-control" name="pname">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" class="form-control" name="pname">
    </div>
    <div class="form-group">
      <label>City</label>
      <input type="text" class="form-control" name="pname">
    </div>

    <input type="submit" name="submit" value="submit">
  </form>
</div>
</div>
</div><br><br><br><br><br><br><br><br><br>
<!-- footer start-->
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer><!-- footer end -->
</body>
