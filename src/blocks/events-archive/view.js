import { store, withSyncEvent, getElement } from '@wordpress/interactivity';
import { actions as routerActions } from '@wordpress/interactivity-router';

const autoplayIntervals = new Map();

function getCarouselContainer(el) {
	return el
		.closest('.event-archive-section')
		?.querySelector('.event-archive-carousel');
}

function getCardStep(container) {
	const card = container?.querySelector('.event-archive-card');
	return card ? card.offsetWidth + 16 : container?.offsetWidth ?? 0;
}

store('runpartner/events-archive', {
	actions: {
		navigate: withSyncEvent(function* (e) {
			e.preventDefault();
			const href = e.currentTarget.href;
			if (!href) return;

			const section = e.currentTarget.closest('.event-archive-section');
			const scrollTarget = section?.querySelector('.event-archive-section-title')?.id;
			const isSidebar = e.currentTarget.closest('.event-archive-sidebar');

			let observer;
			if (isSidebar) {
				const region = document.querySelector('[data-wp-router-region="events-archive-region"]');
				if (region) {
					observer = new MutationObserver(() => {
						const firstSection = region.querySelector('.event-archive-section-title');
						if (firstSection) {
							firstSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
							observer?.disconnect();
						}
					});
					observer.observe(region, { childList: true, subtree: true });
					setTimeout(() => observer?.disconnect(), 10000);
				}
			}

			yield routerActions.navigate(href);

			if (scrollTarget) {
				const el = document.getElementById(scrollTarget);
				el?.scrollIntoView({ behavior: 'smooth', block: 'start' });
				return;
			}

			if (isSidebar) {
				const firstSection = document.querySelector('.event-archive-section-title');
				if (firstSection) {
					firstSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
					observer?.disconnect();
				}
			}
		}),

		toggleRegion() {
			const button = getElement().ref;
			const currentlyExpanded = button.getAttribute('aria-expanded') === 'true';
			const list = button.closest('.event-archive-sidebar-list');

			list?.querySelectorAll('.event-archive-sidebar-toggle').forEach((otherBtn) => {
				if (otherBtn !== button && otherBtn.getAttribute('aria-expanded') !== 'false') {
					otherBtn.setAttribute('aria-expanded', 'false');
					otherBtn.classList.remove('active');
					const otherChildren = otherBtn.nextElementSibling;
					if (otherChildren?.classList.contains('event-archive-sidebar-children')) {
						otherChildren.classList.remove('expanded');
					}
				}
			});

			button.setAttribute('aria-expanded', !currentlyExpanded);
			button.classList.toggle('active', !currentlyExpanded);
			const childrenContainer = button.nextElementSibling;
			if (childrenContainer?.classList.contains('event-archive-sidebar-children')) {
				childrenContainer.classList.toggle('expanded');
			}
		},

		carouselNext() {
			const container = getCarouselContainer(getElement().ref);
			if (!container) return;
			const step = getCardStep(container);
			const maxScroll = container.scrollWidth - container.clientWidth;
			if (container.scrollLeft + step >= maxScroll) {
				container.scrollTo({ left: 0, behavior: 'smooth' });
			} else {
				container.scrollBy({ left: step, behavior: 'smooth' });
			}
		},

		carouselPrev() {
			const container = getCarouselContainer(getElement().ref);
			if (!container) return;
			const step = getCardStep(container);
			if (container.scrollLeft - step <= 0) {
				container.scrollTo({
					left: container.scrollWidth,
					behavior: 'smooth',
				});
			} else {
				container.scrollBy({ left: -step, behavior: 'smooth' });
			}
		},

		pauseCarousel() {
			const el = getElement().ref;
			const id = el.dataset.carouselId;
			if (id && autoplayIntervals.has(id)) {
				clearInterval(autoplayIntervals.get(id));
				autoplayIntervals.delete(id);
			}
		},

		resumeCarousel() {
			const el = getElement().ref;
			const id = el.dataset.carouselId;
			if (!id) return;
			if (autoplayIntervals.has(id)) {
				clearInterval(autoplayIntervals.get(id));
			}
			autoplayIntervals.set(
				id,
				setInterval(() => {
					const wrapper = document.querySelector(
						`[data-carousel-id="${id}"]`
					);
					if (!wrapper) return;
					const container = wrapper.querySelector(
						'.event-archive-carousel'
					);
					if (!container) return;
					const step = getCardStep(container);
					const maxScroll = container.scrollWidth - container.clientWidth;
					if (container.scrollLeft + step >= maxScroll) {
						container.scrollTo({ left: 0, behavior: 'smooth' });
					} else {
						container.scrollBy({ left: step, behavior: 'smooth' });
					}
				}, 5000)
			);
		},
	},

	callbacks: {
		initCarousel() {
			document.querySelectorAll('[data-carousel-id]').forEach((wrapper) => {
				const id = wrapper.dataset.carouselId;
				if (autoplayIntervals.has(id)) {
					clearInterval(autoplayIntervals.get(id));
				}
				autoplayIntervals.set(
					id,
					setInterval(() => {
						const container = wrapper.querySelector(
							'.event-archive-carousel'
						);
						if (!container) return;
						const step = getCardStep(container);
						const maxScroll =
							container.scrollWidth - container.clientWidth;
						if (container.scrollLeft + step >= maxScroll) {
							container.scrollTo({ left: 0, behavior: 'smooth' });
						} else {
							container.scrollBy({ left: step, behavior: 'smooth' });
						}
					}, 5000)
				);
			});
		},
	},
});
