<div class="space"></div>
<div class="swiper">
	<div class="swiper-wrapper">
		<div class="swiper-slide red">
			<h1>A</h1>
			<h2>Is for Apple</h2>
		</div>
		<div class="swiper-slide gray">
			<h1>B</h1>
			<h2>Is for Banana</h2>
		</div>
		<div class="swiper-slide blue">
			<h1>C</h1>
			<h2>Is for Car</h2>
		</div>
		<div class="swiper-slide purple">
			<h1>D</h1>
			<h2>Is for Desk</h2>
		</div>
		<div class="swiper-slide orange">
			<h1>E</h1>
			<h2>Is for Eggs</h2>
		</div>
		<div class="swiper-slide green">
			<h1>F</h1>
			<h2>Is for Fabulous</h2>
		</div>
	</div>
</div>
<div id="currentSlide" style="font-size:4vh; font-weight:bold; font-family:sans-serif; width:8em; padding:20px; background:#ccc; border-radius:2.5em; text-align:center; margin:20px auto auto auto">1</div>

<style> 
.slideWrapper {
	height:50vh;
	width:90%;
	background:yellow;
}


.swiper {
	height:50vh;
	width:90%;
	
	margin:auto;
}

.swiper-slide {
	text-align: center;
	font-size: 18px;
	background: #fff;

	/* Center slide text vertically */
	
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction:column;
}

