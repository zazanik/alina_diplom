<?php get_header(); ?>
    <div class="art-contentLayout clearfix">
        <?php include(TEMPLATEPATH . '/sidebar1.php'); ?>
        <div class="art-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="art-Post">

                    <div class="art-Post-body">
                        <div class="art-Post-inner art-article">
                            <?php $mainPage = get_the_ID(); ?>
                            <?php if ($mainPage != 138) { ?>
                                <h2 class="art-PostHeaderIcon-wrapper">
                                    <span class="art-PostHeader">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"
                                            title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </span>
                                </h2>
                            <?php } ?>
                            
                            <div class="art-PostContent">
                                <?php if (is_search()) the_excerpt(); else the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>

                            </div>
                            <div class="cleared"></div>
                            <?php ob_start(); ?>
                            <?php $icons = array(); ?>
                            <?php if (!is_page()): ?><?php ob_start(); ?><?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && get_the_tags()): ?><?php ob_start(); ?><?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', ' '); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && !is_single()): ?><?php ob_start(); ?><?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick')); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
                                <div class="art-PostFooterIcons art-metadata-icons">
                                    <?php echo implode(' | ', $icons); ?>

                                </div>
                            <?php endif; ?>
                            <?php $metadataContent = ob_get_clean(); ?>
                            <?php if (trim($metadataContent) != ''): ?>
                                <div class="art-PostMetadataFooter">
                                    <?php echo $metadataContent; ?>

                                </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>

            <?php endwhile; endif; ?>

        </div>
        <?php include(TEMPLATEPATH . '/sidebar2.php'); ?>
    </div>
    <div class="cleared"></div>

<?php get_footer(); ?>