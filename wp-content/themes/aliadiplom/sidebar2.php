<div class="art-sidebar2">      
<?php if (!art_sidebar(2)): ?>
<div class="art-Block">
    <div class="art-Block-body">
<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t"><?php _e('Categories', 'kubrick'); ?></div>
    </div>
</div><div class="art-BlockContent">
    <div class="art-BlockContent-body">
<ul>
  <?php wp_list_categories('show_count=1&title_li='); ?>
</ul>
    </div>
</div>

    </div>
</div>
<div class="art-Block">
    <div class="art-Block-body">
<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t"><?php _e('Links:', 'kubrick'); ?></div>
    </div>
</div><div class="art-BlockContent">
    <div class="art-BlockContent-body">
<ul>
      <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
      </ul>
    </div>
</div>

    </div>
</div>

<?php endif ?>
</div>
