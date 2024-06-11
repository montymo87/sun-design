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
		});
		// setTimeout(() => {
		// 	this.importPage();
		// }, 0);
	}
}
