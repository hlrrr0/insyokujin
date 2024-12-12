<div id="tab-area">
    <input type="radio" id="tab1" name="tab" checked />
    <label for="tab1">PICK UP</label>
    <input type="radio" id="tab2" name="tab" />
    <label for="tab2">イベント情報</label>
    <input type="radio" id="tab3" name="tab" />
    <label for="tab3">メディア出演</label>
    <div class="tab-box">
        <div id="tab-content1">
          <?php
global $post;
$tmp_post = $post;
$category_ids = array( '2' ); //カテゴリーID
$numberposts = '4'; //一覧表示したい記事数
foreach ( $category_ids as $category_id ) {
?>

<ul class="wpContentBox">
  <?php
     $postslist = get_posts( "category=$category_id&numberposts=$numberposts&order=DESC&orderby=date" );
     foreach ( $postslist as $post ) {
?>
  <li class="wpContentItem">
                    <a href="<?php the_permalink(); ?>">
                        <span class="thumnail"><?php the_post_thumbnail(); ?></span>
                        <h3 class="topWpTitle"><?php the_title(); ?></h3>
                        <p><?php the_time(get_option('date_format')); ?></p>
                    </a>
                </li>
  <?php
     }
?>
</ul>
<?php
 }
 $post = $tmp_post;
 ?>
       </div>
        <div id="tab-content2">
              <?php
global $post;
$tmp_post = $post;
$category_ids = array( '12' ); //カテゴリーID
$numberposts = '4'; //一覧表示したい記事数
foreach ( $category_ids as $category_id ) {
?>

<ul class="wpContentBox">
  <?php
     $postslist = get_posts( "category=$category_id&numberposts=$numberposts&order=DESC&orderby=date" );
     foreach ( $postslist as $post ) {
?>
  <li class="wpContentItem">
                    <a href="<?php the_permalink(); ?>">
                        <span class="thumnail"><?php the_post_thumbnail(); ?></span>
                        <h3 class="topWpTitle"><?php the_title(); ?></h3>
                        <p><?php the_time(get_option('date_format')); ?></p>
                    </a>
                </li>
  <?php
     }
?>
</ul>
<?php
 }
 $post = $tmp_post;
 ?>
        </div>
        <div id="tab-content3">
             <?php
global $post;
$tmp_post = $post;
$category_ids = array( '13' ); //カテゴリーID
$numberposts = '4'; //一覧表示したい記事数
foreach ( $category_ids as $category_id ) {
?>

<ul class="wpContentBox">
  <?php
     $postslist = get_posts( "category=$category_id&numberposts=$numberposts&order=DESC&orderby=date" );
     foreach ( $postslist as $post ) {
?>
  <li class="wpContentItem">
                    <a href="<?php the_permalink(); ?>">
                        <span class="thumnail"><?php the_post_thumbnail(); ?></span>
                        <h3 class="topWpTitle"><?php the_title(); ?></h3>
                        <p><?php the_time(get_option('date_format')); ?></p>
                    </a>
                </li>
  <?php
     }
?>
</ul>
<?php
 }
 $post = $tmp_post;
 ?>
        </div>
    </div>
</div>
