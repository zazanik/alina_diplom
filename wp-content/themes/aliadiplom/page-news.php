<?php
/*
Template Name: news
*/

 $args = array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'category'         => '',
    'category_name'    => '',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'author'	   => '',
    'post_status'      => 'publish',
    'suppress_filters' => true
);
$news = new WP_Query($args);

?>

<?php get_header(); ?>

<div class="art-contentLayout">
    <?php include (TEMPLATEPATH . '/sidebar1.php'); ?><div class="art-content">

        <?php if ($news -> have_posts()) : ?>
            <?php while ($news -> have_posts()) : $news -> the_post(); ?>
                <div class="art-Post">
                    <div class="art-Post-body">
                        <div class="art-Post-inner art-article">
                            <h2 class="art-PostHeaderIcon-wrapper">
                                <span class="art-PostHeader">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </span>
                            </h2>
                            <?php $icons = array(); ?>
                            <?php if (is_page()): ?><?php ob_start(); ?><?php the_time(__('F jS, Y', 'kubrick')) ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (is_page()): ?><?php ob_start(); ?><?php _e('Автор', 'kubrick'); ?>: <a href="#" title="<?php _e('Author', 'kubrick'); ?>"><?php the_author() ?></a>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (current_user_can('edit_post', $post->ID)): ?><?php ob_start(); ?><?php edit_post_link(__('Edit', 'kubrick'), ''); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
                                <div class="art-PostHeaderIcons art-metadata-icons">
                                    <?php echo implode(' | ', $icons); ?>

                                </div>
                            <?php endif; ?>

                            <div class="art-PostContent overflow">
                                <?php if (is_search()) the_excerpt(); else the_content(); ?>
                                <?php echo implode(' | ', $icons); ?>

                            </div>


                            <div class="cleared"></div>


                            <?php ob_start(); ?>
                            <?php $icons = array(); ?>
                            <?php if (is_page()): ?>

                                <?php ob_start(); ?><?php printf(__('Категорія %s', 'kubrick'), get_the_category_list(', ')); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (is_page() && get_the_tags()): ?><?php ob_start(); ?><?php the_tags(__('Мітка:', 'kubrick') . ' ', ', ', ' '); ?>
                                <?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (is_page() && !is_single()): ?><?php ob_start(); ?><?php comments_popup_link(__('Немає коментарів &#187;', 'kubrick'), __('1 коментарій &#187;', 'kubrick'), __('% Коментарів &#187;', 'kubrick'), '', __('Коментарі закриті', 'kubrick') ); ?>
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

            <?php endwhile; ?>
            <?php
            $prev_link = get_previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
            $next_link = get_next_posts_link(__('&laquo; Older Entries', 'kubrick'));
            ?>
            <?php if ($prev_link || $next_link): ?>
                <div class="art-Post">
                    <div class="art-Post-body">
                        <div class="art-Post-inner art-article">

                            <div class="art-PostContent">

                                <div class="navigation">
                                    <div class="alignleft"><?php echo $next_link; ?></div>
                                    <div class="alignright"><?php echo $prev_link; ?></div>
                                </div>

                            </div>
                            <div class="cleared"></div>


                        </div>

                    </div>
                </div>

            <?php endif; ?>
        <?php else : ?>
            <h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
            <p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
            <?php if(function_exists('get_search_form')) get_search_form(); ?>
        <?php endif; ?>

    </div>
    <?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>
