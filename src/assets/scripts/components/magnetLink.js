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

		follow.style.width = data.elem.width + 4 + "px";
		follow.style.height = data.elem.height + 4 + "px";
		// follow.style.left = - (data.elem.width / 2) - 2;
		// follow.style.top = - (data.elem.height / 2) - 2;

		follow.classList.add("follow-mouse-active");
	},
	outCallback: function() {
		let follow = document.getElementById("follow");

		follow.style.width = "";
		follow.style.height = "";

		follow.classList.remove("follow-mouse-active");
	}
});

export { mmMenu, mmBurger };
