const state = {
	animations: ['fade', 'slide', 'slideUp', 'zoom', 'flipX', 'flipY'],
	view: 'slide'
}

// Controls
const controls = Vue.component('controls', {
  template: '#controls',
	data: state,
	methods: {
		setView(animation) {
			state.view = animation
		}
	}
})

// Transitions
const fade = Vue.component('fade', {
  template: '#page',
	methods: {
		enter(el, done) {
			TweenMax.fromTo(el, 1, {
				autoAlpha: 0,
				scale: 1.5,
			}, {
				autoAlpha: 1,
				scale: 1,
				transformOrigin: '50% 50%',
				ease: Power4.easeOut,
				onComplete: done
			});
		},
		leave(el, done) {
			TweenMax.fromTo(el, 1, {
				autoAlpha: 1,
				scale: 1,
			}, {
				autoAlpha: 0,
				scale: 0.8,
				ease: Power4.easeOut,
				onComplete: done
			});
		}
	}
})
