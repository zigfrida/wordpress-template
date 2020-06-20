
<?php get_header(); ?>

<div class="social-container">
    <ul class="social-icons">
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>

<div id="scroll-container">
    <ul class="scroll-icons">
        <a href="#top-content" class="scroll-section"><li><i class="fa fa-circle"></i></li></a>
        <a href="#timeline-1" class="scroll-section"><li><i class="fa fa-circle"></i></li></a>
        <a href="#about-content" class="scroll-section"><li><i class="fa fa-circle"></i></li></a>
    </ul>
</div>

<div id="top-content" class="container-fluid" style="background-image:url('<?php echo get_theme_file_uri('images/flor9-min.jpg');?>')">

    <div id="text-container">
        <span id="owner-name">Elaine Golubics</span>
        <b>
            <span id="name-desc">Photographer | Artist | Designer
            </span>
        </b>

        <div id="name-desc-mobile">
            <div>
                <div class="name-desc-text">
                    Photographer<br/>
                    Artist<br/>
                    Designer<br/>   
                </div>
            </div>
        </div>
    </div>

</div>

<div id="timeline-1" class="timeline-container">
    <div class="timeline-header">
        <h2 class="timeline-header__title">Elaine Golubics Projects</h2>
        <h3 class="timeline-header__subtitle">Past Works</h3>
    </div>

    <div class="timeline">
        <div class="timeline-item" data-text="JUQUEHY">
            <div class="timeline__content">
                <img src="<?php echo get_theme_file_uri('images/juquehy3-min.jpg');?>" alt="Test Image" class="timeline__img">
                <h2 class="timeline__content-title">
                    Juquehy 3
                </h2>
                <p class="timeline__content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu erat, tincidunt sed odio ut, accumsan ultrices eros. Nunc gravida velit eu dui dictum placerat. Cras mollis bibendum ante, varius hendrerit augue placerat fermentum. Proin efficitur, quam eget auctor eleifend, tortor mi dapibus lacus, ac suscipit ante ex nec purus.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-text="FLORES">
            <div class="timeline__content">
                <img src="<?php echo get_theme_file_uri('images/flor11-min.jpg');?>" alt="Test Image" class="timeline__img">
                <h2 class="timeline__content-title">
                    Flor 11
                </h2>
                <p class="timeline__content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu erat, tincidunt sed odio ut, accumsan ultrices eros. Nunc gravida velit eu dui dictum placerat. Cras mollis bibendum ante, varius hendrerit augue placerat fermentum. Proin efficitur, quam eget auctor eleifend, tortor mi dapibus lacus, ac suscipit ante ex nec purus.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-text="ARQUITETURA">
            <div class="timeline__content">
                <img src="<?php echo get_theme_file_uri('images/arquitetura1-min.jpg');?>" alt="Test Image" class="timeline__img">
                <h2 class="timeline__content-title">
                    Arquitetura 1
                </h2>
                <p class="timeline__content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu erat, tincidunt sed odio ut, accumsan ultrices eros. Nunc gravida velit eu dui dictum placerat. Cras mollis bibendum ante, varius hendrerit augue placerat fermentum. Proin efficitur, quam eget auctor eleifend, tortor mi dapibus lacus, ac suscipit ante ex nec purus.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-text="PAISAGEM">
            <div class="timeline__content">
                <img src="<?php echo get_theme_file_uri('images/paisagem8-min.jpg');?>" alt="Test Image" class="timeline__img">
                <h2 class="timeline__content-title">
                    Paisagem 8
                </h2>
                <p class="timeline__content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu erat, tincidunt sed odio ut, accumsan ultrices eros. Nunc gravida velit eu dui dictum placerat. Cras mollis bibendum ante, varius hendrerit augue placerat fermentum. Proin efficitur, quam eget auctor eleifend, tortor mi dapibus lacus, ac suscipit ante ex nec purus.
                </p>
            </div>
        </div>
        <div class="timeline-item" data-text="POR DO SOL">
            <div class="timeline__content">
                <img src="<?php echo get_theme_file_uri('images/quadrado2-min.jpg');?>" alt="Test Image" class="timeline__img">
                <h2 class="timeline__content-title">
                    Quadrado 2
                </h2>
                <p class="timeline__content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu erat, tincidunt sed odio ut, accumsan ultrices eros. Nunc gravida velit eu dui dictum placerat. Cras mollis bibendum ante, varius hendrerit augue placerat fermentum. Proin efficitur, quam eget auctor eleifend, tortor mi dapibus lacus, ac suscipit ante ex nec purus.
                </p>
            </div>
        </div>
    </div>
</div>


<div id="about-content" >
    <div id="scnd-left">
    </div>
    <div id="scnd-right">
    </div>
</div>




<?php get_footer(); ?>