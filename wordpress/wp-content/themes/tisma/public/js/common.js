"use strict";
const JSCCommon = {
	btnToggleMenuMobile: [].slice.call(document.querySelectorAll(".toggle-menu-mobile--js")),
	menuMobile: document.querySelector(".menu-mobile--js"),
	menuMobileLink: [].slice.call(document.querySelectorAll(".menu-mobile--js ul li a")),

	//pure js
	toggleMenu() {
		const toggle = this.btnToggleMenuMobile;
		const menu = this.menuMobile;
		document.addEventListener("click", function (event) {
			const toggleEv = event.target.closest(".toggle-menu-mobile--js");
			if (!toggleEv) return;
			toggle.forEach(el => el.classList.toggle("on"));
			menu.classList.toggle("active");
			[document.body, document.querySelector('html')].forEach(el => el.classList.toggle("fixed")); 
		}, { passive: true });
	},
	closeMenu() {
		let menu = this.menuMobile;
		if (!menu) return;
		if (menu.classList.contains("active")) {
			this.btnToggleMenuMobile.forEach(element => element.classList.remove("on"));
			this.menuMobile.classList.remove("active");
			[document.body, document.querySelector('html')].forEach(el => el.classList.remove("fixed")); 
		}

	},
	mobileMenu() {
		if (!this.menuMobileLink) return;
		this.toggleMenu();
		document.addEventListener('mouseup', (event) => {
			let container = event.target.closest(".menu-mobile--js.active"); // (1)
			let link = event.target.closest(".menu-mobile .menu a"); // (1)
			let toggle = event.target.closest('.toggle-menu-mobile--js.on'); // (1)
			if (!container && !toggle) this.closeMenu();
		}, { passive: true });

		window.addEventListener('resize', () => {
			if (window.matchMedia("(min-width: 992px)").matches) this.closeMenu();
		}, { passive: true });
	},
	//-
	modalCall() {
		const link = ".link-modal-js";

		Fancybox.bind(link, {
			arrows: false,
			infobar: false,
			touch: false,
			infinite: false,
			dragToClose: false,
			type: 'inline',
			autoFocus: false,
			l10n: {
				Escape: "Закрыть",
				NEXT: "Вперед",
				PREV: "Назад",
			},
		});
		document.querySelectorAll(".modal-close-js").forEach(el=>{
			el.addEventListener("click", ()=>{
				Fancybox.close();
			})
		})
		// fancybox.defaults.backFocus = false;
		const linkModal = document.querySelectorAll(link);
		function addData() {
			linkModal.forEach(element => {
				element.addEventListener('click', () => {
					let modal = document.querySelector(element.getAttribute("href"));
					const data = element.dataset;
					console.log(data);

					function setValue(val, elem) {
						if (elem && val) {
							let el = modal.querySelector(elem);
							if (!el){
								return
							}

							el.tagName == "INPUT"
								? el.value = val
								: el.innerHTML = val;
						}
					}
					setValue(data.title, '.title-js');
					setValue(data.price, '.price-js');

					setValue(data.btn, '.btn');
					setValue(data.order, '.order');
				})
			})
		}
		if (linkModal) addData();
	},
	//pure js
	tabscostume() {
		//ultimate tabs
		let cTabs = document.querySelectorAll('.tabs');
		for (let tab of cTabs){
			let Btns = tab.querySelectorAll('.tabs__btn')
			let contentGroups = tab.querySelectorAll('.tabs__wrap');

			for (let btn of Btns){
				btn.addEventListener('click', function (){

					for (let btn of Btns){
						btn.classList.remove('active');
					}
					this.classList.add('active');

					let index = [...Btns].indexOf(this);
					//-console.log(index);

					for (let cGroup of contentGroups){
						let contentItems = cGroup.querySelectorAll('.tabs__content');

						for (let item of contentItems){
							item.classList.remove('active');
						}
						contentItems[index].classList.add('active');
					}
				})
			}
		}
	},
	//pure js
	inputMask() {
		// mask for input
		let InputTel = [].slice.call(document.querySelectorAll('input[type="tel"]'));
		InputTel.forEach(element => element.setAttribute("pattern", "[+][0-9]{1}[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}"));
		Inputmask("+9(999)999-99-99").mask(InputTel);
	},
	//pure js
	ifie() {
		var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
		if (isIE11) {
			document.body.insertAdjacentHTML("beforeend", '<div class="browsehappy">	<p class=" container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p></div>');
		}
	},
	//pure js
	heightwindow() {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
		window.addEventListener('resize', () => {
			let vh = window.innerHeight * 0.01;
			document.documentElement.style.setProperty('--vh', `${vh}px`);
		}, { passive: true });
	},
	//pure js
	animateScroll(topShift=80) {
		document.addEventListener('click', function (){
			if (event.target.closest('.swiper li a, .scroll-link')) {
				let self = event.target.closest('.menu li a, .scroll-link');
				event.preventDefault();

				let targetSelector = self.getAttribute('href');
				let target = document.querySelector(targetSelector);

				if (!target) {
					self.setAttribute("href", '/' + targetSelector);
				}

				event.preventDefault();
				let targetTop = target.offsetTop;
				window.scrollTo({
					top: targetTop - topShift,
					behavior: "smooth",
				});
			}
		});
	},
};
const $ = jQuery;
let headerH;
function eventHandler() {
	// JSCCommon.ifie();
	JSCCommon.modalCall();
	// JSCCommon.tabscostume('tabs');
	JSCCommon.mobileMenu();
	JSCCommon.inputMask();
	JSCCommon.heightwindow();
	JSCCommon.animateScroll();
	
	// JSCCommon.CustomInputFile(); 
	var x = window.location.host;
	let screenName;
	screenName = document.body.dataset.bg;
	if (screenName && x.includes("localhost:30")) {
		document.body.insertAdjacentHTML("beforeend", `<div class="pixel-perfect" style="background-image: url(screen/${screenName});"></div>`);
	}

	//luckyOne Js
	let header = document.querySelector(".header--js");
	let fixedHeader = document.querySelector(".fixed-line--js");
	function calcHeaderHeight() {
		if (!header) return;
		document.documentElement.style.setProperty('--header-h', `${header.offsetHeight}px`);
		headerH = header.offsetHeight;

		window.scrollY > 0
			? header.classList.add('fixed')
			: header.classList.remove('fixed');

		window.scrollY > header.offsetHeight
			? fixedHeader.classList.add('active')
			: fixedHeader.classList.remove('active');
	}
	window.addEventListener('resize', calcHeaderHeight, { passive: true });
	window.addEventListener('scroll', calcHeaderHeight, { passive: true });
	calcHeaderHeight();


	let defaultSl = {
		spaceBetween: 0,
		lazy: {
			loadPrevNext: true,
		},
		watchOverflow: true,
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: ' .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	}
	let freeMomentum = {
		slidesPerView: 'auto',
		freeMode: true,
		loopFillGroupWithBlank: true,
		touchRatio: 0.2,
		slideToClickedSlide: true,
		freeModeMomentum: true,
	};

	let defSwiper = new Swiper('selector', {
		...defaultSl,
		...freeMomentum,
	});

	//jq
	function makeDDGroup(){
		let parents = document.querySelectorAll('.dd-group-js');
		for (let parent of parents){
			if (parent){
				// childHeads, kind of funny))
				let ChildHeads = parent.querySelectorAll('.dd-head-js:not(.disabled)');
				$(ChildHeads).click(function (){
					let clickedHead = this;

					$(ChildHeads).each(function (){
						if (this === clickedHead){
							//parent element gain toggle class, style head change via parent
							$(this.parentElement).toggleClass('active');
							$(this.parentElement).find('.dd-content-js').slideToggle(function (){
								$(this).toggleClass('active');
							});
						}
						else{
							$(this.parentElement).removeClass('active');
							$(this.parentElement).find('.dd-content-js').slideUp(function (){
								$(this).removeClass('active');
							});
						}
					});

				});
			}
		}
	}
	makeDDGroup();
	//
	let sliders = document.querySelectorAll('.menu-slide-js');
	console.log(sliders);
	for (let slider of sliders){
		let menuSlider = new Swiper(slider, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			spaceBetween: 10,
		});
	}

	let sMadeSlider = new Swiper('.sMade-slider-js', {
		breakpoints: {
			0: {
				spaceBetween: 30,
			},
			1200: {
				spaceBetween: 90,
			},
		},

		lazy: {
			loadPrevNext: true,
		},
		loop: true,

		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: ' .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	});
	//-
	let sSpecSlider = new Swiper('.sSpec-slider-js', {
		slidesPerView: 'auto',
		spaceBetween: 30,
		lazy: {
			loadPrevNext: true,
		},
		loop: true,

		pagination: {
			el: ' .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	});

	//-
	let sOpenSlider = new Swiper('.sOpen-slider-js', {
		watchOverflow: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		lazy: {
			loadPrevNext: true,
			loadPrevNextAmount: 10,
		},
		loop: true,

		//-
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.sOpen--js .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	});
	let sFeedbackSlider = new Swiper('.sFeedback-slider-js', {
		watchOverflow: true,
		slidesPerView: 'auto',
		spaceBetween: 30,
		lazy: {
			loadPrevNext: true,
			loadPrevNextAmount: 10,
		},
		loop: true,

		//-
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.sFeedback--js .swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
	});
	//
	$('.sContact__map').each(function (){
		let self = this;

		window.setTimeout(function (){
			$(self).html($(self).data("src"));
			// self.remove();
		}, 3500)
	});
	//.typed-js
	$('.typed-js').each(function (){

		let thisStings = $(this).data("text");
		var arrayOfStrings = thisStings.split(', ');
		let typed = new Typed(this, {
			strings: arrayOfStrings,
			typeSpeed: 50,
			loop: true,
		});
	});
	$('.sCategory-btn-js').click(function (){
		$('.sCategory-row-js, .sCategory-btn-js').toggleClass('active');
	});
	$('.sForm--js').each(function (){
		let parent = this;
		let input = parent.querySelector('.sForm-search-js');
		let btn = parent.querySelector('.sForm-btn-js');
		let resultItemsCont = parent.querySelector('.ppr-items-js');
		let itemsFound = parent.querySelector('.sForm-items-found');

		let priceFrom = resultItemsCont.getAttribute('data-price-from');
		let btnMute = false;

		$(btn).click(function (){
			if(btnMute){
				return
			}
			let val = input.value;

			if (val.length > 3){
				btnMute = true;
				itemsFound.innerHTML = '1';

				$(resultItemsCont).slideUp(function (){
					$(this).toggleClass('active');
					$(".btn-wrap-more, .sForm-items-found").removeClass('d-none')
					let foundItem = `
					<div class="sForm__item">
						<div class="sForm__i-row row align-items-center">
							<div class="sForm__i-title col-md">
								${val}
							</div>
							<div class="sForm__i-price col-md-auto">
								${priceFrom}
							</div>
							<div class="col-md-auto">
								<a class="sForm__i-btn link-modal-js" href="#modal-price" data-title="${val}" data-price="${priceFrom}">
									Заказать ППр
								</a>
							</div>
						</div>
					</div>
					`;
					this.innerHTML = foundItem;
					$(this).slideDown(function (){
						$(this).addClass('active');
						btnMute = false;
					})
				})
			}
			//-
		});

		//let resultItems = document.querySelectorAll('.result-item-js');
	});
	//
	//

	document.addEventListener( 'wpcf7mailsent', function( event ) {
		ym(50042227,'reachGoal','zakaz')
		Fancybox.close();
		const fancybox2 = Fancybox.show([
			{
				src: "#modal-thanks",
				type: "inline",
			},
		]);
	}, false );



	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			const fancybox2 = Fancybox.show([
				{
					src: "#modal-price2",
					type: "inline",
				},
			]);
		}
	});
	const wow = new WOW({
		mobile: false,
		animateClass: 'animate__animated',
		offset: 150
	});
	wow.init();
};
if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}




setTimeout(()=>{

	window.bioEp = {
		// Private variables
		bgEl: {},
		popupEl: {},
		closeBtnEl: {},
		shown: false,
		overflowDefault: "visible",
		transformDefault: "",
		// Popup options
		width: 400,
		height: 220,
		html: "",
		css: "",
		fonts: [],
		delay: 0,
		showOnDelay: false,
		cookieExp: 0,
		showOncePerSession: false,
		onPopup: null,
		// Object for handling cookies, taken from QuirksMode
		// http://www.quirksmode.org/js/cookies.html
		cookieManager: {
			// Create a cookie
			create: function create(name, value, days, sessionOnly) {
				var expires = "";
				if (sessionOnly) expires = "; expires=0";else if (days) {
					var date = new Date();
					date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
					expires = "; expires=" + date.toGMTString();
				}
				document.cookie = name + "=" + value + expires + "; path=/";
			},
			// Get the value of a cookie
			get: function get(name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(";");

				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];

					while (c.charAt(0) == " ") {
						c = c.substring(1, c.length);
					}

					if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
				}

				return null;
			},
			// Delete a cookie
			erase: function erase(name) {
				this.create(name, "", -1);
			}
		},
		// Handle the bioep_shown cookie
		// If present and true, return true
		// If not present or false, create and return false
		checkCookie: function checkCookie() {
			// Handle cookie reset
			if (this.cookieExp <= 0) {
				// Handle showing pop up once per browser session.
				if (this.showOncePerSession && this.cookieManager.get("bioep_shown_session") == "true") return true;
				this.cookieManager.erase("bioep_shown");
				return false;
			} // If cookie is set to true


			if (this.cookieManager.get("bioep_shown") == "true") return true;
			return false;
		},
		// Add font stylesheets and CSS for the popup
		addCSS: function addCSS() {},
		// Add the popup to the page
		addPopup: function addPopup() {
			// Add the background div
			this.bgEl = document.createElement("div");
			this.bgEl.id = "bio_ep_bg";
			document.body.appendChild(this.bgEl); // Add the popup

			if (document.getElementById("bio_ep")) this.popupEl = document.getElementById("bio_ep");else {
				this.popupEl = document.createElement("div");
				this.popupEl.id = "bio_ep";
				this.popupEl.innerHTML = this.html;
				document.body.appendChild(this.popupEl);
			} // Add the close button

			if (document.getElementById("bio_ep_close")) this.closeBtnEl = document.getElementById("bio_ep_close");else {
				// this.closeBtnEl = document.createElement("div");
				// this.closeBtnEl.id = "bio_ep_close";
				// this.closeBtnEl.appendChild(document.createTextNode("X"));
				// this.popupEl.insertBefore(this.closeBtnEl, this.popupEl.firstChild);
			}
		},
		// Show the popup
		showPopup: function showPopup() {
			if (this.shown) return;
			// $.fancybox.close();
			const fancybox2 = Fancybox.show([
				{
					src: "#modal-price2",
					type: "inline",
				},
			]); // this.bgEl.style.display = "block";
			// this.popupEl.style.display = "block";
			// // Handle scaling
			// this.scalePopup();
			// // Save body overflow value and hide scrollbars
			// this.overflowDefault = document.body.style.overflow;
			// document.body.style.overflow = "hidden";

			this.shown = true;
			this.cookieManager.create("bioep_shown", "true", this.cookieExp, false);
			this.cookieManager.create("bioep_shown_session", "true", 0, true);

			if (typeof this.onPopup === "function") {
				this.onPopup();
			}
		},
		// Hide the popup
		hidePopup: function hidePopup() {},
		// Handle scaling the popup
		scalePopup: function scalePopup() {},
		// Event listener initialisation for all browsers
		addEvent: function addEvent(obj, event, callback) {
			if (obj.addEventListener) obj.addEventListener(event, callback, false);else if (obj.attachEvent) obj.attachEvent("on" + event, callback);
		},
		// Load event listeners for the popup
		loadEvents: function loadEvents() {
			this.addEvent(document, "mouseout", function (e) {
				e = e ? e : window.event; // If this is an autocomplete element.

				if (e.target.tagName.toLowerCase() == "input") return; // Get the current viewport width.

				var vpWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0); // If the current mouse X position is within 50px of the right edge
				// of the viewport, return.

				if (e.clientX >= vpWidth - 50) return; // If the current mouse Y position is not within 50px of the top
				// edge of the viewport, return.

				if (e.clientY >= 50) return; // Reliable, works on mouse exiting window and
				// user switching active program

				var from = e.relatedTarget || e.toElement;
				if (!from) bioEp.showPopup();
			}.bind(this)); // Handle the popup close button

			this.addEvent(this.closeBtnEl, "click", function () {
				bioEp.hidePopup();
			}); // Handle window resizing

			this.addEvent(window, "resize", function () {
				bioEp.scalePopup();
			});
		},
		// Set user defined options for the popup
		setOptions: function setOptions(opts) {
			this.width = typeof opts.width === 'undefined' ? this.width : opts.width;
			this.height = typeof opts.height === 'undefined' ? this.height : opts.height;
			this.html = typeof opts.html === 'undefined' ? this.html : opts.html;
			this.css = typeof opts.css === 'undefined' ? this.css : opts.css;
			this.fonts = typeof opts.fonts === 'undefined' ? this.fonts : opts.fonts;
			this.delay = typeof opts.delay === 'undefined' ? this.delay : opts.delay;
			this.showOnDelay = typeof opts.showOnDelay === 'undefined' ? this.showOnDelay : opts.showOnDelay;
			this.cookieExp = typeof opts.cookieExp === 'undefined' ? this.cookieExp : opts.cookieExp;
			this.showOncePerSession = typeof opts.showOncePerSession === 'undefined' ? this.showOncePerSession : opts.showOncePerSession;
			this.onPopup = typeof opts.onPopup === 'undefined' ? this.onPopup : opts.onPopup;
		},
		// Ensure the DOM has loaded
		domReady: function domReady(callback) {
			document.readyState === "interactive" || document.readyState === "complete" ? callback() : this.addEvent(document, "DOMContentLoaded", callback);
		},
		// Initialize
		init: function init(opts) {
			// Handle options
			if (typeof opts !== 'undefined') this.setOptions(opts);
			this.addCSS();
			this.domReady(function () {
				// Handle the cookie
				// if(bioEp.checkCookie()) return;
				// Add the popup
				bioEp.addPopup(); // Load events

				setTimeout(function () {
					bioEp.loadEvents();
					if (bioEp.showOnDelay) bioEp.showPopup();
				}, bioEp.delay * 1000);
			});
		}
	};
	bioEp.init({});
}, 10000)