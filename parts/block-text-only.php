<style type="text/css">
	.text-only .content ol,
	.text-only .content ul {
        
        column-gap: 20px;
    }
	@media (min-width: 768px) {
        .text-only .content ol,
        .text-only .content ul {
        	column-gap: 80px;
        	column-count: <?php echo $column_count; ?>;
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