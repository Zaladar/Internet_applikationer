<div class="column">
  <h3>Comments</h3>
  <?php foreach($comments as $comment) : ?>
  <div class="comments ">
    <div class="ucomment">
      <small class="name"> <?php echo $comment['username']; ?> </small>
        <?php if( ($this->session->userdata('logged_in'))&&($this->session->userdata('username')==$comment['username'])) : ?>

            <?php echo form_open('recipes/delete/'.$comment["ID"]); ?>
            <button type="submit" class="delete">&#9851</button>
            <?php echo form_close(); ?><br/>
        <?php endif; ?>
        <br class="clr"/>
      <p class="comment"> <?php echo $comment['comment']; ?> </p>
    </div>
  </div>
  <?php endforeach; ?>
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
<script src="<?php echo base_url();?>js/comments.js"></script>
<div class="comments">
  <form action="<?php echo (base_url()).'recipes/create/'.$recipe;?>">
    <div class="ucomment">
      <label></label>
      <input class="comment" type="text" placeholder="Enter comment" name="comment" required autofocus>
      <button id="smallbtn" type="submit">Submit</button>
    </div>
  </form>
</div>
<script>
$(document).ready(function() { //remember to put document.ready function when you are using jquery then insert your jquery functions inside.
    target.submit(function (){// should be converted click -> submit
        alert("hello world");
        target.on('submit', function(e) {
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
});
eventHandler($('form.ajax'));
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
          cEvent($('#comments form.ajax'));
      }
  })
};
});
</script>
if( '<?php echo $this->session->userdata('username') ;?>' == result[i].username){
  output += '<form action="<?php echo base_url();?>recipes/delete/' + result[i].ID + '" method="POST">' + '<button type="submit" class="delete">&#9851</button></form>';
}
<div class="ucomment" id="trial">
</div>
<button id ="trialbtn">try this</button>

</div>
</div>
</div>



<br class="clr"/>
