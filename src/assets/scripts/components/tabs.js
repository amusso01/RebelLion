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

// ADD LISTENER

const tabInit = function() {
	cats.forEach(element => {
		element.addEventListener("click", tabInteraction);

		element.addEventListener("click", catDisable);
	});
};

export { tabInteraction, catDisable, tabInit };
