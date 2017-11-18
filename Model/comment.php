<?php
include 'init/config.php';
session_start();
$sql = "SELECT ID, username, recipie, comment FROM comments WHERE recipie='meatballs'";
$result = $conn->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '<div class="comments">';
    echo '<div class="ucomment">';
        echo ('<small class="name">'.$row['username']'</small>');
        if($_SESSION['login_user']== $row['username']){
          echo(' <form action="/Model/delete.php"><input type="hidden" name="id" value="'.$row['ID']'"><button type="submit" style="float:right">Delete</button></>form><br/>');}
        echo '<br class="clr"/>';
        echo ('<p class="comment">'.$row['comment']'</p>');
    echo'</div>';
echo'</div>';
}
$conn->close();
?>
