import gsap from "gsap";

const hamburger = document.getElementById("hamburger");
const menuContainer = document.getElementById("menuContainer");
const menuOverlay = document.getElementById("burgerOverlay");
const menuItem = document.querySelectorAll(".o-nav-menuItem");

const tl = gsap.timeline({
	paused: true,
	reversed: true,
	onComplete: openMenu,
	onReverseComplete: openMenu
});

tl.to(menuOverlay, {
	width: window.outerWidth * 2,
	height: window.outerHeight * 2,
	top: window.outerHeight / 2,
	left: -(window.outerWidth / 2),
	duration: 0.3
});
tl.to(menuOverlay, { opacity: 0, duration: 0.3 });
tl.to(menuContainer, { opacity: 1, delay: -0.5, duration: 0.3 });

function masterPlay() {
	tl.reversed() ? tl.play() : tl.reverse();
}

function openMenu(e) {
	menuContainer.classList.toggle("s-active");
	// TODO ANIMATION for circle before menu appear (MAKE A GSAP TIMELINE)
	// SET WIDTH AND HEIGHT OF CIRCLE VIA JS based on Screen size
	// menuOverlay.classList.toggle("s-active");
	document.body.classList.toggle("s-no-scroll");
}

const menuInteraction = () => {
	hamburger.addEventListener("click", openMenu);
};

export { menuInteraction, tl };
