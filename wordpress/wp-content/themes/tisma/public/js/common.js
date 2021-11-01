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
	// JSCCommon.inputMask();
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
	$('.make-yandex-lazy-js').each(function (){
		let self = this;

		window.setTimeout(function (){
			$(self.parentElement).html($(self).data("src"));
			self.remove();
		}, 3500)
	});
	//.typed-js
	$('.typed-js').each(function (){
		let thisStings = [];
		let dataExist = true;
		let i = 1;
		while(dataExist){
			let txt = this.getAttribute(`data-txt${i}`);
			if (txt){
				thisStings.push(txt);
			}
			else{
				dataExist = false;
			}

			i++;
		}

		let typed = new Typed(this, {
			strings: thisStings,
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

	//end luckyOne Js

};
if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}