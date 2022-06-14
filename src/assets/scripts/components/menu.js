import gsap from "gsap";

const hamburger = document.getElementById("hamburger");
const menuContainer = document.getElementById("menuContainer");
const menuOverlay = document.getElementById("burgerOverlay");

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

export { menuInteraction };
