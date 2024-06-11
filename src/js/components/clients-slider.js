import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css';

import { buildSwiper, removeSwiper } from './build-swiper';

const CLASS_NAMES = {
	slider: '.js-clients-slider',
	wrapper: '.js-clients-wrapper',
	arrowNext: '.js-slider-navigation-next',
	arrowPrev: '.js-slider-navigation-prev',
	pagination: '.js-clients-slider-dots',
};

Swiper.use([Navigation, Pagination]);

/**
 * Swiper default sample
 */
const clientsSlider = () => {
	const $sliderWrappers = document.querySelectorAll(CLASS_NAMES.wrapper);

	if (!$sliderWrappers.length) return;

	$sliderWrappers.forEach(($wrapper) => {
		const $slider = $wrapper.querySelector(CLASS_NAMES.slider);
		const $prevArrow = $wrapper.querySelector(CLASS_NAMES.arrowPrev);
		const $nextArrow = $wrapper.querySelector(CLASS_NAMES.arrowNext);
		const $pagination = $wrapper.querySelector(CLASS_NAMES.pagination);

		buildSwiper($slider);

		const sliderInstance = new Swiper($slider, {
			observer: true,
			observeParents: true,
			speed: 800,
			// loop: true,
			navigation: {
				prevEl: $prevArrow,
				nextEl: $nextArrow,
			},
			pagination: {
				el: $pagination,
				type: 'bullets',
				clickable: true,
			},
			slidesPerView: 1,
			spaceBetween: 20,
		});
	});
};

export default clientsSlider;
