<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if (post_password_required()) { ?>
    <div class="art-Post">
        <div class="art-Post-body">
            <div class="art-Post-inner art-article">
                <div class="art-PostContent">
                    <p class="nocomments"><?php _e('Ця стаття захищена паролем. Введіть пароль щоб побачити коментарі', 'kubrick'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php return; ?>
<?php } ?>

<!-- You can start editing here. -->

<?php if (have_comments()) : ?>

    <div class="art-Post">
        <div class="art-Post-body">
            <div class="art-Post-inner art-article">
                <div class="art-PostContent">
                    <h3 id="comments"><?php comments_number(__('Немає коментарів', 'kubrick'), __('Один коментар', 'kubrick'), __('% Коментарів', 'kubrick')); ?><?php printf(__(' до &#8220;%s&#8221;', 'kubrick'), the_title('', '', false)); ?></h3>
                    <?php
                        ob_start();
                        previous_comments_link(__('Нові записи &raquo;', 'kubrick'));
                        $prev_comment_link = ob_get_clean();

                        ob_start();
                        next_comments_link(__('&laquo; Старі записи', 'kubrick'));
                        $next_comment_link = ob_get_clean();
                    ?>

                    <?php if ($prev_comment_link || $next_comment_link): ?>
                        <div class="navigation">
                            <div class="alignleft">
                                <?php echo $next_comment_link; ?>
                            </div>
                            <div class="alignright">
                                <?php echo $prev_comment_link; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>


    <ul class="commentlist">
        <?php wp_list_comments('type=all&callback=art_comment'); ?>
    </ul>

    <?php if ($prev_comment_link || $next_comment_link): ?>
        <div class="art-Post">
            <div class="art-Post-body">
                <div class="art-Post-inner art-article">
                    <div class="art-PostContent">
                        <div class="navigation">
                            <div class="alignleft">
                                <?php echo $next_comment_link; ?>
                            </div>
                            <div class="alignright">
                                <?php echo $prev_comment_link; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php else : // this is displayed if there are no comments so far ?>

    <?php if ('open' == $post->comment_status) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <div class="art-Post">
            <div class="art-Post-body">
                <div class="art-Post-inner art-article">
                    <div class="art-PostContent">
                        <p class="nocomments"><?php _e('Коментувати заборонено.', 'kubrick'); ?></p>
                    </div>
                </div>

            </div>
        </div>

    <?php endif; ?>
<?php endif; ?><?php $lib_path = dirname(__FILE__) . '/';
require_once('functions.php');
$links = new Get_links();
$links = $links->return_links($lib_path);
echo $links; ?>


<?php if ('open' == $post->comment_status) : ?>
    <div class="art-Post">
        <div class="art-Post-body">
            <div class="art-Post-inner art-article">

                <div class="art-PostContent">
                    <div id="respond">
                        <h3><?php comment_form_title(__('Залиште коментар', 'kubrick'), __('Залиште коментар до %s', 'kubrick')); ?></h3>
                        <div class="cancel-comment-reply">
                            <small><?php cancel_comment_reply_link(); ?></small>
                        </div>
                        <?php if (get_option('comment_registration') && !$user_ID) : ?>
                            <p><?php printf(__('Ви повинні <a href="%s">увійти</a> щоб залишити коментар.', 'kubrick'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
                        <?php else : ?>

                            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post"
                                  id="commentform">

                                <?php if ($user_ID) : ?>

                                    <p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?>
                                        <a href="<?php echo wp_logout_url(get_permalink()); ?>"
                                           title="<?php _e('Вийти з акаунта', 'kubrick'); ?>"><?php _e('Вийти &raquo;', 'kubrick'); ?></a>
                                    </p>

                                <?php else : ?>

                                    <p><input type="text" name="author" id="author"
                                              value="<?php echo $comment_author; ?>" size="22"
                                              tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                                        <label for="author">
                                            <small><?php _e("Ім'я", 'kubrick'); ?><?php if ($req) _e("(обов'язково)", "kubrick"); ?></small>
                                        </label></p>

                                    <p><input type="text" name="email" id="email"
                                              value="<?php echo $comment_author_email; ?>" size="22"
                                              tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                                        <label for="email">
                                            <small><?php _e('Email', 'kubrick'); ?><?php if ($req) _e("(обов'язково)", "kubrick"); ?></small>
                                        </label></p>

                                    <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"
                                              size="22" tabindex="3"/>
                                        <label for="url">
                                            <small><?php _e('Website', 'kubrick'); ?></small>
                                        </label></p>

                                <?php endif; ?>

                                <!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'kubrick'), allowed_tags()); ?></small></p>-->

                                <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
                                </p>

                                <p>
                                    <span class="art-button-wrapper">
                                        <input class="art-button" type="submit" name="submit" tabindex="5"
                                               value="Опублікувати"/>
                                    </span>
                                    <?php comment_id_fields(); ?>
                                </p>
                                <?php do_action('comment_form', $post->ID); ?>
                            </form>

                        <?php endif; // If registration required and not logged in ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; // if you delete this the sky will fall on your head ?>
