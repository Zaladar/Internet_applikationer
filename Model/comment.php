<?php
include 'init/config.php';
session_start();
$sql = "SELECT ID, username, comment FROM comments WHERE recipie = '$myusername'";
$result = $conn->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
  echo '<div class="comments">';
    echo '<div class="ucomment">';
        echo '<small class="name">'$row['username']'</small>';
        echo '<small class="date" style="display:hidden">'$row['ID']'</small><br/>';
        echo '<br class="clr"/>';
        echo '<p class="comment">'$row['comment']'</p>';
    echo'</div>'
echo'</div>'
}
$conn->close();
?>


<?php
