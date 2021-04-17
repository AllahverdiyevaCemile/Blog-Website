<aside id="aside" class="col-md-4">
                    
                    <div class="widget">
						<div class="widget-search">
							<input class="search-input form-control" type="text" placeholder="Search">
							<button class="search-btn" type="button"><i class="fas fa-search"></i></button>
						</div>
					</div>
					<!-- /Search -->
                    
                    
					<!-- Category -->
					<div class="widget">
						<h3 class="mb-3">Categories</h3>
						<div class="widget-category">
                            <?php
                            $sql_query="SELECT * FROM categories";
                            $select_all_categories=mysqli_query($conn,$sql_query);
                            while($row=mysqli_fetch_assoc($select_all_categories)){
                                $category_name = $row['category_name'];

								$sql_query2="SELECT * FROM posts WHERE post_category = '$category_name'";
								$send_category_query=mysqli_query($conn,$sql_query2);
								$count_category_post=mysqli_num_rows($send_category_query);

                                echo "<a href='category.php?category=$category_name'>{$category_name}<span>{$count_category_post}</span></a>";
                            }
                            ?>
							<!-- <a href="#">Web Design<span>(7)</span></a>
							<a href="#">Marketing<span>(142)</span></a>
							<a href="#">Web Development<span>(74)</span></a>
							<a href="#">Branding<span>(60)</span></a>
							<a href="#">Photography<span>(5)</span></a> -->
						</div>
					</div>
					<!-- /Category -->

					<!-- Posts sidebar -->
					<div class="widget">
						<h3 class="mb-3">Latest Posts</h3>

						<!-- single post -->
						<div class="widget-post">
							<a href="blog.php">
								<img class="img-fluid" src="./img/1.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="blog.php">
								<img src="./img/2.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->


						<!-- single post -->
						<div class="widget-post">
							<a href="blog.php">
								<img src="./img/3.jpg" alt="">Lorem Ipsum
							</a>
							<ul class="blog-meta">
								<li>Oct 18, 2017</li>
							</ul>
						</div>
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

				</aside>