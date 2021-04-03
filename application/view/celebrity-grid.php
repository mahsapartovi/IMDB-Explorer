<!DOCTYPE html>


<!-- BEGIN | Header -->

<?php include('Layouts/header.php');?>
<!-- END | Header -->
<!-- celebritygrid01_light16:30-->

<body>
    
<div class="buster-light">
<!--<div class="hero common-hero">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12">-->
<!--				<div class="hero-ct">-->
<!--<!--					<h1>بازیگران</h1>-->-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter ">
					<p>Found <span><?php echo sizeof($actors); ?></span> in total</p>
					<label>نمایش بر اساس </label>
					<select>
						<option value="actor">بازیگران</option>
						<option value="director">کارگردان ها</option>
					</select>
				</div>
                <div class="celebrity-items">
                    <?php foreach ($actors as $actor){ ?>
                    <div class="ceb-item">
                         <a href="<?php $this->url('person/actor/'.$actor['id']); ?>"><img src="<?php echo $actor['picture']; ?>" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href=""><?php echo $actor['first_name'] . " " . $actor['last_name']; ?></a></h2>
                            <span><?php echo 'بازیگر، '.$actor['birth_place']; ?></span>
                        </div>
                     </div>
                    <?php } ?>
                 </div>	
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">20 Movies</option>
						<option value="saab">10 Movies</option>
					</select>
					
					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		</div>

</body>
<!-- footer section-->
<?php include('Layouts/footer.php');?>
    <!-- end of footer section-->
<!-- celebritygrid01_light16:30-->

</html>