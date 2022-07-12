<?php
/**
 * Template Name: Template Cottage(Cottage)
 */
get_header(); ?>
  <section class="showroom">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6 r-padding">
                    <span>Категорії</span>
                    <h1 class="h1-seo">Котеджі</h1>

                    <div class="showroom-item">
                    <a href="/cottages/simejni-kotedzhi"><img src="<?php echo get_template_directory_uri(); ?>/img/k1.jpg" alt="" class="img-responsive"></a>
                        <h3>Сімейні котеджі </h3>
                        <p>Вишукані котеджі - створені для якісного сімейного відпочинку. А карпатські краєвиди та
                            розкішний басейн під відкритим небом, перенесуть вас у казковий світ релаксу.</p>
                        <div class="more-block"><a href="/cottages/simejni-kotedzhi">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
                    </div>
                    <div class="showroom-item">
                    <a href="/cottages/rodinni-villi"><img src="<?php echo get_template_directory_uri(); ?>/img/k2.jpg" alt="" class="img-responsive"></a>
                        <h3>Родинні Вілли </h3>
                        <p>Котедж складається з двох поверхів, на яких ми постаралися правильно організувати простір. Саме тому, кожен знайде тут свій власний куточок для відпочинку. Повноцінна кухня та вітальня кімната дозволять вам не тільки готувати, але й влаштувати атмосферний вечір в колі близьких людей.</p>
                        <div class="more-block"><a href="/cottages/rodinni-villi">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
                    </div>
                </div>
                <div class="col-md-6 l-padding">
                    <div class="showroom-item">
                    <a href="/cottages/gutsulski-hatinki"> <img src="<?php echo get_template_directory_uri(); ?>/img/k3.jpg" alt="" class="img-responsive"></a>
                        <h3>Гуцульські хатинки </h3>
                        <p>Збудовані з натурального дерев'яного зрубу та покриті очеретом. А завдяки інтер'єру, що
                            оформлений ексклюзивними меблями закарпатських майстрів, в хатинці затишно і комфортно у
                            будь-яку пору року.</p>
                        <div class="more-block"><a href="/cottages/gutsulski-hatinki">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
                    </div>
                    <div class="showroom-item">
                    <a href="/cottages/shvejtsarske-shale"><img src="<?php echo get_template_directory_uri(); ?>/img/k4.jpg" alt="" class="img-responsive"></a>
                        <h3>Швейцарське шале </h3>
                        <p>Ідеальне місце, щоб відволіктися від метушні міського життя і насолодитися повною релаксацією в горах.
Основою дизайну інтер’єру є дерево, камінь та природні тканини, які несуть в собі комфорт домашньої атмосфери. А відкритий простір в котеджі дарує необхідне відчуття свободи та усамітнення з природою.
</p>
                        <div class="more-block"><a href="/cottages/shvejtsarske-shale">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="column-text">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6">
                <?php the_field('text1'); ?>
                </div>
                <div class="col-md-6">
                <?php the_field('text2'); ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>