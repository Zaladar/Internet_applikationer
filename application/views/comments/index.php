<?php foreach ($comments as $comments_item): ?>

  foreach($query->result_array() as $row){
      echo $row['someContent'];

        <h3><?php echo $commentsitem['title']; ?></h3>
        <div class="main">
                <?php echo $comments_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$comments_item§['slug']); ?>">View article</a></p>

<?php endforeach; ?>

<?php //detta ska ske
include 'init/config.php';
session_start();
$sql = "SELECT ID, username, recipie, comment FROM comments WHERE recipie='meatballs'";
$result = $conn->query($sql);
// output data of each row

while($row = $result->fetch_assoc()) {
  echo '<div class="comments">';
  echo '<div class="ucomment">';
  echo ('<small class="name">'.$row['username'].'</small>');
  if($_SESSION['login_user']== $row['username']){
    echo(' <form action="/Model/delete.php" method="post">
    <input type="hidden" name="recipie" value="meatballs">
    <input type="hidden" name="id" value="'.$row['ID'].'">
    <button type="submit" class="delete">&#9851</button></form><br/>');}
  echo '<br class="clr"/>';
  echo ('<p class="comment">'.$row['comment'].'</p>');
  echo'</div>';
  echo'</div>';
}
$conn->close();
?>

<div class="comments">
  <form id="comm" action="/Model/commentinput.php" method="post">
    <div class="ucomment">
      <label></label>
      <input type="text" placeholder="Enter comment" name="comment" style="height 60 px" required>
      <input type="hidden" name="recipie" value="meatballs">
      <button id="smallbtn" type="submit">Submit</button>
    </div>
  </form>
</div>
</div>
