/* ***** ----------------------------------------------- ***** **
/* ***** Main JS
/* ***** ----------------------------------------------- ***** */

import Highway from "@dogstudio/highway";
import {
	setActiveLink,
	updateBodyClasses,
	trackGA,
	SingleRenderer,
	ServicesRenderer,
	AboutRenderer,
	HomeRenderer,
	ContactRenderer,
	RebelsRenderer
} from "./components/highway.js";
import Fade from "./transitions/Fade";
import mouseInit from "./components/mouse";
import { tabInteraction, catDisable } from "./components/tabs";

import { init as globalInit } from "./components/global.js";


import { carousel } from "./components/carousel";

import Scroll2Reveal from './vendors/Scroll2Reveal.js';




// Init on first load
globalInit();


window.dispatchEvent(new Event("resize"));
const s2r = new Scroll2Reveal();


// Mouse
mouseInit();



const isGlide = document.querySelector(".glide");
if (typeof isGlide != "undefined" && isGlide != null) {
	carousel.mount();
}

// Init Highway
const H = new Highway.Core({
	transitions: {
		default: Fade
	},
	renderers: {
		single: SingleRenderer,
		services: ServicesRenderer,
		about: AboutRenderer,
		home: HomeRenderer,
		contact: ContactRenderer,
		rebels: RebelsRenderer
	}
});

// When user is logged into WordPress, update admin bar content on page load
const isLoggedIn = document.body.classList.contains("logged-in");
if (isLoggedIn) {
	// Query admin bar links and detach them from Highway transitions
	const adminBarLinks = document.querySelectorAll("#wpadminbar a");
	H.detach(adminBarLinks);
}

// Executed at the start of every page load
H.on("NAVIGATE_IN", ({ to, location }) => {
	setActiveLink(location);
	updateBodyClasses(to);
	s2r.reInit();
});

// Executed when the page has loaded completely
H.on("NAVIGATE_END", ({ to, location }) => {
	if (isLoggedIn) {
		// Query admin bar links, and new page's admin bar links
		const adminBar = document.querySelector("#wpadminbar");
		const newAdminBar = to.page.body.querySelector("#wpadminbar");

		// Replace current admin bar with new admin bar content
		if (adminBar && newAdminBar) adminBar.innerHTML = newAdminBar.innerHTML;

		// Detach admin bar links from Highway transitions
		const adminBarLinks = document.querySelectorAll("#wpadminbar a");
		H.detach(adminBarLinks);
	}

	trackGA(to, location);
});
