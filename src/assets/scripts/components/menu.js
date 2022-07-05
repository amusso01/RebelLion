import gsap from "gsap";

const hamburger = document.getElementById("hamburger");
const menuContainer = document.getElementById("menuContainer");
const menuOverlay = document.getElementById("burgerOverlay");
const menuItems = document.querySelectorAll(".o-nav-menuItem");

const tl = gsap.timeline({
	paused: true,
	reversed: true,
	// onComplete: OnCompleteCheck,
	onReverseComplete: OnCompleteCheck
});

tl.add(openMenu);
tl.to(menuOverlay, {
	width: window.outerWidth * 2,
	height: window.outerHeight * 2,
	top: window.outerHeight / 2,
	left: -(window.outerWidth / 2),
	duration: 0.2
});
tl.to(menuOverlay, { opacity: 0, duration: 0.4 });
tl.to(menuContainer, { opacity: 1, delay: -0.6, duration: 0.3 });
// tl.from(menuItem, {y: -30, opacity:0, stagger:0.1, duration:0.2,  delay: -0.1} );

function masterPlay() {

	return tl;

}

function openMenu(e) {
	menuContainer.classList.toggle("s-active");
	document.body.parentNode.classList.toggle("s-no-scroll");
}

function OnCompleteCheck(){
	if(	menuContainer.classList.contains("s-active")){
		menuContainer.classList.remove("s-active")
	}
	if(document.body.parentNode.classList.contains("s-no-scroll")){
			document.body.parentNode.classList.remove("s-no-scroll")
	}
}

const menuInteraction = () => {
	hamburger.addEventListener("click", ()=>{
		let tl  = masterPlay()
			tl.reversed() ? tl.play() : tl.reverse();
	});

	menuItems.forEach(element => {
		element.addEventListener('click',(e)=>{
			if(e.target.parentElement.classList.contains('o-nav-menuListItem--current')){
				let tl  = masterPlay()
				tl.reversed() ? tl.play() : tl.reverse();
			}
		})
	});
};

export { menuInteraction, masterPlay };
