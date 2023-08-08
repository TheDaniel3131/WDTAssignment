const scroll_btn = document.querySelector(".scroll_up");

const ButtonVisibility = () => {
	if (document.documentElement.scrollTop <= 150) {
		scroll_btn.style.display = "none";
	}
	else {
		scroll_btn.style.display = "block";
	}
};
ButtonVisibility();

scroll_btn.addEventListener("click", () => {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
});

document.addEventListener("scroll", (e) => {
	ButtonVisibility();
});

// const scroll_up = document.querySelector("#btnScrollUp");

// btnScrollUp.addEventListener("click", function () {
// 	window.scrollTo({
// 		top: 0,
// 		left: 0,
// 		behavior: "smooth"
// 	});
// });