
	
<form action="page3.php" method="post">
  <input type="checkbox" id="Youth" name="Age1" value="12-20">
  <label for="Youth"> 12-20 </label><br>
  <input type="checkbox" id="Young Adult" name="Age2" value="20-30">
  <label for="Young Adult"> 20-30</label><br>
  

   <input type="hidden" name="AdType" value="<?php echo $_POST['AdType'];?>"> 
  <input type="submit" value="Next">
</form>