<?php

get_header(); ?>

        <main>
            <section class="gradient"></section>
            <section class="content">
                <div class="container">
                    <div class="clearfix">
                        <p class="hobl-description right"><?php echo ot_get_option("section-text"); ?></p>
                    </div>
                    <div class="content-title"><?php echo ot_get_option("section-title"); ?></div>
                    <p><?php echo ot_get_option("section-text2"); ?></p>
                    <p><?php echo ot_get_option("section-text3"); ?></p>
                </div>
            </section>
            <section class="statistic">
              <div class="container">
                  <p class="section-title"><span>Статистика</span></p>
                  <div class="statistic-container">
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic.png" alt="Диаграмма"></div>
                        <p>В настоящее время около 600 миллионов человек в мире страдают ХОБЛ.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic2.png" alt="Диаграмма"></div>
                        <p>Каждые 10 секунд ХОБЛ убивает одного<br> человека в мире.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic3.png" alt="Диаграмма"></div>
                        <p>Врачи успевают диагностировать лишь каждый третий случай ХОБЛ.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic4.png" alt="Диаграмма"></div>
                        <p>Заболеваемость ХОБЛ увеличивается:за десятилетие у мужчин  рост на 25 % и на 69 % у женщин.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic5.png" alt="Диаграмма"></div>
                        <p>72 – 93% больных ХОБЛ не знают о своем заболевании.</p>
                      </div>
                  </div>
                  <div class="statistic-inner">
                      <div class="statistic-info">
                          <span>Летальность</span>
                          <p>В настоящее время ХОБЛ является 4-й лидирующей причиной смерти в мире. <br>По оценкам экспертов, уже к 2030 году ХОБЛ выйдет на 3-е место среди причин смертности, уступив только инсульту и ишемии сердца.</p>
                          <p>Ежегодно от ХОБЛ умирает около 2,75 млн человек, что составляет 4,8% всех <br>причин смерти.</p>
                          <p>В Европе летальность от ХОБЛ значительно варьирует: <br> от 0,20 на 100,000 населения в Греции, Швеции, Исландии и Норвегии,<br> до 80 на 100,000 в Украине и Румынии.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic6.png" alt="Диаграмма"></div>
                        <p>ХОБЛ в России занимает 1-ое место (55%) в структуре распространенности болезней органов дыхания, существенно опережая бронхиальную астму (19%) и пневмонию (14%).</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic7.png" alt="Диаграмма"></div>
                        <p>Симптомы ХОБЛ выявлены более чем у 15% россиян</p>
                      </div>
                  </div>
                  <div class="statistic-inner">
                      <div class="statistic-info">
                          <span>Социально-экономическое значение ХОБЛ</span>
                          <p>В развитых странах общие экономические расходы, связанные с ХОБЛ, в <br>структуре легочных заболеваний занимают 2-е место после рака легких и 1-е место<br> по прямым затратам, превышая прямые расходы на бронхиальную астму в 1,9 <br>раза.</p>
                          <p>Экономические расходы на 1 больного, связанные с ХОБЛ в три раза выше, чем на больного с бронхиальной астмой.</p>
                          <p>Особенно выраженный рост смертности от ХОБЛ отмечается среди женщин.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic8.png" alt="Диаграмма"></div>
                        <p>Около 50% - 60% <br> больных ХОБЛ не получают лечения по поводу своего заболевания.</p>
                      </div>
                      <div class="statistic-block">
                        <div class="statistic-img"><img src="<?php bloginfo( 'template_url' ); ?>/img/statistic9.png" alt="Диаграмма"></div>
                        <p>ХОБЛ развивается у 50% курильщиков и только у 10% некурящих. Около 15-20% случаев ХОБЛ связаны с производственными факторами </p>
                      </div>
                  </div>
              </div>
            </section>
            <section class="news">
                <div class="container">
                    <p class="section-title"><span>Что нового?</span></p>
                    <div class="news-slider">
                        <?php 
                            $k = new WP_Query('category_name=news&posts_per_page=6');?>
                            <?php if ( $k->have_posts() ) { ?>
                                <?php while ( $k->have_posts() ) : $k->the_post(); ?>
                                <div>
                                    <div class="news-content">
                                        <?php the_post_thumbnail('full'); ?>
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                        <p><?php echo substr(get_the_excerpt(), 0, -10); ?></p>
                                        <span><?php echo get_the_date('n.j.Y'); ?></span>
                                    </div>
                                </div>
                            <?php
                            endwhile; 
                            } ?>
                    </div>
                    <a href="/category/news/" class="btn-link">Все новости</a>
                </div>
            </section>
            <section class="info">
                <div class="container">
                    <p class="section-title"><span>Все о ХОБЛ</span></p>
                        <div class="info-slider">
                           <?php 
                            $q = new WP_Query('category_name=slider-hobl');?>
                            <?php if ( $q->have_posts() ) { ?>

                                <?php while ( $q->have_posts() ) : $q->the_post(); ?>
                                     <div>
                                        <div class="info-content">
                                           <?php the_content(); ?>
                                        </div>
                                     </div>
                              <?php
                              endwhile; 
                              } ?>
                      </div>
                  </div>
            </section>
            <section class="items">
                <div class="conatiner">
                    <div class="items-inner">
                        <?php 
                            $s = new WP_Query('category_name=stati&order=ASC');?>
                            <?php if ( $s->have_posts() ) { ?>
                                <?php while ( $s->have_posts() ) : $s->the_post(); ?>
                                    <div class="item-block">
                                        <?php the_post_thumbnail('full'); ?><br>
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                <?php
                                endwhile; 
                                } ?>
                    </div>
                    <a href="/category/blog-stati/" class="btn-link">Все статьи</a>
                </div>
            </section>
        </main>

<?php
get_footer();
