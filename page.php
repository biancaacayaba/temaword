

<?php get_header();?>

    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                
?>
    


<!-- <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div> -->
                

    <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<?php if(!is_page('contato')){ ?>

<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div>
<?php } ?>

<?php if(is_page('contato')){ ?>
<div class="row">
    <div class="col-md-4">
        <?php the_content(); ?>
    </div>
    <div class="col-md-8">
<iframe src="https://www.google.com/maps/embed?pb=!4v1537232021227!6m8!1m7!1s0-cGe8gGfXyoKxJ2WeIBFQ!2m2!1d-23.9657625754127!2d-46.40051776834155!3f134.07215626830282!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
</div>
</div>

<?php } ?>

    
    
 <?php  
            }
        }
        
    ?>

<?php get_footer();?>
