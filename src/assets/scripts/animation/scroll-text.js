import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function trigerTL(start, end) {
	const textScrollTL = gsap.timeline({
		scrollTrigger: {
			trigger: start,
			start: "top top",
			endTrigger: end,
			scrub: 3,
			markers: true
		}
	});

	return textScrollTL;
}

export { trigerTL };
