<h2><?php echo $post['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at'];?></small></br></br>
<div class="post-body">
  <?php echo $post['body']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<a class="btn btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
   <input type="submit" value="Delete" class="btn btn-danger">
   
</form>
</br>
