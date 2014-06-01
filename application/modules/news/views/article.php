<?php if (isset($article)) : ?>
<!-- Begin Article -->
<div class="row rowbg content">
	<div class="panel panel-default" id="">
		<div class="panel-heading page-header well well-lg" style="margin:0;">
			<h1 id="news_title" style="margin:0;"><?php echo $article->title; ?></h1>
			<div style="display:block;float:left;">
				<span id="article_date" class="news_date"><?php echo(date('m/d/Y',intval($article->date))); ?></span>
				<?php if (isset($article->author_name) && !empty($article->author_name)) : ?>
				<span id="author" class="author">by <?php echo(anchor('users/profile/'.$article->author,((isset($article->author_name))? $article->author_name: 'Unnamed Author'))); ?>
					<?php if ((!isset($single) || isset ($single) && $single === false) && isset($comment_count) && !empty($comment_count)) : ?>
						( <?php echo $comment_count; ?> Comments )
					<?php endif; ?>
				</span>
				<?php endif; ?>
			</div>
			<div style="position:relative;float:right;">
				<?php if ( isset ( $article->tags ) &&  !empty($article->tags)) : ?>
					<span id="tags" class="tags">Tags: <?php echo $article->tags ?></span>
				<?php endif; ?>
			</div>
		</div>
		
		<div id="article" class="panel-body">
			<?php
			if (isset($article->attachment) && !empty($article->attachment)) :
				$attachment = unserialize($article->attachment);
					// IMAGE ALIGNMENT CHECK
					$alignClass = '';
					if ( isset ( $article->image_align ) && $article->image_align != -1 ) :

						switch ($article->image_align) :
							case 1:
								$alignClass = ' alignLeft';
								break;
							case 2:
								$alignClass = ' alignRight';
								break;
						endswitch;

					endif;
					?>
				<div id="image" class="news_image<?php echo($alignClass); ?>">
				<img src="<?php echo base_url(); if (isset($attachment['image_thumb']) && !empty($attachment['image_thumb'])) { echo($article->asset_url.$attachment['image_thumb']); } else { echo($article->asset_url.$attachment['file_name']); } ?>" alt="<?php echo (isset($article->image_alttag) ? $article->image_alttag : ''); ?>" title="<?php echo (isset($article->image_title) ? $article->image_title : ''); ?>" />
				<?php
				// IMAGE CAPTION CHECK
				if (isset($article->image_caption) && !empty($article->image_caption)) : ?>
				<br /><span class="caption"><?php echo($article->image_caption); ?></span>
				<?php endif; ?>
				</div>
			<?php
			endif;  
			//isset($comment_count) && !empty($comment_count)
			?>
			
			<?php echo $article->body ?>
			<?php 
			if (!isset($single) || isset ($single) && $single === false) :
				echo anchor(site_url('/news/article/'.$article->id),'Read more...');
			endif;  ?>
		</div>
		<div class="panel-footer">
			
			
			<?php 
			if ( (isset ($single) && $single === true)) :
				if (isset ($settings['news.sharing_enabled']) && $settings['news.sharing_enabled'] == 1) :
					echo $this->load->view('news/partials/_social',array('settings'=>$settings,'scripts'=>$scripts),true);
				endif;
				
				// COMMENTS
				if (isset ($settings['news.comments_enabled']) && $settings['news.comments_enabled'] == 1) :
					if (isset($comment_form) && !empty($comment_form)) : ?>
						<!-- COMMENTS -->
						<h3><?php echo lang('nw_article_comments'); ?></h3>
						<?php 
						echo ($comment_form);
					elseif (isset($comment_count) && !empty($comment_count)) :
						echo ('<h4><span class="label">'.$comment_count.'</span> Comments</h4>');
					endif;
				endif;
			endif; ?>
		</div>
	</div>
</div>

<!-- End Article -->
<?php
endif; 
?>