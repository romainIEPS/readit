<?php
/*
  ./app/templates/comments/_addForm.php
*/
?>
<div class="comment-form-wrap pt-5">
  <h3 class="mb-5">Leave a comment</h3>
  <form action="?comments=add" class="p-5 bg-light" method="post">
    <div class="form-group">
      <label for="name">Name *</label>
      <input type="text" name="pseudo" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="content" id="message" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="postID" value="<?php echo $post['id']; ?>" />
      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
    </div>

  </form>
</div>
