<?php
  /*
    FAQs Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables
  $get_items_query = array(
  	'post_type' => 'faq',
  	'order' => 'ASC',
    'posts_per_page' => -1,
  );

  $get_items = new WP_Query($get_items_query);
?>

<ul class="faq-FAQ_Items">
	<?php if( $get_items->have_posts() ) : while( $get_items->have_posts() ) : $get_items->the_post(); ?>
		<li class="faq-FAQ_Item">
			<div class="faq-FAQ_Block" data-faq-block>
				<div class="faq-FAQ_Inner">
					<div class="faq-FAQ_Question" data-faq-question>
						<h3 class="faq-FAQ_Title"><?php the_title(); ?></h3>
					</div>
					<div class="faq-FAQ_Answer" data-faq-answer>
						<div class="faq-FAQ_Content">
						  <div class="faq-FAQ_Text"><?php nl2br(the_content()); ?></div>
						</div>
					</div>
				</div>
			</div>
		</li>
	<?php
		endwhile; else :
			 echo '<p class="faq-FAQ_Message">Nothing found.</p>';
	 	endif;
		// Reset things, for good measure
		$get_items = null;
		wp_reset_postdata();
	?>
</ul>

<script>
  (function () {
  window.addEventListener('DOMContentLoaded', function(){
    const els = {
      blocks: [].slice.call(document.querySelectorAll('[data-faq-block]')),
      questions: [].slice.call(document.querySelectorAll('[data-faq-question]')),
      answers: [].slice.call(document.querySelectorAll('[data-faq-answer]'))
    }

    els.questions.forEach(function(question) {
      question.addEventListener('click', function(){
        // Grab blocks
        const openBlock = document.querySelector('[data-faq-block].open')
        const currentBlock = this.parentElement.parentElement

        // Check if openblock exists
        // Remove from open block if exists
        if (openBlock) {
          // If open block is clicked block
          if (openBlock == currentBlock) {
            // Add remove open class
            currentBlock.classList.remove('open')
          } else {
            // Remove open class from open block
            openBlock.classList.remove('open')
            // Add open class to clicked block
            currentBlock.classList.add('open')
          }
        } else {
          // Add open class to current block
          currentBlock.classList.add('open')
        }

      })
    })
  })
  })();
</script>
