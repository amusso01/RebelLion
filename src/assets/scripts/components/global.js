/* ***** ----------------------------------------------- ***** **
 ** ***** Global JS
 ** ***** ----------------------------------------------- ***** */

import Alpine from "alpinejs";
import "lazysizes";
import "lazysizes/plugins/bgset/ls.bgset";

import { mmMenu, mmBurger } from "./magnetLink";
import { menuInteraction } from "./menu";

const init = () => {
	window.Alpine = Alpine;
	Alpine.start();
	menuInteraction();
	mmMenu.init();
	mmBurger.init();
};

export { init };
