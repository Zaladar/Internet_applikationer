<div class="column">
  <h3>Comments</h3>
  <script src="<?php echo base_url();?>/js/comments.js"></script>
  <?php if($this->session->userdata('logged_in')): ?>
  <div class="comments">
    <form action="<?php echo base_url().'recipes/delete'.$recipe?>" method="POST">
      <div class="ucomment">
        <label></label>
        <input class="comment" type="text" placeholder="Enter comment" name="comment" required autofocus>
        <button id="smallbtn" type="submit">Submit</button>
      </div>
    </form>
  </div>
  <?php endif; ?>
</div>
</div>
</div>



<br class="clr"/>
