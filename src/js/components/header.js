import gsap from 'gsap';
import { onWindowScroll, exist } from '../utils';

const header = () => {
	const SELECTORS = {
		header: '.js-header',
		menuTrigger: '.js-header-menu-trigger',
		subList: '.sub-menu',
		menuItem: '.header__nav_list > li',
	};

	const CLASSNAMES = {
		bodyOpenMenuState: 'body--open_menu_state',
		headerScrollState: 'header--scroll_state',
		menuActiveState: 'menu_item--active',
	};

	const $body = document.body;
	const $header = document.querySelector(SELECTORS.header);
	const $menuTriggers = document.querySelectorAll(SELECTORS.menuTrigger);
	const $menuItem = document.querySelectorAll(SELECTORS.menuItem);

	let isMenuOpen = false;

	const handleTriggerClick = () => {
		if (!isMenuOpen) {
			$body.classList.add(CLASSNAMES.bodyOpenMenuState);
			isMenuOpen = true;
		} else {
			$body.classList.remove(CLASSNAMES.bodyOpenMenuState);
			isMenuOpen = false;
		}
	};

	const headerScroll = (scrollY) => {
		if (scrollY > 10 && !$header.classList.contains(CLASSNAMES.headerScrollState)) {
			$header.classList.add(CLASSNAMES.headerScrollState);
		} else if (scrollY <= 10 && $header.classList.contains(CLASSNAMES.headerScrollState)) {
			$header.classList.remove(CLASSNAMES.headerScrollState);
		}
	};

	$menuItem.forEach((item) => {
		let triggerLink = item.querySelector('a');
		let subMenu = item.querySelector(SELECTORS.subList);

		if (!subMenu) return;
		triggerLink.classList.add('header__nav_link--remove_events');

		item.addEventListener('click', (e) => {
			if (e.target.querySelector(SELECTORS.subList)) {
				e.target.classList.toggle(CLASSNAMES.menuActiveState);
			} else {
				item.classList.toggle(CLASSNAMES.menuActiveState);
			}
			console.log(e.target);
		});
	});

	const initializeEventListeners = () => {
		if (!exist($menuTriggers)) return;

		$menuTriggers.forEach(($trigger) => {
			$trigger.addEventListener('click', () => {
				handleTriggerClick();
			});
		});
	};

	if (!exist($header)) return;

	onWindowScroll(headerScroll);
	initializeEventListeners();
};

export default header;
