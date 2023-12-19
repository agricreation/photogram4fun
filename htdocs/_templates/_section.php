<?php
if (isset($_POST['post_text']) and isset($_FILES['post_image'])) {
    $image_tmp = $_FILES['post_image']['tmp_name'];
    $text = $_POST['post_text'];
    Post::registerPost($text, $image_tmp);
}
?>
<div class="accordion" id="accordionExample">
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       Share your memories
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      	<section class="py-1 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 mx-auto">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="currentColor"
				stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
				viewBox="0 0 24 24">
				<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
				<circle cx="12" cy="13" r="4" />
			</svg>
			<h1 class="fw-light poppins font-header">Photogram</h1>
			<p class="lead text-muted roboto color-blue">Freez your momment and save it here</p>
			<?php if(usersession::isAuthorised() == true){
				$user = session::get("user");
				echo $user;
				?>
			<form method="post" action="/" enctype="multipart/form-data">
			<div class="col-lg-6 col-md-8 mx-auto">
				<textarea id="post_text" name="post_text" class="form-control" placeholder="What are you upto?"
					rows="3"></textarea>
				<div class="input-group mb-3">
					<input type="file" accept="image/*" class="form-control" name="post_image" id="inputGroupFile02">
					<!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
				</div>
				<p>
					<button class="btn btn-success my-2" type="submit">Share memory</button>
				</p>
			</div>
		</form>
				<?php
			}else{
				?>
				<p>
				<a href="login.php" class="btn btn-primary my-2">Login</a>
				<a href="signup.php" class="btn btn-secondary my-2">Sign up</a>
			</p>
			<?php
			}
			?>
		</div>
	</div>
		</section>
      </div>
    </div>
  </div>
</div>



