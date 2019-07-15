	<?php 
	$result = mysql_query("SELECT * FROM blog");
	 ?>

	<h3 class="title-w3ls text-center text-bl mb-5">Blog</h3>
			<div class="container">
		

				<div class="row">
			<?php  	while($row = mysql_fetch_array($result)) { ?>	
					<div class="col-sm-4">
					
						<div class="image-blog">
							<img src="blog/img/<?php echo $row['image_link']; ?>" alt="">
						</div>	
						<div class="blog-artical">
							<p style="text-align: center; font-size: 10px;"><span > <?php echo $row['date'] ?></span></p>
							<h5><a href="blog.php?view=view_blog&id=<?php echo $row['blogid']; ?>"><?php echo $row['title'] ?></a></h5>
							<p><?php echo $row['description'] ?>...</p>
						</div>

					
					</div>
					<?php } ?>

					</div> <!--roww --> 

			</div>
	     
  	 <hr>