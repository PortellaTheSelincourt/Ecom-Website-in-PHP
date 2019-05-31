<?php require_once("../resources/config.php") ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<div class="container">
    <!-- Page Content -->
    
	
        <!-- Jumbotron Header -->
		

        <?php get_cat_desc() ?>

        <hr>
		<div class="row container"> 
		<?php get_categories_list() ?>
		</div>
		
        <!-- Title -->
        <div class="row container">
            <div class="col-lg-12 container">
                <h3>Latest Products</h3>
            </div>
			
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row">

         <?php get_products_in_cat_page(); ?>
             
        </div>
        <!-- /.row -->

       
		
       

  
</div>
    <!-- /.container -->
	<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>