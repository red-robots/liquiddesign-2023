<style type="text/css">
	.text-only .content {
        column-count: <?php echo $column_count; ?>;
        column-gap: 20px;
    }
	@media (min-width: 768px) {
        .text-only .content {
        	column-gap: 40px;
        }
    }
</style>
<div class="ld-box">
	<div class="text-only">
		<div>
			<?php if( $title ){ ?>
				<div class="titles">
			    	<h2 class="main"><?php echo $title; ?></h2>
			    	<?php if( $sub_title ){ ?>
				        <h2 class="sub"><?php echo $sub_title; ?></h2>
				    <?php } ?>
				    <div class="square"></div>
				</div>
			<?php } ?>
		    <div class="content"><?php echo $text_block; ?></div>
		</div>
	</div>
</div>