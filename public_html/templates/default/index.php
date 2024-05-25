<section class="page__main-slider main-slider">
	<div class="main-slider__container _container">
		<div class="main-slider__body">
			<div class="main-slider__content content-main">
				<h1 class="content-main__title"><?= $this->set['keywords'] ?></h1>
				<div class="content-main__text">
					<?= $this->set['description'] ?>
				</div>
				<a href="<?= $this->alias('catalog') ?>" data-da=".main-slider__body,991.98" class="content-main__button btn">Весь ассортимент</a>
			</div>
			<div class="main-slider__slider slider-main">
				<div class="slider-main__controls controls-slider-main">
					<div class="controls-slider-main__dotts"></div>
					<div class="controls-slider-main__arrows slider-arrows">
						<button type="button" class="slider-arrow slider-arrow_prev _icon-arrow-down"></button>
						<button type="button" class="slider-arrow slider-arrow_next _icon-arrow-down"></button>
					</div>
				</div>
				<div class="slider-main__body _swiper">

					<?php if (!empty($sales)) : ?>

						<?php foreach ($sales as $item) : ?>

							<div class="slider-main__slide">
								<div class="slider-main__image _ibg">

									<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">

								</div>
								<a href="#" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="slider-main__content">
									<div class="slider-main__title"><?= $item['name'] ?></div>
									<div style="font-weight:600" class="slider-main__text"><?= $item['sub_title'] ?></div>
									<!-- <div class="slider-main__price _icon-arrow-link">Rp 17.000.000</div> -->
								</a>
							</div>

						<?php endforeach; ?>

					<?php endif; ?>

					<!-- <div class="slider-main__slide">
						<div class="slider-main__image _ibg">
							<img src="<?= PATH . TEMPLATE ?>assets/img/main-slider/приправы-на-тарелке-min.jpg" alt="Image">
						</div>
						<a href="" data-swiper-parallax-opacity="0" data-swiper-parallax-x="-100%" class="slider-main__content">
							<div class="slider-main__title">Bohauss</div>
							<div class="slider-main__text">Luxury big sofa 2-seat</div>
							<div class="slider-main__price _icon-arrow-link">Rp 17.000.000</div>
						</a>
					</div> -->

				</div>
			</div>
		</div>
	</div>
</section>

<?php if (!empty($advantages)) : ?>

	<section class="page__advantages advantages">
		<div class="advantages__container _container">

			<?php foreach ($advantages as $item) : ?>

				<div class="advantages__item">
					<div class="advantages__icon">

						<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">

					</div>
					<h3 class="advantages__title"><?= $item['name'] ?></h3>
					<div class="advantages__text"><?= $item['short_content'] ?></div>
				</div>

			<?php endforeach; ?>

			<!-- <div class="advantages__item">
				<div class="advantages__icon">
					<picture>
						<source srcset="<?= PATH . TEMPLATE ?>assets/img/advantages/02.svg" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/advantages/02.svg" alt="Warrany Protection">
					</picture>
				</div>
				<h3 class="advantages__title">Гарантия качества</h3>
				<div class="advantages__text">декларации соответствия и сертификаты качества на всю продукцию</div>
			</div> -->

		</div>
	</section>

<?php endif; ?>

<?php if (!empty($goods) && !empty($arrHits)) : ?>

	<section class="page__products products">
		<div class="products__container _container">

			<?php foreach ($arrHits as $key => $value) : ?>

				<?php if (!empty($goods[$key])) : ?>

					<h2 class="products__title _title"><?= $value['name'] ?></h2>
					<div class="products__items">

						<?php foreach ($goods[$key] as $item) {

							$this->showGoods($item);
						} ?>

					</div>

				<?php endif; ?>



			<?php endforeach; ?>

			<div class="products__footer">
				<a href="<?= $this->alias('catalog') ?>" class="products__more-1 btn btn_white">Весь ассортимент</a>
			</div>
		</div>
	</section>

<?php endif; ?>

