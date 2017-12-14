<div class="column">
  <h3>Comments</h3>
  <div id="comments">
  </div>
  <script>
  /*function commentEvent(target){
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
};*/

function dasEvent(target){// should be converted click -> submit
  target.on('submit',function(e) {
    e.preventDefault();
    var that = $(this),
    url = that.attr('action'),
    type = that.attr('method'),
    data = {};
    that.find('[name]').each(function(index, value) {
       var that = $(this),
       name = that.attr('name'),
       value = that.val();
       data[name] = value;
     });

    $.ajax({
    url: url,
    type: type,
    data: data,
    success: function(response) {
      $(that)[0].reset();
      loadComments();
      }
    });
  });
  return false;
};
dasEvent($('form.ajax'));
var trial= false;
if{!trial}{
  loadComments();
  trial=true;
}
function loadComments(e){
  $.ajax({
      type: "ajax",
      url: "<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>",
      async: true,
      dataType: 'json',
      success: function (result) {
          //var obj = $.parseJSON(result);
          var output='';
          for(var i=0; i< result.length;i++){
            output += '<div class="comments "><div class="ucomment"><small class="name">'+ result[i].username + '</small>';
            if( '<?php echo $this->session->userdata('username') ;?>' == result[i].username){
              output += '<form action="<?php echo base_url();?>recipes/delete/' + result[i].ID + '" method="POST">' + '<button type="submit" class="delete">&#9851</button></form>';
            }
            output += '</br><br class="clr"/><p class="comment">' + result[i].comment + '</p></div></div>';
          }
          $('#comments').html(output);
          dasEvent($('#comments form.ajax'));
      }
  })
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
