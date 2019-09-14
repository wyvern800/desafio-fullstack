<template>
  <div>

    <form class="col-md-12" action="<?php echo URL::to('/');?>/post/<?=$post->postID?>" method="POST">
    <!-- Rendered blade HTML form use this hidden. Dont forget to put the form method to POST -->

    <input name="_method" type="hidden" value="PUT">

    <div class="form-group">
        <textarea type="text" class="form-control input-lg" placeholder="Text Here" name="post"><?=$post->post?></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="Edit">Edit</button>
    </div>
    </form>

    <form class="form-signin" method="POST" action="URL_OF_REST">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input id= "name" class="form-control" type="text" placeholder="Email address">
      <input class="form-control" type="password" placeholder="Password">
      <label class="checkbox"></label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </div>
</template>
