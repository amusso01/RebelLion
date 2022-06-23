import { gsap } from "gsap";
import { isDeviceWindows, isMediumWidth } from "../utilities/check";

export default function mouseOn() {
	gsap.set("#follow", { xPercent: -50, yPercent: -50 });

	// const hasUseLoader = sessionStorage.getItem("hasUseLoader");
	// const body = document.querySelector("body");
	const follow = document.getElementById("follow");
	const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
	const mouse = { x: pos.x, y: pos.y };
	const speed = 0.1;
	const fpms = 60 / 1000;
	const xSet = gsap.quickSetter(follow, "x", "px");
	const ySet = gsap.quickSetter(follow, "y", "px");



	// SET OPACITY
	// if (!body.classList.contains("home") || hasUseLoader) {
	// 	document.querySelector("#follow").setAttribute("style", "opacity:1");
	// }

	// MOUSE FOLLOW
	if(!isMediumWidth){
		window.addEventListener("mousemove", e => {
			mouse.x = e.x;
			mouse.y = e.y;
		});
	}else{
		follow.style.display = "none"
	}

	gsap.ticker.add((time, deltaTime) => {
		const delta = deltaTime * fpms;
		const dt = 1.0 - Math.pow(1.0 - speed, delta);

		pos.x += (mouse.x - pos.x) * dt;
		pos.y += (mouse.y - pos.y) * dt;
		xSet(pos.x);
		ySet(pos.y);
	});
}
