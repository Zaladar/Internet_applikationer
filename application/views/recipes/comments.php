<div class="column">
  <h3>Comments</h3>
  <script src="<?php echo base_url();?>/js/comments.js"></script>
  <?php if($this->session->userdata('logged_in')): ?>
  <div class="comments">
    <?php echo form_open('recipes/create/'.$recipe, 'class="comment"' ); ?>
      <div class="ucomment">
        <label></label>
        <input class="comment" type="text" placeholder="Enter comment" name="comment" required autofocus>
        <button id="smallbtn" type="submit">Submit</button>
      </div>
    <?php echo form_close(); ?>
  </div>
  <?php endif; ?>
</div>
</div>
</div>



<br class="clr"/>
