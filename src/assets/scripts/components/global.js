/* ***** ----------------------------------------------- ***** **
 ** ***** Global JS
 ** ***** ----------------------------------------------- ***** */

import Alpine from "alpinejs";
import "lazysizes";
import "lazysizes/plugins/bgset/ls.bgset";
import MagnetMouse from "magnet-mouse";

// MAGNET OPTIONS MENU
let mmMenu = new MagnetMouse({
	magnet: {
		element: ".magnet",
		distance: 0
	},
	inCallback: function(data) {
		let follow = document.getElementById("follow");

		follow.classList.add("follow-menu-active");
	},
	outCallback: function() {
		let follow = document.getElementById("follow");

		follow.classList.remove("follow-menu-active");
	}
});
// MAGNET OPTIONS BURGER
let mmBurger = new MagnetMouse({
	magnet: {
		element: ".magnet-burger",
		distance: 20
	},
	inCallback: function(data) {
		let follow = document.getElementById("follow");

		follow.classList.add("follow-burger-active");
	},
	outCallback: function() {
		let follow = document.getElementById("follow");

		follow.classList.remove("follow-burger-active");
	}
});

const init = () => {
	window.Alpine = Alpine;
	Alpine.start();
	mmMenu.init();
	mmBurger.init();
};

export { init };
