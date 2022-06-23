/* ***** ----------------------------------------------- ***** **
 ** ***** Global JS
 ** ***** ----------------------------------------------- ***** */

import Alpine from "alpinejs";
import "lazysizes";
import "lazysizes/plugins/bgset/ls.bgset";


import { mmBurger } from "./magnetLink";
import { menuInteraction } from "./menu";

const init = () => {
	window.Alpine = Alpine;
	Alpine.start();
	mmBurger.init();

	// EVENT LISTENER
	menuInteraction();

};

export { init };
