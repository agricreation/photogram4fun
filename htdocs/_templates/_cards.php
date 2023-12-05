
<div class="containers">
<?php  $posts = Post::getAllPosts(); foreach ($posts as $post) { ?>
      <div class="box">
          <img src="<?php echo $post['image_uri'] ?>" alt="">
          <div class="d-flex box-like">
            <div class="box-like-heart">
              <div class="box-like-hearts">
              <i class="fa-regular fa-heart fa-xl"></i>
            </div>
            <div>
              <span>1</span>
            </div></div>
            <div>
            <p>5min ago</p>
            </div>
            <!-- <i class="fa-solid fa-heart"></i> -->
          </div>
          <div class="logo">
            <img src="https://www.agricreations.com/assets/img/logo.png" alt="">
            <span>Moovendhan</span>
          </div>
          <div class="d-flex box-heading">
            <span>Title Goes here</span>
          </div>
      </div>
      <?php } ?>
</div>      

  