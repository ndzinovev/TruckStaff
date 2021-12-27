<!doctype html>
<html lang="en">
    <head>
        <title>Truck Staff</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#000000">
        <meta name="description" content="Truck Staff">
        <link href="<?php  bloginfo('template_url')?>/fonts/Lato-Regular.woff2" as="font" type="fonts/woff2" crossorigin>
        <link href="<?php  bloginfo('template_url')?>/fonts/Lato-Bold.woff2" as="font" type="fonts/woff2" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <?php  
            wp_head();
        ?>
</head>
<style>
     @keyframes mult {
        0% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg1.webp);
            opacity: 1;
        }
        40% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg1.webp);
            opacity: .8;
        }
        40% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg2.webp);
            opacity: 1;
        }
        60% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg2.webp);
            opacity: .8;
        }
        60%{
            background-image: url(<?php  bloginfo('template_url')?>/img/bg3.webp);
            opacity: 1;
        }
        100% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg1.webp);
            opacity: .8;
        }
        100% {
            background-image: url(<?php  bloginfo('template_url')?>/img/bg1.webp);
            opacity: 1;
        }
    }
    
</style>
<body>
     <section class="hero">
        <header class="header container">
            <?php the_custom_logo(); ?>
            <nav class="nav">               
                <?php
                    wp_nav_menu( [
                        'menu' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'ul-nav',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'items-wrap' => '<ul class="ul-nav">%3$s</ul>',
                        'depth' => 10,
                ] );?>               
            </nav>
         </header>   
         <div class="container">
            <h1 class="headerContentTitle">TRUCKSTAFF <br> SOLUTIONS</h1>
            <p class="headerContentText">Supportive services for all your logistics needs</p>
            <div class="hero-box-btn">
                <a href="#about" class="hero-link">Know more <img src="<?php  bloginfo('template_url')?>/img/r-arr.svg" alt="icon"></a>
                <a href="#contact" class="hero-link1">Contact us</a>
            </div>
         </div>
     </section>   

     <section class="projects container " id="progects">
        <h2 class="wow fadeInUp">Our projects</h2>
        <div class="slider wow fadeInUp">
            <div class="swiper-wrapper">
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs1.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs2.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs3.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs4.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs5.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs6.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/vs7.png" alt="img">
                </div>
            </div>    
        </div>

        <div class="slider1 wow fadeInUp">
            <div class="swiper-wrapper">
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns1.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns2.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns3.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns4.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns5.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/ns6.png" alt="img">
                </div>
            </div>
        </div>
        <div class="txt-project wow fadeInUp">
            <span><?php the_field('number_of_projects');?></span>
            <p>projects</p>
            <div class="circle"></div>
            <p>since</p>
            <span>2017</span>
        </div>
     </section>

     <section class="services container" id="services">
         <h2>services</h2>
         <div class="serv-content">
         <?php
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'service',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, 
                ) );
                
                foreach( $posts as $post ){
                    setup_postdata($post);
         ?>
                <div class="item-serv wow fadeInUp">
                    <h3><?php the_title();?></h3>
                    <h4><?php the_field('named');?></h4>
                    <p><?php the_field('description_service');?></p>
                </div>
        <?php
                }                
                wp_reset_postdata(); // сброс
        ?>        
         </div>

     </section>

     <section class="about container" id="about">
         <div class="left-about">
             <img src="<?php  bloginfo('template_url')?>/img/about.webp" alt="foto">
         </div>
         <div class="right-about wow fadeInRightBig">
             <h2>about us</h2>
             <p>
                Our experienced consulting team provides high-level service and professional advice concerning all your trucking needs.
                <br><br>
                We can help you ranging from accounting, safety and after-hours services to establishing your own carrier company from the very beginning satisfying all legal requirements and making sure the process will be simple, quick and straightforward as possible for you.
                <br><br>
                We will make your life easier by preparing the required DOT Program, your safety documentation, and, additionally, you will not have to spend your time on getting the best deals and awesome discounts with the largest companies in trucking industry.
                <br><br>
                We can assist you with opening new MC and DOT numbers, acquiring already existing aged MC authority or even preparing a turnkey trucking company for you with drivers and trucks.
                <br><br>
                Choose what is most suitable for you and we will help you to make the first step of establishing your own prosperous business.
             </p>
         </div>
     </section>

     <section class="clients container">
         <h2>our clients</h2>
         <div class="slider-cl">
             <div class="swiper-wrapper">
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl1.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl2.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl3.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl4.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl5.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl6.png" alt="img">
                </div>
                <div class="swiper-slide item-slid">
                    <img src="<?php  bloginfo('template_url')?>/img/cl7.png" alt="img">
                </div>
            </div>
         </div>
     </section>

     <section class="contact container wow fadeInUp" id="contact">
         <h2>contact us</h2>
         <div class="contact-content">
             <div class="left-contact">
                 <div class="item-contact">
                     <div class="number-cont">01</div>
                     <div class="wrap-cont">
                         <h4>Inquires</h4>
                         <p>
                            For any inquiries, questions or recommendations, please call:<a href="tel:+18885984707"> <?php the_field('phone');?></a> or fill out the following form
                         </p>
                     </div>
                 </div>
                 <div class="item-contact">
                    <div class="number-cont">02</div>
                    <div class="wrap-cont">
                        <h4>Head Office</h4>
                        <p>
                            401 West Walnut Street, suite#21, Allentown PA 18012,
                        </p>
                        <p>E-mail: </p> <a href="mailto:info@truckstaff.us">info@truckstaff.us</a> <br>
                        <p>Phone: </p> <a href="tel:+18885984707"><?php the_field('phone');?></a> <br>
                        <p>Fax: </p> <a href="tel:+18885808074"><?php the_field('fax');?></a>
                    </div>
                </div>
                <div class="item-contact">
                    <div class="number-cont">03</div>
                    <div class="wrap-cont">
                        <h4>Employment</h4>
                        <p>
                            Тo apply for a job, please send a cover letter together with your C.V. to <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a> 
                        </p>
                    </div>
                </div>
             </div>
             <div class="right-contact">
                <?php echo do_shortcode('[contact-form-7 id="9" title="Контактная форма 1"]');?>
             </div>
         </div>
     </section>

     <footer class="footer container">
        <div class="soc">
            <a href="<?php the_field('youtube');?>" target="_blank"><img src="<?php  bloginfo('template_url')?>/img/yt.svg" alt="icon"></a>
            <a href="<?php the_field('linkedIn');?>" target="_blank"><img src="<?php  bloginfo('template_url')?>/img/in.svg" alt="icon"></a>
            <a href="<?php the_field('facebook');?>" target="_blank"><img src="<?php  bloginfo('template_url')?>/img/fb.svg" alt="icon"></a>
            <a href="<?php the_field('instagram');?>" target="_blank"><img src="<?php  bloginfo('template_url')?>/img/inst.svg" alt="icon"></a>
        </div>
     </footer>
     <?php 
        wp_footer();
     ?>
</body>
</html>