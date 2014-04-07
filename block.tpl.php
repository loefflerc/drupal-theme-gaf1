<div class="<?php print "block block-$block->module" ?>" id="<?php print "block-$block->module-$block->delta"; ?>">
 
 <?php 
 //added if contition to eliminate empty blocks header tags
 if ($block->subject) { ?><h2 class="block-title"><?php print $block->subject ?></h2> <?php }?>
  <div class="content"><?php print $block->content ?></div>
</div>
