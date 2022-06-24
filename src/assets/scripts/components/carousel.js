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
	},
	breakpoints: {
    1200: {
      perView: 3
    },
    940: {
      perView: 2
    },
    680: {
      perView: 1
    }
  }
});

export { carousel };
