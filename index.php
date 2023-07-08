<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<div class="content">
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    POST JOB
</button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="connection.php" method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
    </div>
  <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" class="form-control" id="Position" name="position">
  </div>
  <div class="mb-3">
    <label for="job desc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="job desc" name="job_desc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="final">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Post</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="SELECT `Company Name`, `Position` , `CTC` from `job`";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0)
      {
        while($rows=$result->fetch_assoc())
        {
          echo
          "<tbody>
            <tr>
              <td> ".++$i." </td> 
              <td> ".$rows['Company Name']." </td>
              <td> ".$rows['Position']." </td>
              <td> ".$rows['CTC']." </td>
            </tr>
          </tbody>";
        }
      }
      else{
        echo"";
      }
    ?>
  </tbody>
</table>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>