.swiper-slide img {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
}
.gray {
	background-color: #777;
	background-image: radial-gradient(
			circle at 47% 14%,
			rgba(205, 205, 205, 0.04) 0%,
			rgba(205, 205, 205, 0.04) 43%,
			transparent 43%,
			transparent 100%
		),
		radial-gradient(
			circle at 35% 12%,
			rgba(215, 215, 215, 0.04) 0%,
			rgba(215, 215, 215, 0.04) 4%,
			transparent 4%,
			transparent 100%
		),
		radial-gradient(
			circle at 1% 35%,
			rgba(24, 24, 24, 0.04) 0%,
			rgba(24, 24, 24, 0.04) 37%,
			transparent 37%,
			transparent 100%
		),
		radial-gradient(
			circle at 21% 1%,
			rgba(0, 0, 0, 0.04) 0%,
			rgba(0, 0, 0, 0.04) 26%,
			transparent 26%,
			transparent 100%
		),
		radial-gradient(
			circle at 23% 82%,
			rgba(249, 249, 249, 0.04) 0%,
			rgba(249, 249, 249, 0.04) 60%,
			transparent 60%,
			transparent 100%
		),
		radial-gradient(
			circle at 11% 54%,
			rgba(251, 251, 251, 0.04) 0%,
			rgba(251, 251, 251, 0.04) 23%,
			transparent 23%,
			transparent 100%
		),
		radial-gradient(
			circle at 69% 68%,
			rgba(234, 234, 234, 0.04) 0%,
			rgba(234, 234, 234, 0.04) 10%,
			transparent 10%,
			transparent 100%
		),
		linear-gradient(90deg, #777, #606060);
}
.blue {
	background-color: #2c7ad2;
	background-image: radial-gradient(
			circle at 47% 14%,
			rgba(205, 205, 205, 0.04) 0%,
			rgba(205, 205, 205, 0.04) 43%,
			transparent 43%,
			transparent 100%
		),
		radial-gradient(
			circle at 35% 12%,
			rgba(215, 215, 215, 0.04) 0%,
			rgba(215, 215, 215, 0.04) 4%,
			transparent 4%,
			transparent 100%
		),
		radial-gradient(
			circle at 1% 35%,
			rgba(24, 24, 24, 0.04) 0%,
			rgba(24, 24, 24, 0.04) 37%,
			transparent 37%,
			transparent 100%
		),
		radial-gradient(
			circle at 21% 1%,
			rgba(0, 0, 0, 0.04) 0%,
			rgba(0, 0, 0, 0.04) 26%,
			transparent 26%,
			transparent 100%
		),
		radial-gradient(
			circle at 23% 82%,
			rgba(249, 249, 249, 0.04) 0%,
			rgba(249, 249, 249, 0.04) 60%,
			transparent 60%,
			transparent 100%
		),
		radial-gradient(
			circle at 11% 54%,
			rgba(251, 251, 251, 0.04) 0%,
			rgba(251, 251, 251, 0.04) 23%,
			transparent 23%,
			transparent 100%
		),
		radial-gradient(
			circle at 69% 68%,
			rgba(234, 234, 234, 0.04) 0%,
			rgba(234, 234, 234, 0.04) 10%,
			transparent 10%,
			transparent 100%
		),
		linear-gradient(90deg, #2c7ad2, #1568c6);
}
.orange {
	background-color: #e77614;
	background-image: radial-gradient(
			circle at 46% 40%,
			rgba(228, 228, 228, 0.06) 0%,
			rgba(228, 228, 228, 0.06) 13%,
			transparent 13%,
			transparent 100%
		),
		radial-gradient(
			circle at 11% 41%,
			rgba(198, 198, 198, 0.06) 0%,
			rgba(198, 198, 198, 0.06) 19%,
			transparent 19%,
			transparent 100%
		),
		radial-gradient(
			circle at 52% 23%,
			rgba(14, 14, 14, 0.06) 0%,
			rgba(14, 14, 14, 0.06) 69%,
			transparent 69%,
			transparent 100%
		),
		radial-gradient(
			circle at 13% 85%,
			rgba(148, 148, 148, 0.06) 0%,
			rgba(148, 148, 148, 0.06) 44%,
			transparent 44%,
			transparent 100%
		),
		radial-gradient(
			circle at 57% 74%,
			rgba(232, 232, 232, 0.06) 0%,
			rgba(232, 232, 232, 0.06) 21%,
			transparent 21%,
			transparent 100%
		),
		radial-gradient(
			circle at 59% 54%,
			rgba(39, 39, 39, 0.06) 0%,
			rgba(39, 39, 39, 0.06) 49%,
			transparent 49%,
			transparent 100%
		),
		radial-gradient(
			circle at 98% 38%,
			rgba(157, 157, 157, 0.06) 0%,
			rgba(157, 157, 157, 0.06) 24%,
			transparent 24%,
			transparent 100%
		),
		radial-gradient(
			circle at 8% 6%,
			rgba(60, 60, 60, 0.06) 0%,
			rgba(60, 60, 60, 0.06) 12%,
			transparent 12%,
			transparent 100%
		),
		linear-gradient(90deg, #ff7600, #ff7600);
}

.red {
	background-color: #c82736;
	background-image: radial-gradient(
			circle at 19% 90%,
			rgba(190, 190, 190, 0.04) 0%,
			rgba(190, 190, 190, 0.04) 17%,
			transparent 17%,
			transparent 100%
		),
		radial-gradient(
			circle at 73% 2%,
			rgba(78, 78, 78, 0.04) 0%,
			rgba(78, 78, 78, 0.04) 94%,
			transparent 94%,
			transparent 100%
		),
		radial-gradient(
			circle at 45% 2%,
			rgba(18, 18, 18, 0.04) 0%,
			rgba(18, 18, 18, 0.04) 55%,
			transparent 55%,
			transparent 100%
		),
		radial-gradient(
			circle at 76% 60%,
			rgba(110, 110, 110, 0.04) 0%,
			rgba(110, 110, 110, 0.04) 34%,
			transparent 34%,
			transparent 100%
		),
		radial-gradient(
			circle at 68% 56%,
			rgba(246, 246, 246, 0.04) 0%,
			rgba(246, 246, 246, 0.04) 16%,
			transparent 16%,
			transparent 100%
		),
		radial-gradient(
			circle at 71% 42%,
			rgba(156, 156, 156, 0.04) 0%,
			rgba(156, 156, 156, 0.04) 47%,
			transparent 47%,
			transparent 100%
		),
		radial-gradient(
			circle at 46% 82%,
			rgba(247, 247, 247, 0.04) 0%,
			rgba(247, 247, 247, 0.04) 39%,
			transparent 39%,
			transparent 100%
		),
		radial-gradient(
			circle at 50% 47%,
			rgba(209, 209, 209, 0.04) 0%,
			rgba(209, 209, 209, 0.04) 45%,
			transparent 45%,
			transparent 100%
		),
		linear-gradient(90deg, #e53949, #cc2232);
}

.purple {
	background-color: #8d3dae;
	background-image: radial-gradient(
			circle at 47% 14%,
			rgba(205, 205, 205, 0.04) 0%,
			rgba(205, 205, 205, 0.04) 43%,
			transparent 43%,
			transparent 100%
		),
		radial-gradient(
			circle at 35% 12%,
			rgba(215, 215, 215, 0.04) 0%,
			rgba(215, 215, 215, 0.04) 4%,
			transparent 4%,
			transparent 100%
		),
		radial-gradient(
			circle at 1% 35%,
			rgba(24, 24, 24, 0.04) 0%,
			rgba(24, 24, 24, 0.04) 37%,
			transparent 37%,
			transparent 100%
		),
		radial-gradient(
			circle at 21% 1%,
			rgba(0, 0, 0, 0.04) 0%,
			rgba(0, 0, 0, 0.04) 26%,
			transparent 26%,
			transparent 100%
		),
		radial-gradient(
			circle at 23% 82%,
			rgba(249, 249, 249, 0.04) 0%,
			rgba(249, 249, 249, 0.04) 60%,
			transparent 60%,
			transparent 100%
		),
		radial-gradient(
			circle at 11% 54%,
			rgba(251, 251, 251, 0.04) 0%,
			rgba(251, 251, 251, 0.04) 23%,
			transparent 23%,
			transparent 100%
		),
		radial-gradient(
			circle at 69% 68%,
			rgba(234, 234, 234, 0.04) 0%,
			rgba(234, 234, 234, 0.04) 10%,
			transparent 10%,
			transparent 100%
		),
		linear-gradient(90deg, #8d3dae, #8d3dae);
}
.green {
	background-color: #28a92b;
	background-image: radial-gradient(
			circle at 46% 40%,
			rgba(228, 228, 228, 0.06) 0%,
			rgba(228, 228, 228, 0.06) 13%,
			transparent 13%,
			transparent 100%
		),
		radial-gradient(
			circle at 11% 41%,
			rgba(198, 198, 198, 0.06) 0%,
			rgba(198, 198, 198, 0.06) 19%,
			transparent 19%,
			transparent 100%
		),
		radial-gradient(
			circle at 52% 23%,
			rgba(14, 14, 14, 0.06) 0%,
			rgba(14, 14, 14, 0.06) 69%,
			transparent 69%,
			transparent 100%
		),
		radial-gradient(
			circle at 13% 85%,
			rgba(148, 148, 148, 0.06) 0%,
			rgba(148, 148, 148, 0.06) 44%,
			transparent 44%,
			transparent 100%
		),
		radial-gradient(
			circle at 57% 74%,
			rgba(232, 232, 232, 0.06) 0%,
			rgba(232, 232, 232, 0.06) 21%,
			transparent 21%,
			transparent 100%
		),
		radial-gradient(
			circle at 59% 54%,
			rgba(39, 39, 39, 0.06) 0%,
			rgba(39, 39, 39, 0.06) 49%,
			transparent 49%,
			transparent 100%
		),
		radial-gradient(
			circle at 98% 38%,
			rgba(157, 157, 157, 0.06) 0%,
			rgba(157, 157, 157, 0.06) 24%,
			transparent 24%,
			transparent 100%
		),
		radial-gradient(
			circle at 8% 6%,
			rgba(60, 60, 60, 0.06) 0%,
			rgba(60, 60, 60, 0.06) 12%,
			transparent 12%,
			transparent 100%
		),
		linear-gradient(90deg, #28a92b, #10a614);
}

</style>

<script>const swiper = new Swiper('.swiper', {})

swiper.on('slideChange', function () {
  currentSlide.textContent = swiper.activeIndex + 1
  gsap.to(swiper.slides[swiper.activeIndex], {scale:1, opacity:1})
  gsap.to(swiper.slides[swiper.previousIndex], {opacity:0.3, scale:0.8})
  swiper.slides[swiper.previousIndex].animation.pause(0)
  swiper.slides[swiper.activeIndex].animation.restart()
});

swiper.slides.forEach((slide, index)=>{
	let letter = slide.querySelector("h1")
	let description = slide.querySelector("h2")
	let chars = SplitText.create(description, {type:"chars"})
	let tl = gsap.timeline({paused:true})
	tl.from(letter, {scale:0, opacity:0, ease:"back", duration:1})
	  .from(chars.chars, {opacity:0, yPercent:50, stagger:0.02}, "-=0.5")
	slide.animation = tl
})

swiper.slides[0].animation.play()


</script>