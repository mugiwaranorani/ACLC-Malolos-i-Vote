<div class="text-start" style="margin-top: -25px;"><br>
  <?php			
    include ('../../../../dbconn.php');
    $sql = "SELECT * FROM shs_home WHERE homecontentID = 'systemGuide' AND device ='Desktop'";
    $result = $conn->query($sql);
                                            
    if ($result->num_rows > 0) {
      while($row = $result->fetch_array()){
        $imageVisibility = ($row['homeImages'] > 0) ? "<img src='../../../../uploadsHome/" . $row['homeImages'] . "' class='imageHome line-shadow mb-3'>" : "";
  ?>
    <div class="container home-content p-3 mb-4">                           
      <h4><?php echo nl2br($row['contentHeader'])?></h4>
      <p><?php echo nl2br($row['content'])?></p>
      <?php echo $imageVisibility ?>
        
      <div class="d-flex flex-row-reverse">
        <form action="#" methd="POST">
          <a class="btn btn-primary px-4" href="systemGuide-Edit.php?id='<?php echo $row['homeID']?>'">Edit</a>
          <a class="btn btn-danger px-3" href="systemGuide-Delete.php?id='<?php echo $row['homeID']?>'">Delete</a>
        </form>
      </div>
    </div>

  <?php	
    }		
      $conn->close();
    }
  ?>
</div>

<form action="systemGuide-Add.php" methd="POST">
  <button class="btn btn-outline-primary">Add Content</button>
</form>


