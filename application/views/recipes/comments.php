<div class="column">
  <h3>Comments</h3>
  <div id="comments"></div>
  <script>
  $(document).ready(function(){
  function commentEvent(target){
  target.submit( function(e) {
    e.preventDefault();
    var that = $(this),
    url = that.attr('action'),
    type = that.attr('method'),
    data = {};
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

// Add first event listerner
commentEvent($('form'));

function showComments(e){
  $.ajax({
    type: 'ajax',
    url: "<?php echo base_url();?>recipes/retrieve",
    async: true,
    dataType: 'json',
    success: function(result){
      var output = '';
      for(var i=0; i< result.length;i++){
        output += '<div class="comments "><div class="ucomment"><small class="name">'+ result[i].username + '</small>';
        if( '<?php echo $this->session->userdata('username') ;?>' == result[i].username){
          output += '<form action="<?php echo base_url();?>recipes/delete/' + result[i].ID + '" method="POST"><button type="submit" class="delete">&#9851</button></form>';
        }
        output += '</br><br class="clr"/><p class="comment">' + result[i].comment + '</p></div></div>';
      }
      // Replace the old content of #comments with the newly fetched comments.
      $('#comments').html(output);
      // Add event listerner to the new comments.
      commentEvent($('#comments form'));
    },
    error: function(){
      alert('could not get data from database');
    }
  })
  return false;
};
showComments();
  });
  </script>

  <?php if($this->session->userdata('logged_in')): ?>
  <div class="comments">
    <form action="<?php echo base_url(); ?>recipes/create" method="POST">
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
