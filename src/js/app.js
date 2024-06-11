import clientsSlider from 'components/clients-slider';

import layout from 'layout/layout';
import { pageLoad } from './utils';

export default class App {
	constructor() {
		this.init();
	}

	init() {
		const initLayout = layout();
		pageLoad(() => {
			document.body.classList.add('body--loaded');

			clientsSlider();
		});
		// setTimeout(() => {
		// 	this.importPage();
		// }, 0);
	}
}
