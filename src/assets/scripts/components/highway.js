/* ***** ----------------------------------------------- ***** **
 ** ***** Highway JS
 ** ***** ----------------------------------------------- ***** */

import Highway from "@dogstudio/highway";
import { carousel } from "./carousel";

// GSAP
import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";
import { ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

import { trigerTL } from "../animation/scrollTLTriger";
import { homeHeroTL } from "../animation/home-hero";
import { lottieAnimation } from "../animation/lottieSwirl";
import { isMediumWidth } from "../utilities/check";

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
		const svgLottieStripe = document.querySelector('.lottie-stripe')
		let svgLottieTriangle = document.querySelector('.lottie-triangle')
		let svgLottieWave = document.querySelector('.lottie-wave')

		const aboutStripe = {
			loop:true, 
			element: svgLottieStripe,
			autoplay: true,
			path:'https://assets2.lottiefiles.com/packages/lf20_ueeohbyb.json'
		} // OBJ to pass to lottie web
		const aboutTriangle = {
			loop:true, 
			element: svgLottieTriangle,
			autoplay: true,
			path: "https://assets8.lottiefiles.com/packages/lf20_ycmevstt.json"
		} // OBJ to pass to lottie web
		const aboutWave = {
			loop:true, 
			element: svgLottieWave,
			autoplay: true,
			path: "https://assets4.lottiefiles.com/packages/lf20_ihmd2ena.json"
		} // OBJ to pass to lottie web



		
		const stripeLottie = lottieAnimation(aboutStripe) // STRIPE SVG LOTTIE
		const triangleAboutLottie = lottieAnimation(aboutTriangle) // TRIANGLE SVG LOTTIE
		const waveAboutLottie = lottieAnimation(aboutWave) // TRIANGLE SVG LOTTIE


		let trigerOb =  {
			trigger: '[data-scroll-text-start]',
			start: 'top top',
			endTrigger: '[data-scroll-text-end]',
			end: '150%',
			scrub: 3,
		}
		const textScrollTL = trigerTL(trigerOb);

		gsap.to(
			".hero-showcase",
			{ opacity: 1, y: 0, duration: 1 }
		);

		gsap.fromTo(".hero-more", { opacity: 0 }, { opacity: 1, duration: 2 });

		textScrollTL.to(".hero-more", { y: -300 }, 0);
		textScrollTL.to(".hero-showcase", { y: -150}, 0);
		textScrollTL.to(".text-strip-forward", { x: -1200 }, 0);
		textScrollTL.to(".text-strip-reverse", { x: 0 }, 0);
	}

	onLeaveCompleted() {
			[ScrollTrigger.getAll().forEach((t) => t.kill())];
		}

}


// Home
class HomeRenderer extends Highway.Renderer {
	// Hooks/methods
	onEnter() {}

	onLeaveCompleted() {
		[ScrollTrigger.getAll().forEach((t) => t.kill())];
	}

