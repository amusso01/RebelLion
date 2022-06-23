import { gsap } from "gsap";
import { ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function trigerTL(obScrollTriger) {
	const textScrollTL = gsap.timeline({
		scrollTrigger: obScrollTriger
	});

	return textScrollTL;
}

export { trigerTL };
