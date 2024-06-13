import clientsSlider from 'components/clients-slider';
import alert from 'components/alert';

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
			alert();
		});
		// setTimeout(() => {
		// 	this.importPage();
		// }, 0);
	}
}