<!-- <section class="page__rooms rooms">
	<div class="rooms__container _container">
		<div class="rooms__body">
			<h2 class="rooms__title _title">50+ Beautiful rooms inspiration</h2>
			<div class="rooms__text">Our designer already made a lot of beautiful prototipe of rooms that inspire
				you</div>
			<a href="" class="rooms__button btn">Explore More</a>
		</div>
		<div class="rooms__slider slider-rooms">
			<div class="slider-rooms__body _swiper">
				<div class="slider-rooms__slide">
					<div class="slider-rooms__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/rooms/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/rooms/01.jpg" alt="Bed Room">
						</picture>
					</div>
					<a href="" data-swiper-parallax-opacity="0" data-swiper-parallax-y="-100%" class="slider-rooms__content _icon-arrow-link">
						<div class="slider-rooms__label label-slider">
							<div class="label-slider__number">01</div>
							<div class="label-slider__line"></div>
							<div class="label-slider__text">Bed Room</div>
						</div>
						<div class="slider-rooms__title">Inner Peace</div>
					</a>
				</div>
				<div class="slider-rooms__slide">
					<div class="slider-rooms__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/rooms/02.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/rooms/02.jpg" alt="Bed Room">
						</picture>
					</div>
					<a href="" data-swiper-parallax-opacity="0" data-swiper-parallax-y="-100%" class="slider-rooms__content _icon-arrow-link">
						<div class="slider-rooms__label label-slider">
							<div class="label-slider__number">02</div>
							<div class="label-slider__line"></div>
							<div class="label-slider__text">Bed Room</div>
						</div>
						<div class="slider-rooms__title">Inner Peace</div>
					</a>
				</div>
				<div class="slider-rooms__slide">
					<div class="slider-rooms__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/rooms/03.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/rooms/03.jpg" alt="Bed Room">
						</picture>
					</div>
					<a href="" data-swiper-parallax-opacity="0" data-swiper-parallax-y="-100%" class="slider-rooms__content _icon-arrow-link">
						<div class="slider-rooms__label label-slider">
							<div class="label-slider__number">03</div>
							<div class="label-slider__line"></div>
							<div class="label-slider__text">Bed Room</div>
						</div>
						<div class="slider-rooms__title">Inner Peace</div>
					</a>
				</div>
			</div>
			<div class="slider-rooms__arrows slider-arrows">
				<button type="button" class="slider-arrow slider-arrow_white slider-arrow_prev _icon-arrow-down"></button>
				<button type="button" class="slider-arrow slider-arrow_white slider-arrow_next _icon-arrow-down"></button>
			</div>
			<div class="slider-rooms__dotts"></div>
		</div>
	</div>
</section>
<section class="page__tips tips">
	<div class="tips__container _container">
		<h2 class="tips__title _title">Tips & Tricks</h2>
		<div class="tips__slider slider-tips">
			<div class="slider-tips__body _swiper">
				<div class="slider-tips__slide">
					<a href="" class="slider-tips__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/tips/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/tips/01.jpg" alt="How to create a living room to love">
						</picture>
					</a>
					<div class="slider-tips__content">
						<a href="" class="slider-tips__title">How to create a living room to love</a>
						<div class="slider-tips__text">20 jan 2020</div>
					</div>
				</div>
				<div class="slider-tips__slide">
					<a href="" class="slider-tips__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/tips/02.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/tips/02.jpg" alt="Solution for clean look working space">
						</picture>
					</a>
					<div class="slider-tips__content">
						<a href="" class="slider-tips__title">Solution for clean look working space</a>
						<div class="slider-tips__text">10 jan 2020</div>
					</div>
				</div>
				<div class="slider-tips__slide">
					<a href="" class="slider-tips__image _ibg">
						<picture>
							<source srcset="<?= PATH . TEMPLATE ?>assets/img/tips/03.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/tips/03.jpg" alt="Make your cooking activity more fun with good setup">
						</picture>
					</a>
					<div class="slider-tips__content">
						<a href="" class="slider-tips__title">Make your cooking activity more fun with good setup</a>
						<div class="slider-tips__text">20 jan 2020</div>
					</div>
				</div>
			</div>
			<div class="slider-tips__dotts"></div>
			<div class="slider-tips__arrows slider-arrows">
				<button type="button" class="slider-arrow slider-arrow_white slider-arrow_prev _icon-arrow-down"></button>
				<button type="button" class="slider-arrow slider-arrow_white slider-arrow_next _icon-arrow-down"></button>
			</div>
		</div>
	</div>
</section>
<section class="page__furniture furniture">
	<div class="furniture__container">
		<div class="furniture__label">Share your setup with</div>
		<h2 class="furniture__title _title">#FuniroFurniture</h2>
		<div data-speed="0.01" class="furniture__body">
			<div class="furniture__items _gallery">
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_left-top">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/09.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/02.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/02.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/02.jpg" alt="Image">
							</picture>
						</a>
					</div>
					<div class="furniture__row row-furniture row-furniture_left-bottom">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/04.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/06.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/07.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/07.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/07.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_center">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/03.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/03.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/03.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_right-top">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/04.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/05.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/05.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/05.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" alt="Image">
							</picture>
						</a>
					</div>
					<div class="furniture__row row-furniture row-furniture_right-bottom">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/08.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/08.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/08.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/09.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/06.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->