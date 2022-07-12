<?php
/**
 * Template Name: Template Contact(Contact)
 */
get_header(); ?>
<section class="hata post-header">
        <div class="container-max">
            <div class="row">
                <div class="col-md-4">
                    <span>Звертайтесь за будь-якою інформацією!</span>
                    <h1 class="h1-seo">контакти</h1>

                    <div class="footer-flex">
                        <div class="footer-flex-img-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tel-dark.svg" alt="">
                        </div>

                        <div class="div">
                            <a href="tel:+380675131580">+38(067)513-15-80</a>
                        </div>
                    </div>
                    <div class="footer-flex">
                        <div class="footer-flex-img-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mail-dark.svg" alt="">
                        </div>
                        <a href="mailto:hotel.chervonaruta@gmail.com">hotel.chervonaruta@gmail.com</a>
                    </div>

                    <div class="footer-flex">
                        <div class="footer-flex-img-block"><img src="<?php echo get_template_directory_uri(); ?>/img/location-dark.svg" alt=""></div>
                        <a href="#">Закарпатська область, Хустський район, с.Шаян, вул.Центральна, 10</a></div>



                </div>
                <div class="col-md-6 offset-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="" class="img-responsive">
                </div>

            </div>

        </div>
    </section>
	<div class="map">
		<div id="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.9659917464685!2d23.346438853095794!3d48.0603415796688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737884edcaa2017%3A0xb9bf42c906704558!2sChervona%20Ruta!5e0!3m2!1sru!2sua!4v1622755763716!5m2!1sru!2sua"
				width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>


		<div class="container-max d-none d-md-block">
			<div class="row">
				<div class="col-md-4 offset-md-8">
					<div class="abs-form">
						<form action="">
							<h2>зв’язатись з нами</h2>
							<input type="text" placeholder="Ім’я" name="name" required><input type="text" placeholder="Email" name="mail" required>
						<textarea name="mes" placeholder="Текст повідомлення"></textarea>
						<input type="submit" class="acc-but">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="container-max d-block d-md-none">
		<div class="row">
			<div class="col-md-4">
				<div class="abs-form">
					<form action="">
						<h2>зв’язатись з нами</h2>
						<input type="text" placeholder="Ім’я" name="name" required><input type="text" placeholder="Email" name="mail" required>
						<textarea name="mes" placeholder="Текст повідомлення"></textarea>
						<input type="submit" class="acc-but">
					</form>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
