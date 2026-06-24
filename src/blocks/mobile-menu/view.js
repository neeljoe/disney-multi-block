import { store, getContext, getElement } from '@wordpress/interactivity';

const { state } = store( 'disney', {
	state: {
		mobileMenuOpen: false,
		aboutOpen: false,
		experiencesOpen: false,
		impactOpen: false,
		sitesOpen: false,
	},
	actions: {
		toggleMobileMenu() {
			state.mobileMenuOpen = ! state.mobileMenuOpen;
		},
		closeMobileMenu() {
			state.mobileMenuOpen = false;
		},
		toggleSection() {
			const context = getContext();
			const { ref } = getElement();

			const key = context.sectionId + 'Open';
			const wasAlreadyOpen = state[ key ];

			state.aboutOpen = false;
			state.experiencesOpen = false;
			state.impactOpen = false;
			state.sitesOpen = false;

			if ( ! wasAlreadyOpen ) {
				state[ key ] = true;
				requestAnimationFrame( () => {
					ref.closest( '.mobile-nav-section' )
						?.scrollIntoView( { behavior: 'smooth', block: 'nearest' } );
				} );
			}
		},
	},
} );
