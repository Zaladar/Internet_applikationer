<div class="column">
  <h3>Comments</h3>
  <?php foreach($comments as $comment) : ?>
  <div class="comments ">
    <div class="ucomment" id="ctrial">
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
    $('#trialbtn').on('click',function (){// should be converted click -> submit
        $.ajax({
            url: "<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>",
            dataType: 'text',
            type: "POST",
            success: function (result) {
                var obj = $.parseJSON(result);
                $.each(obj,function(index, object) {
                    $('#trial').html('<li>' + object['username'] + '</li>');
                });
            }
        })
    });

/*
    $('#items_form').submit(function (e) {
        e.preventDefault();
        var yourItem = $('#item_name').val();
        $.ajax({
            url: "<?php echo base_url();?>/cashbook/new_item",
            type: 'POST',
            data: {data:yourItem},
            success: function (data) {
                alert('THIS WORKED');

            },
            error: function () {
                alert('Nah died');
            }

        })
    });
*/
});
/*
$(document).ready(function(){
    $("#trialbtn").click(function(){
        /*$("#trial").load("<?php echo base_url(); ?>recipes/retrieve/<?php echo $recipe ?>", function(){
          var worker_template = $('<div class="comments "><div class="ucomment"><small class="name"></small><p></p><button type="submit" class="delete">&#9851</button></div></div>');
          var template = worker_template.clone();
          template.find('.name').text(worker.name);
          if(!worker.can_delete) { template.find('.delete').hide() }
        });
        $.get("<?php echo base_url(); ?>recipes/retrieve/meatballs", function(worker){
           $("#trial").each(function(i, worker){
              var worker_template = $('<div class="comments "><div class="ucomment"><small class="name"></small><p></p><button type="submit" class="delete">&#9851</button></div></div>');
              var template = worker_template.clone();
              template.find('.name').text(worker['username']);
              //can_delete är en variabel i arrayen som inte är fixad
              //if(!worker.can_delete) { template.find('.delete').hide() }

           });
       });
    });
});*/
</script>
<div class="ucomment" id="trial">
</div>
<button id ="trialbtn">try this</button>

</div>
</div>
</div>



<br class="clr"/>
