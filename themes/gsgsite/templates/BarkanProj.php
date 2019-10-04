<?php
/*
Template Name: Barkan Project
*/
?>
<?php get_header(); ?>

<div class="page barkanPAGE">
	<!-- SectionContacts -->
	<section class="barkan-header">

		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-12 barkan-header__img">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock124.jpg">
				</div>

				<p class="barkan-header__text">ברקן מול הים | ברק </p>
			</div>
		</div>
	</section>
	<section class="barkan-about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column">
					<h5 class="barkan-about__title">
						ברקן מול הים | על הפרוייקט
					</h5>
					<p class="barkan-about__text">	פרויקט ברקן מול הים, הינו פרויקט הרחבה קהילתית הכולל 62 מגרשים בגודל של כחצי דונם המיועדים לבניית וילות צמודות קרקע. הפרויקט ממוקם באזור הצפון מערבי של הישוב (הגבעה הצפונית) ופונה לנוף הררי מרהיב.
	נשארו 3 מגרשים אחרונים בלבד!
					</p>
					<h5 class="barkan-about__title">
						ברקן מול הים | פירוט הפרוייקט
					</h5>
					<p class="barkan-about__text">	62 מגרשים למכירה ביישוב ברקן | גודל מגרש החל מ500 מ”ר ועד 700 מ”ר | מחיר השטח כולל פיתוח ומיסי מקום | אפשרות לבניית וילה צמודה קרקע בשומרון
	תכנון | גביש שחם
	ניהול הפרוייקט | גביש שחם
					</p>
					<a href="#" class="barkan-about__btn"> הורדת חוברת הפרוייקט- PDF</a>
				</div>
				<div class="col-lg-6 d-flex flex-column">
					<h5 class="barkan-about__title">
						ברקן מול הים | על האזור
					</h5>
					<p class="barkan-about__text">
						הישוב נוסד ב1981, ביושב כ400 משפחות. בישוב אוכלוסיה איכותית המנהלת חיי קהילה משותפים. בישוב תינוקיות, מעון, גני ילדים, ובית ספר יסודי, ביושב בריכה, מגרשי טניס ופעילות תרבותית ענפה.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="barkan-slider">
		<div class="barkan-slider__img">
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_125.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/192489-OXNYW4-292.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shutterstock_125.jpg">
				</div>
			</div>
			<div>
				<div class="barkan-single-slider">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/192489-OXNYW4-292.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="barkan-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<h5 class="barkan-about__title">ברקן מול הים | מדדים חברתיים</h5>
					<p class="barkan-about__text">מדד חברתי כלכלי מתוך אתר 10 - אתר “מדלן”
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext"><strong>גילאי התושבים</strong>| בני 16 עד 45</p>
					<div class="barkan-about__statline"><span class="statline_01"></span></div><p>60%</p>
				</div>
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext"><strong>תעסוקה</strong> | צווארון לבן</p>
					<div class="barkan-about__statline"><span class="statline_02"></span></div><p>42%</p>
				</div>
				<div class="col-12 d-inline-flex justify-content-between flex-direction-middle barkan-about__stat_wrap">
					<p class="barkan-about__stattext"><strong>השכלה</strong>| אקדמאים</p>
					<div class="barkan-about__statline"><span class="statline_03"></span></div><p>80%</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-12"><h5 class="barkan-about__title">ברקן מול הים | מדדים חברתיים</h5></div>
				<div class="col-12">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/barkan-map.png" class="barkan__about_map">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- SectionContacts -->

	<section id="sn-contactus" class="sn-contactsus">
		<div class="container">
			 <?php  echo do_shortcode('[caldera_form id="CF5d9673b59f3b3"]'); ?>
			 <div class="contactsus-after-line">
				 <div><a href="#">< לפרוייקט הקודם</a></div>
				 <div class="middleText">חזרה לעמוד פרוייקטים מיידיים</div>
				 <div><a href="#">לפרוייקט הבא ></a></div>
			 </div>
		</div>
	</section>


</div>

<?php
get_footer();
?>
