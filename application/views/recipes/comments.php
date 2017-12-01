<div class="column">


  <h3>Comments</h3>
  <?php //copy this?>
  <?php foreach($comments as $comment) : ?>
  <div class="comments ">
    <div class="ucomment">
      <small class="name"> <?php echo $comment['username'] ?> </small>
        <?php if(($this->session->userdata('logged_in'))&&(if($data['username']==$comment['username']);)) : ?>
        <div class="comments ">
          <div class="ucomment">
            <?php echo form_open('users/login', 'class="modal-content animate"' ); ?>
            <form>
            <input type="hidden" name="id" value="<?php echo $comment['ID']; ?>">
            <button type="submit" class="delete"> &#9851 </button>
            </form><br/>
            <?php echo form_close(); ?>
          </div>
        </div>
        <?php endif; ?>
        <br class="clr"/>
      <p class="comment"> <?php echo $comment['comment']; ?> </p>
    </div>
  </div>
  <div class="comments">
    <?php echo form_open('recipes/create', 'class="modal-content animate"' ); ?>
    <form id="comm">
      <div class="ucomment">
        <label></label>
        <input class="comment" type="text" placeholder="Enter comment" name="comment" required autofocus>
        <input type="hidden" name="recipe" value="<?php echo $data['recipe'] ?>">
        <button id="smallbtn" type="submit">Submit</button>
      </div>
    </form>
    <?php echo form_close(); ?>
  </div>
</div>
</div>
</div>
<br class="clr"/>
<!--<?php
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
    echo(' ');}
  echo '<br class="clr"/>';
  echo ('<p class="comment">'.$row['comment'].'</p>');
  echo'</div>';
  echo'</div>';
}
$conn->close();
?>
