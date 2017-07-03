<?php  $page_title = "Calculator";
include_once('inc/header.php');

?>
<div class="container col-lg-4">
  <form action = "resources/ParseMath.php" method = "post">
    <div class="form_group">
      <label for="IntOne">Input1: </label>
      <input type = "number" name = "IntOne" class="form-control" placeholder="Input1...">
      </div>
    <div class="form_group">
      <label for="IntTwo">Input2: </label>
      <input type = "number" name = "IntTwo" class="form-control" placeholder="Input2...">
      </div>
    <button type="submit" class="btn btn-default">Add</button>
    <button type="submit" class="btn btn-default">Subtract</button>
    <!--<input type = "submit" name = "add" value = "Add"> 
    <input type = "submit" name = "subtract" value = "Subtract">-->
  </form>
</div>
<?php include_once('inc/footer.php');

?>