<?php
?>


<div id="wrapper"> <?php print render($page['header']); ?>
  <div id="header">
    <?php if ($logo) { ?><div id="logo">
      
      <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
     
    </div> <?php } ?>
    <?php if ($site_name) { ?>
    <!--<h1 class="site-name"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>-->
    <?php } ?>
    <?php if ($site_slogan) { ?>
    <div class="site-slogan"><?php print $site_slogan ?></div>
    <?php } ?>
  </div>
  <div id="bodywrapper">
  <div id="sub_header"> <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix'))));  ?>
    <?php print render($page['search_box']); ?>
  </div>
  <div id="container"<?php print gaf_theme_container($page['sidebar_first'], $page['sidebar_second']); ?>>
    <div id="center" class="column">
      <div id="main">
        <?php  if ($content_top) { print render($content_top); }?>
        <?php if ($title) {  ?>
        <h1 class="title"><?php print $title ?></h1>
        <?php } ?>
        <?php if (!empty($tabs) && (!strpos('i'.$_GET['q'],'node') || strpos('i'.$_GET['q'],'admin'))): ?>
          <?php print render($tabs) ?>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['messages']); ?>
        <?php print render($page['top_content']); ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
    <?php  if ($left) { 	?>
    <div id="left" class="column">
      <?php  print $left;  ?>
    </div>
    <?php } ?>
    <?php if ($right) { ?>
    <div id="right" class="column">
      <?php   print $right; ?>
    </div>
    <?php } ?>
  </div>
  <div id="footer"><?php print $footer; ?></div>
  </div>
  <?php print $page_bottom; ?>
</div>


