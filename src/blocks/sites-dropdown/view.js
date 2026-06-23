import { store, getContext } from '@wordpress/interactivity';

store( 'disney-sites', {
	actions: {
		toggleMenu() {
			const context = getContext();
			context.isMenuOpen = ! context.isMenuOpen;
		},
		closeMenu() {
			const context = getContext();
			context.isMenuOpen = false;
		},
	},
} );
