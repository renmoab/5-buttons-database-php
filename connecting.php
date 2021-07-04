<<?php


$hostname = "localhost" ;
$db = "smart methods "
$username = "user "
$password = "pass "


$conn = new PDO ("mysql:host = $hostname ; dbname = $db " , $username, $password );




if (!conn){

die ("connection failed :" .mysqli_connect_errno())
}

if (isset($_POST['the_stop'])){

$direction1= $_POST[the_stop];

$sql = $conn -> prepare(" insert into directions ( direction1) VALUES (:direction1)     ");

$conn->begintransaction();
$sql->execute(array(':direction1' =>$direction1 ));
                                  $conn->commit();
                                  $conn->null;
                                  header ("location: insert-button-values.php");
                                  exit;
                                   }







  elseif (isset($_POST['the_left'])) {

$direction2= $_POST[the_left];

$sql = $conn -> prepare(" insert into directions ( direction2) VALUES (:direction2)     ");

$conn->begintransaction();
  $sql->execute(array(':direction2' =>$direction2 ));
  $conn->commit();
    $conn->null;
      header ("location: insert-button-values.php");
    exit;
                                    }



    elseif (isset($_POST['the_right'])) {
    $direction3= $_POST[the_right];

    $sql = $conn -> prepare(" insert into directions ( direction3) VALUES (:direction3)     ");
  $conn->begintransaction();
      $sql->execute(array(':direction3' =>$direction3 ));
          $conn->commit();
        $conn->null;
      header ("location: insert-button-values.php");
      exit;
                                                                        }


  elseif (isset($_POST['the_backward'])) {
    $direction4= $_POST[the_backward];

      $sql = $conn -> prepare(" insert into directions ( direction4) VALUES (:direction4)     ");
    $conn->begintransaction();
      $sql->execute(array(':direction4' =>$direction4 ));
        $conn->commit();
        $conn->null;
          header ("location: insert-button-values.php");
        exit;



    elseif (isset($_POST['the_forward'])) {
    $direction5= $_POST[the_forward];

    $sql = $conn -> prepare(" insert into directions ( direction5) VALUES (:direction5)     ");
    $conn->begintransaction();
      $sql->execute(array(':direction5' =>$direction5 ));
        $conn->commit();
        $conn->null;
        header ("location: insert-button-values.php");
        exit;
                                                                                                                                            }




elseif ($direction1 ="" ||$direction2 ="" ||$direction3 ="" ||$direction4 ="" ||$direction5 =""  ) {

  echo "not saved";
                                    }
}

 ?>
