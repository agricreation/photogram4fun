
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }

    .containers {
      width: 100%;
      margin: 20px auto;
      /* columns: 4; */
      column-gap: 20px;
      padding: 0 10px;
    }

    .box {
      cursor: pointer;
      position: relative;
      background-color: #6495ed2e;
      padding: 10px;
    }

    .containers .box {
      width: 100%;
      margin-bottom: 10px;
      break-inside: avoid;
      border-radius: 5px;
    }

    .containers .box img {
      width: 100%;
      border-radius: 20px;
    }

    .logo {
      display: flex;
  align-items: center;
  padding: 10px 0;
  font-size: 12px;
  position: absolute;
  top: 20px;
  right: 50%;
  opacity: 0;
  background-color: #ffffffb2;
  border-radius: 0 100px 100px 0;
  transition: 0.5s;
  margin-left: 10px;
    }

    .box:hover .logo {
      opacity: 100%;
      transition: 0.5s;
      cursor: pointer;
    }

    .logo img {
      width: 20% !important;
      margin-right: 10px;
      height: auto;
    }

    .box-heading {
      font-size: 14px;
      max-height: 3em;
      /* Set the maximum height for two lines */
      overflow: hidden;
    }

    .box-heading p {
      white-space: nowrap;
    }

    .box-like {
      padding: 15px 0;
    }

    .box-like-heart {
      display: flex;
      padding-right: 10px;
      align-items: center;
      justify-content: center;
    }

    .box-like-hearts {
      padding-right: 10px;
    }

    .d-flex {
      display: flex;
      justify-content: space-between;
    }
@media (min-width: 576px) { 
  .containers {
      columns: 1;
    }
}
@media (min-width: 768px) { 
  .containers {
      columns: 3;
    }
 }
@media (min-width: 992px) {   .containers {
      columns: 4;
    } }

  </style>
</head>

<body>
  <div class="containers">
  <?php $posts = Post::getAllPosts();
  foreach ($posts as $post) { ?>
    <div class="box doubleTapLike">
      <img src="<?php echo $post['image_uri'] ?>" alt="">
      <div class="d-flex box-like">
        <div class="box-like-heart">
          <div class="box-like-hearts">

            <i class="heartIcon fa-regular fa-heart fa-xl" style="color: #d20fd1;"></i>

          </div>
          <div>
            <span>1</span>
          </div>
        </div>
        <div>
          <!-- <p>5min ago</p> -->
        </div>
        <!-- <i class="fa-solid fa-heart"></i> -->
      </div>
      <div class="logo">
        <img src="https://www.agricreations.com/assets/img/logo.png" alt="">
        <span><?php echo $post['owner'] ?></span>
      </div>
      <div class="d-flex box-heading">
        <span><?php echo $post['post_text'] ?></span>
        <?php if($post['owner'] == session::get("user")){
          echo '<div class="box-like-hearts">
                    <i class="fa-solid fa-trash"></i>
              </div>';
        }
       ?>
      </div>

    </div>
    <?php } ?>
  </div>
  <script>
    $(document).ready(function() {
        $('.heartIcon').click(function() {
            $(this).toggleClass('fa-regular fa-solid');
        });
    });
</script>
