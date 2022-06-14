/* ***** ----------------------------------------------- ***** **
 ** ***** Global JS
 ** ***** ----------------------------------------------- ***** */

import Alpine from "alpinejs";
import "lazysizes";
import "lazysizes/plugins/bgset/ls.bgset";

import { mmMenu, mmBurger } from "./magnetLink";
import { menuInteraction } from "./menu";
import { tabInteraction, catDisable } from "./tabs";
// import { scroll } from "./locomotiveScroll";

const init = () => {
	window.Alpine = Alpine;
	Alpine.start();
	// scroll.init();
	mmMenu.init();
	mmBurger.init();

	// EVENT LISTENER
	menuInteraction();
};

export { init };
