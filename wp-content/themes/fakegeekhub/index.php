<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="content">
    <div class="home">
    <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
    <ul class="types">
    <li class="left-col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-frontend.png" />
        <a class="title" href="#"><h3>Frontend + CMS</h3></a>
        <p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-adv-cms.png" />
        <a class="title" href="#"><h3>Advanced CMS</h3></a>
        <p>Курс для тих, хто хоче навчитися створювати сайти різного рівня складності за допомогою популярних CMS Wordpress та Drupal. Якщо ви хочете робити вебсайти як професіонал, цей курс для вас. Особливості різних CMS, використання та написання плагінів та компонентів, інтеграція із соціальними мережами та сторонніми сервісами.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-adv-php.png" />
        <a class="title" href="#"><h3>Advanced PHP</h3></a>
        <p>Для тих хто хоче розвивати свої базові навички в PHP. Курс заглиблюється у вивчення ООП, MVC та паттернiв проетування на базі найпопулярнішого php фреймворку Symfony2.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li class="left-col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-js.png" />
        <a class="title" href="#"><h3>JavaScript</h3></a>
        <p>Все найцікавіше відбувається в браузері, а не на сервері. Javascript - це той інструмент який допоможе вам створювати дійсно зручні та швидкі веб сторінки.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-ios.png" />
        <a class="title" href="#"><h3>iOS</h3></a>
        <p>Курс для швидкого старту в розробці програмного забезпечення під популярну мобільну платформу iOS. </p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-android.png" />
        <a class="title" href="#"><h3>Android</h3></a>
        <p>Android - найпопулярніша операційна система для смартфонів. В цьому курсі ми охопимо найважливіші елементи побудови додатків для цієї платформи. Ознайомимося з основними компонентами UI та UX. Навчимося їх правильно використовувати. Також навчимося працювати в команді та побудуємо корисні додатки.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li class="left-col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-ruby.png" />
        <a class="title" href="#"><h3>Ruby on Rails</h3></a>
        <p>Курс навчить Вас працювати з популярним фреймворком для розробки веб-сервісів на мові програмування Ruby. </p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-grails.png" />
        <a class="title" href="#"><h3>Groovy & Grails</h3></a>
        <p>Познайомтесь з одним з найпотужніших фреймворків для швидкої розробки веб-додатків Groovy & Grails.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-java.png" />
        <a class="title" href="#"><h3>Java for Web</h3></a>
        <p>Java - це основа ентерпрайз технологій. Ви ознайомитесь із мовою, основними классами і пакетами, а також найбільш популярними та потужними фреймворками для розробки веб-додатків.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li class="left-col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-pm.png" />
        <a class="title" href="#"><h3>Project Management</h3></a>
        <p>Щоб стати досвідченим менеджером проектів потрібні роки спроб та помилок. Geekhub дає вам можливість почати набувати практичні навички вже зараз.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-qa.png" />
        <a class="title" href="#"><h3>Quality Assurance</h3></a>
        <p>Курс для тих, хто вміє конструктивно критикувати та хотів би з цього навику зробити цікаву інноваційну професію.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-english.png" />
        <a class="title" href="#"><h3>Business English</h3></a>
        <p>Якщо ви лідер команди або менеджер проектів, Business English допоможе вам здобути корисні інструменти для ефективних комунікацій як всередині команди так і з клієнтами.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li class="left-col">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-webdesign.png" />
        <a class="title" href="#"><h3>Web & Mobile Design</h3></a>
        <p>Це динамічний та насиченний навчальний курс, який дає змогу отримати базові знання з Веб дизайну та дизайну мобільних додатків. Ви дізнаєтесь як проектувати інтерфейси та робити сайти зручними для відвідувачів. Отримаєте базові знання по композиції, фірмовому стилю, шрифтам та роботі з ком'ютерними програмами для подальшого розвитку у галузі дизайну.</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-gamedesign.png" />
        <a class="title" href="#"><h3>Game Production</h3></a>
        <p>Часи, коли ігри створювали фанатики-одинаки давно позаду. Сьогодні шалено зростаюча індустрія геймдеву відкриває двері широкому колу спеціалістів. Курс Game Production познайомить учнів із процессом створення комп’ютерних ігр, особливостями ведення GDD, допоможе розібратися з ігровими механіками, жанрами, тенденціями, термінологією... А ще, надихне спостерігати, помічати, пробувати, вивчати життя, бо, як не дивно, часто саме це визначає якісний геймдев :)</p>
        <a href="#">Докладніше + реєстрація</a>
    </li>
    <li>
    </li>
    </ul>
    </div>
</div>
<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
