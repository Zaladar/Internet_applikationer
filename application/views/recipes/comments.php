

<script>
$(document).ready(function(){ //remember to put document.ready function when you are using jquery then insert your jquery functions inside.
    $('#trialbtn').click(function (){// should be converted click -> submit
        $.ajax({
            url: "<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>",
            dataType: 'text',
            type: "POST",
            success: function (result) {
                //var obj = $.parseJSON(result);
                var output='';
                for(var i=0; i< $result.length;i++){
                  output += '<div class="comments "><div class="ucomment"><small class="name">'
                  + result[i].username; + '</small>'
                  if(<?php echo $this->session->userdata('logged_in') ;?>){
                    output += 'form action="<?php echo base_url();?>"recipes/delete/"' + result[i].ID +'method="POST">'
                    + '<button type="submit" class="delete">&#9851</button></form>';
                  }
                  + '<p class="comment">' + result[i].comments + '</p>';
                }
                '<div class="comments "><div class="ucomment"><small class="name"></small><p></p><button type="submit" class="delete">&#9851</button></div></div>'
                /*$.each(obj,function(index, object) {
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
