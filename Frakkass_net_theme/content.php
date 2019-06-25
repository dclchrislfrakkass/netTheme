<div class="<?php echo $section_class; ?>">
            <div class="container">
                <div class="row">
                    <div class="<?php echo $left_class; ?>">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading"><?php the_title(); ?>:</h2>
                        <div class="meta">
                          Posté le <?php the_time('F j, Y g:i a'); ?> Par
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                              <?php the_author(); ?>
                          </a>
                          dans
                          <?php
                            $categories = get_the_category();
                            $separator = ", ";
                            $output = '';

                            if($categories){
                              foreach($categories as $category){
                                $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                                //$output .= $category->cat_name . $separator;

                              }
                            }
                            echo trim($output, $separator);
                          ?>
                        </div>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                        <a class="btn btn-primary" href="<?php the_permalink(); ?>">
                            Lire Plus
                        </a>
                    </div>
                    <div class="<?php echo $right_class; ?>">
                        <?php the_post_thumbnail('full', array(
                            'class' => $img_class
                        )); ?>
                    </div>
                </div>
            </div>
        </div>