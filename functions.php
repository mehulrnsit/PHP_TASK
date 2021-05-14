<?php
	include 'dbConnection.php';
	 $con = getdb();
     if(isset($_POST["submit"])){
        
      $filename=$_FILES["file"]["tmp_name"];    
        if($_FILES["file"]["size"] > 0)
        {
          $file = fopen($filename, "r");
    
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
              {
                  $sql = "INSERT into imageFolder (id,urlLink) values ('".$getData[0]."','".$getData[1]."')";
                  $result = mysqli_query($con, $sql);
          if(!isset($result))
          {
            echo "<script type=\"text/javascript\">
                alert(\"Invalid File:Please Upload CSV File..\");
                window.location = \"index.php\"
                </script>";    
          }
          else {
              echo "<script type=\"text/javascript\">
              alert(\"Images are being uploaded, you'll get an email when it's done\");
              window.location = \"index.php\"
            </script>";
        }
                
      }
      fclose($file);  
      
    }
  }     

?>