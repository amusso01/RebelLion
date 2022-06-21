import Glide from "@glidejs/glide";

const carousel = new Glide(".glide", {
	type: "carousel",
	startAt: 0,
	perView: 4,
	touchRatio: 0,
	loop: false,
	dragThreshold: 0,
	gap: 40,
	peek: {
		before: 0,
		after: 120
	}
});

export { carousel };
