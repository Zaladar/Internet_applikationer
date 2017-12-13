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

<script>
$(document).ready(function(){ //remember to put document.ready function when you are using jquery then insert your jquery functions inside.
    $('#trialbtn').click(function (){// should be converted click -> submit
        $.ajax({
            url: "<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>",
            dataType: 'json',
            type: "GET",
            success: function (result) {
                //var obj = $.parseJSON(result);
                var output='';
                for(var i=0; i< result.length;i++){
                  output += '<div class="comments "><div class="ucomment"><small class="name">'+ result[i].username + '</small>';
                  if(true){
                    output += '<form action="<?php echo base_url();?>recipes/delete/' + result[i].ID + '" method="POST">' + '<button type="submit" class="delete">&#9851</button></form>';
                  }
                  output += '<p class="comment">' + result[i].comment + '</p></div></div>';
                }
                $('#trial').html(output);
                /*'<div class="comments "><div class="ucomment"><small class="name"></small><p></p><button type="submit" class="delete">&#9851</button></div></div>'
                $.each(obj,function(index, object) {
                    $('#trial').html('<li>' + object['username'] + '</li>');
                });*/
            }
        })
    });
});
</script>
<div class="ucomment" id="trial">
</div>
<button id ="trialbtn">try this</button>

</div>
</div>
</div>



<br class="clr"/>
