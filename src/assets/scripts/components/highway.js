/* ***** ----------------------------------------------- ***** **
 ** ***** Highway JS
 ** ***** ----------------------------------------------- ***** */

import Highway from "@dogstudio/highway";
import { carousel } from "./carousel";

import { gsap } from "gsap";

import { trigerTL } from "../animation/scroll-text";

/* global gtag, gaId */

// Set active link on newly loaded page
// Check if user is on the same page as current nav item
// Or if user is in the same section as nav item
const setActiveLink = location => {
	const menuItem = document.querySelectorAll(".js-nav-menuItem");

	menuItem.forEach(item => {
		item.parentElement.classList.remove("o-nav-menuListItem--current");
		if (item.href === location.href) {
			item.parentElement.classList.add("o-nav-menuListItem--current");
		} else {
			const currentItemSlug = item.href.split("/")[3];
			const currentLocationSlug = location.href.split("/")[3];
			if (currentItemSlug === currentLocationSlug)
				item.parentElement.classList.add("o-nav-menuListItem--current");
		}
	});
};

// Update body classes from new page
const updateBodyClasses = to => {
	document.body.classList = to.page.body.classList;
};

// Track Google Analytics on a new page load
const trackGA = (to, location) => {
	if (typeof gtag === "undefined") return;

	gtag("config", gaId, {
		page_path: location.pathname,
		page_title: to.page.title,
		page_location: location.href
	});
};

// mount glide on single
class SingleRenderer extends Highway.Renderer {
	// Hooks/methods
	onEnterCompleted() {
		carousel.mount();
	}
}

// SERVICES
class ServicesRenderer extends Highway.Renderer {
	// Hooks/methods
	onEnterCompleted() {
		const cats = document.querySelectorAll('[ data-item="service-cat" ]');
		const tabs = document.querySelectorAll("[ data-tab]");

		// TABS BOTTOM INTERATION
		const tabInteraction = function(e) {
			const tabAim = this.getAttribute("data-cat");

			tabs.forEach(el => {
				let tabTarget = el.getAttribute("data-tab");

				if (tabTarget == tabAim) {
					el.classList.remove("s-disabled");
				} else {
					el.classList.add("s-disabled");
				}
			});
		};

		// CATEGORY TOP INTERACTION "MENU"
		const catDisable = function() {
			cats.forEach(el => {
				let link = el.querySelector(".cat-link");

				if (el !== this) {
					el.classList.add("s-disabled");
					el.classList.remove("s-active-svg");
					link.classList.remove("s-active");
				} else {
					el.classList.remove("s-disabled");
					el.classList.add("s-active-svg");
					link.classList.add("s-active");
				}
			});
		};
		cats.forEach(element => {
			element.addEventListener("click", tabInteraction);

			element.addEventListener("click", catDisable);
		});
	}
}

// ABOUT
class AboutRenderer extends Highway.Renderer {
	onEnter() {}

	// Hooks/methods
	onEnterCompleted() {
		const textScrollTL = trigerTL(
			"[data-scroll-text-start]",
			"[data-scroll-text-end]"
		);

		gsap.fromTo(
			".hero-showcase",
			{ opacity: 0, y: -30 },
			{ opacity: 1, y: 0, duration: 1 }
		);

		gsap.fromTo(".hero-more", { opacity: 0 }, { opacity: 1, duration: 2 });

		textScrollTL.to(".hero-more", { y: -300, autoAlpha: 0 }, 0);
		textScrollTL.to(".hero-showcase", { y: -150, autoAlpha: 0 }, 0);
		textScrollTL.to(".text-strip-forward", { x: -500 }, 0);
		textScrollTL.to(".text-strip-reverse", { x: 0 }, 0);
	}
}

export {
	setActiveLink,
	updateBodyClasses,
	trackGA,
	SingleRenderer,
	ServicesRenderer,
	AboutRenderer
};
