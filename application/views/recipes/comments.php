
<div class="column">
  <h3>Comments</h3>
  <div id="comments">
  </div>
  <script>
  function commentEvent(target){
  target.on('submit', function(e) {
    e.preventDefault();
    var that = $(this),
    url = that.attr('action'),
    type = that.attr('method'),
    data = {};
    // Base url for the site.
    base_url = 'https://hazze.misse.org/tastymvc/';
    // Fetches all the data from the forms parts that has a name attribute and saves them.
    that.find('[name]').each(function(index, value) {
      var that = $(this),
      name = that.attr('name'),
      value = that.val();
      data[name] = value;
    });
    // Send data to the targeted function to handle it.
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $(that)[0].reset();
        showComments();
      }
    });
  });
  return false;
};
  </script>

  <?php if($this->session->userdata('logged_in')): ?>
  <div class="comments">
    <form action="<?php echo base_url().'recipes/create/'.$recipe?>" method="POST">
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
