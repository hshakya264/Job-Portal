<?php include 'header.php'?>
<?php include 'connection.php'?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">candidate Name</th>
      <th scope="col">Position Name</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $sql="SELECT `Name`,`Apply`,`Year` from `candidates`";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0)
    {
      while($rows=$result->fetch_assoc()){
        echo '
        <tr>
          <th scope="row">'.++$i.'</th>
          <th>'.$rows['Name'].'</th>
          <th>'.$rows['Apply'].'</th>
          <th>'.$rows['Year'].'</th>
        </tr>';
      }
    }
    else{
      echo"";
    }
    ?>
</tbody>
</table>
</div>