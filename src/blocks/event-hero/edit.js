import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

import './editor.scss';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<h1 className="event-hero-title">{ __( 'Event Title', 'runpartner' ) }</h1>
			<p className="event-hero-subtitle">{ __( 'Event subtitle appears here.', 'runpartner' ) }</p>
			<div className="event-hero-meta">
				<span className="event-hero-meta-text">{ __( 'Location · Month 1–5, 2026', 'runpartner' ) }</span>
			</div>
			<div className="event-hero-actions">
				<a className="wp-block-button__link wp-element-button"
				   style={ { backgroundColor: 'var(--wp--preset--color--lime-green)' } }
				   href="#">
					{ __( 'View Event', 'runpartner' ) }
				</a>
				<a className="wp-block-button__link wp-element-button" href="#">
					{ __( 'All Events', 'runpartner' ) }
				</a>
			</div>
		</div>
	);
}
