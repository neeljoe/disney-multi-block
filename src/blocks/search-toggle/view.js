import { store } from '@wordpress/interactivity';

const { state } = store( 'disney', {
	state: {
		isSearchOpen: false,
	},
	actions: {
		toggleSearch() {
			state.isSearchOpen = ! state.isSearchOpen;
		},
		closeSearch() {
			state.isSearchOpen = false;
		},
	},
} );
