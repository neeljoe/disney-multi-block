import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

import './editor.scss';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<a className="wp-block-button__link wp-element-button"
				   style={ { backgroundColor: 'var(--wp--preset--color--lime-green)' } } href="#">
				{ __( 'Official Website', 'runpartner' ) }
			</a>
			<a className="wp-block-button__link wp-element-button" href="#">
				{ __( 'Register Now', 'runpartner' ) }
			</a>
		</div>
	);
}
