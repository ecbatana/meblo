<?php if ( 'open' == $post->comment_status ) : ?>

	<div class="comment-box respond">
		<h3 class="title"><?php comment_form_title(); ?></h3>

		<?php cancel_comment_reply_link();
			if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>

			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( $user_ID ) : ?>

				<p>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>

			<?php else : ?>

				<label for="author">
					Name <?php if ( $req ) echo "( required )"; ?>
				</label>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email">
					Email ( <?php if ( $req ) echo "required, "; ?>never shared )
				</label>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="url">
					Website
				</label>
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

			<?php endif; ?>
				
				<label for="comment">
					Comment Here
				</label>
				<textarea name="comment" id="comment"></textarea>
				<p class="allowed-tags">
					Allowed HTML tags : <code><?php echo allowed_tags(); ?></code>
				</p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />

			<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
			</form>
		<?php endif; // If registration required and not logged in ?>
	</div>
	<ul class="comment-list">
		<?php foreach (get_comments() as $comment): ?>
			<li id="comment-<?php echo $comment->comment_ID; ?>" class="comment">
				<p class="comment-author">
					<?php echo $comment->comment_author; ?>
					<i class="sepa">give comment on</i>
					<?php echo $comment->comment_date; ?>
				</p>
				<p class="comment-content">
					<?php echo $comment->comment_content; ?>
				</p>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; // If comments are open: delete this and the sky will fall on your head ?>
