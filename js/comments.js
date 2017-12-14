<script>
$(document).ready(function() { //remember to put document.ready function when you are using jquery then insert your jquery functions inside.
  function commentEvent(target){// should be converted click -> submit
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
      return false;
    });
    return false;
  });
commentEvent($('form.ajax'));
alert("<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>");
function loadComments(e){
  $.ajax({
      type: "ajax",
      url: "<?php echo base_url();?>recipes/retrieve/<?php echo $recipe ?>",
      async: true,
      dataType: 'json',
      success: function (result) {
          var output='';
          for(var i=0; i< result.length;i++){
            output += '<div class="comments "><div class="ucomment"><small class="name">'+ result[i].username + '</small>';
            if( '<?php echo $this->session->userdata('username') ;?>' == result[i].username){
              output += '<form action="<?php echo base_url();?>recipes/delete/' + result[i].ID + '" method="POST">' + '<button type="submit" class="delete">&#9851</button></form>';
            }
            output += '</br><br class="clr"/><p class="comment">' + result[i].comment + '</p></div></div>';
          }
          $('#comments').html(output);
          commentEvent($('#comments form.ajax'));
      }
  });
  return false;
};
});
</script>
