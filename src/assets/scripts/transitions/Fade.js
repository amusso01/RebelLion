/* ***** ----------------------------------------------- ***** **
 ** ***** Fade JS
 ** ***** ----------------------------------------------- ***** */

import Highway from "@dogstudio/highway";
import gsap from "gsap";
import { masterPlay } from "../components/menu";

const menuContainer = document.getElementById("menuContainer");

class Fade extends Highway.Transition {
	in({ from, to, done }) {
		// Reset Scroll
		window.scrollTo(0, 0);


		// Remove Old View
		from.remove();


		// Animation
		gsap.fromTo(to, 0.5, { opacity: 0 }, { opacity: 1, onComplete: done  });

		
	}

	out({ from, done }) {

		// NEW menu animation
		const tl = masterPlay();

		if(tl.totalProgress() == 1){
			tl.reversed() ? tl.play() : tl.reverse();
		}
	

		gsap.fromTo(from, 0.5, { opacity: 1 }, { opacity: 0,  delay: 0.5 ,  onComplete: done });
	}
}

export default Fade;
