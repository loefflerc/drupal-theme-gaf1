  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
  
    <?php if ($picture) {
      print $picture;
    }?>
    
    <?php if (!$page) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <?php if ($submitted) { ?><span class="submitted"><?php print $submitted; ?></span><?php } ?>
    <?php if ($terms) { ?><span class="taxonomy"><?php print $terms?></span><?php } ?>
    <div class="content"><?php print $content?></div>
    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php } ?>

    <? if ($tabs = theme('menu_local_tasks')) { print $tabs; } ?>

  </div>
