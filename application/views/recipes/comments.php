<div class="column">


  <h3>Comments</h3>
  <?php foreach($comments as $comment) : ?>
  <div class="comments ">
    <div class="ucomment">
      <small class="name"> <?php echo $comment['username'] ?> </small>
        <?php if( ($this->session->userdata('logged_in'))&&($data['username']==$comment['username'])) : ?>
        <div class="comments ">
          <div class="ucomment">
            <?php echo form_open('recipes/delete'); ?>
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
  <?php endforeach; ?>
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