	// Hooks/methods
	onEnterCompleted() {
		const splitText = document.querySelectorAll('.home-hero-text p')
		const mySplitText = new SplitText(splitText) //HOME HERO SPLIT TEXT
		
		const overlayText = document.querySelector('.p-home-hero .orange-overlay')
		const svgLottieSwirl = document.querySelector('.lottie-swirl')
		const svgLottieBlob = document.querySelector('.lottie-blob')
		const svgLottieTriangle = document.querySelector('.lottie-triangle')

		const herotL = homeHeroTL(); // Hero TL

		const homeSwirl = {
			loop:true, 
			element: svgLottieSwirl,
			autoplay: false,
			fileName: 'swirl-home.json'
		} // OBJ to pass to lottie web
		const homeBlob = {
			loop:false, 
			element: svgLottieBlob,
			autoplay: false,
			fileName: 'blob-home.json'
		} // OBJ to pass to lottie web
		const homeTriangle = {
			loop:true, 
			element: svgLottieTriangle,
			autoplay: false,
			fileName: 'triangle-home.json'
		} // OBJ to pass to lottie web

		let swirlLottie = lottieAnimation(homeSwirl) // SWIRL SVG LOTTIE
		let blobLottie = lottieAnimation(homeBlob) // BLOB SVG LOTTIE
		let triangleLottie = lottieAnimation(homeTriangle) // TRIANGLE SVG LOTTIE

		// INTRO TL
		let trigerOb =  {
			trigger: '#smoothContent',
			start: 'top top',
			scrub: 3,
		}

		// let swirlPin = ScrollTrigger.create({
		// 	trigger: '.top-home-svg',
		// 	animation: homeScrollTL,
		// 	pin: '.lottie-swirl',
		// 	start: "-=50",
		// 	scrub:true,
		// 	end: "+=1000"
		// })
		// let textScrollHome = ScrollTrigger.create({
		// 	trigger: '.bottom',
		// 	animation: ,
		// 	start: "-=50",
		// 	scrub:true,
		// 	end: "+=200",
			
		// })

		let lastText = gsap.to('.orange-overlay-last', { width:"100%", paused:true})



		const homeScrollTL = trigerTL(trigerOb); //INTRO TL SCROLL TRIGGER

		homeScrollTL.from('.text-top', {y:100, duration:2})
		homeScrollTL.from('.text-bottom', {y:50, duration:2}, 0)
		homeScrollTL.to('.js-image-intro' , {y:100, duration:2}, 0)
		homeScrollTL.to('.lottie-blob' , {y:80} , 0)
		// homeScrollTL.to('.js-image-bottom', {y:-100}, "bottom")
		// homeScrollTL.to('.text-bottom', {y:190},"bottom")
		homeScrollTL.to('.text-scrolling-home', {x:-250, duration:4}, "bottom")
		homeScrollTL.add(lastText.play(), "bottom+=2.5")


		// LOTTIE SVG INTRO
		let swirlGsap = gsap.to(svgLottieSwirl, { opacity:1, y:50 , duration:1 , paused: true	, onComplete: swirlLottie.play()})
		let triangleGsap = gsap.to(svgLottieTriangle, { opacity:1, y:150 , duration:1 , paused: true, onComplete: triangleLottie.play()	})

		ScrollTrigger.create({
			trigger: '.top-home-svg',
			start: 'bottom bottom',
			onEnter() {
				swirlGsap.play()
				blobLottie.play()
				triangleGsap.play()
			}
		})


		// HERO TL
		if(!isMediumWidth){
			herotL.from(mySplitText.chars, {  y:100, duration:0.3, stagger:0.05 , ease: "back"})
		}else{
			herotL.from(mySplitText.chars, {  y:150, duration:0.3, stagger:0.05 , ease: "back"})
		}
		herotL.to(overlayText, {width: "100%", duration: 0.3})
		herotL.play();


		

	}
	
}

// Contact
class ContactRenderer extends Highway.Renderer {
	onEnter() {}

	// Hooks/methods
	onEnterCompleted() {		
		if(!window.location.hash) {
		window.location = window.location + '#loaded';
		window.location.reload();
		}else{
			gsap.to(
				".hero-showcase",
				{ opacity: 1, y: 0, duration: 1 }
			);
		}
	}

}

// REBELS
class RebelsRenderer extends Highway.Renderer {
	onEnter() {}

	// Hooks/methods
	onEnterCompleted() {

		// SCROLL ANIMATION
		let trigerOb =  {
			trigger: '[data-scroll-rebels-start]',
			start: 'top +=200',
			endTrigger: '[data-scroll-rebels-end]',
			scrub: 3
		}
		const rebelsSrollTrigerTL = trigerTL(trigerOb);

		rebelsSrollTrigerTL.to('.o-card-team' , {y:0, duration:1})
		rebelsSrollTrigerTL.to('.bg-text-container' , { y: -70} , 0)

		// STARS 
		const svgStars = gsap.utils.toArray('.svg-star')

		const randomX = random(1, 10);
		const randomY = random(1, 10);
		const randomDelay = random(0, 1);
		const randomTime = random(3, 5);
		const randomTime2 = random(5, 10);
		const randomAngle = random(-10, 10);
		const sine = gsap.parseEase("sine.easeInOut");


		function rotate(target, direction) {
  
			gsap.to(target, randomTime2(), {
				rotation: randomAngle(direction),
				// delay: randomDelay(),
				ease: sine,
				onComplete: rotate,
				onCompleteParams: [target, direction * -1]
			});
		}
		
		function moveX(target, direction) {
			
			gsap.to(target, randomTime(), {
				x: randomX(direction),
				ease: sine,
				onComplete: moveX,
				onCompleteParams: [target, direction * -1]
			});
		}
		
		function moveY(target, direction) {
			
			gsap.to(target, randomTime(), {
				y: randomY(direction),
				ease: sine,
				onComplete: moveY,
				onCompleteParams: [target, direction * -1]
			});
		}
		
		function random(min, max) {
			const delta = max - min;
			return (direction = 1) => (min + delta * Math.random()) * direction;
		}

		svgStars.forEach(can => {
			gsap.set(can, {
				x: randomX(-1),
				y: randomX(1),
				rotation: randomAngle(-1)
			});
		
			moveX(can, 1);
			moveY(can, -1);
			rotate(can, 1);
		});


	}

	onLeaveCompleted() {
		[ScrollTrigger.getAll().forEach((t) => t.kill())];
	}

}


export {
	setActiveLink,
	updateBodyClasses,
	trackGA,
	SingleRenderer,
	ServicesRenderer,
	AboutRenderer,
	HomeRenderer,
	ContactRenderer,
	RebelsRenderer
};
