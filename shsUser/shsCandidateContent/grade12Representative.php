<div id="g12rep" class="container tab-pane fade"><br> 
  <h2><i>GRADE 12 REPRESENTATIVES(S)</i></h2>
  <br>
        
    <div class="con">

      <?php			
        include ('../dbconn.php');
        
        $sql = "SELECT * FROM shs_candidates WHERE position = 'G-12 REP'";
        $result = $conn->query($sql);
                
        if ($result->num_rows > 0) {
          while($row = $result->fetch_array()) {
      ?>

      <div class="card card_size" style="width: 500px;">
        <img class="card-img-top candidate_img" src="../uploads/<?php echo $row['picture']?>" alt="candidate image">
          <div class="card-body">
            <h4 class="card-title"><b><?php echo $row['position']?></b></h4>
            <p class="card-text">Name: <?php echo $row['name']?></p>
            <button data-bs-toggle="modal" data-bs-target="#grade12RepModal<?php echo $row['candidateID']?>" class="btn btn-primary" data-id="<?php echo $row['candidateID']?>">See profile</button>
            <!--MODAL PROFILE-->
            <?php include 'shsCandidateModals/grade12Representative-Modal.php'; ?>
              <!--MODAL PROFILE-->
          </div>
      </div>

      <?php	
        }		
        $conn->close();
        }
      ?>  

    </div>  

</div>

