import { gsap } from "gsap";



function homeHeroTL() {
	const heroTL= gsap.timeline({
    paused: true
  });

	return heroTL;
}

export { homeHeroTL };