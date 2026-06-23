import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl, ComboboxControl } from '@wordpress/components';
import { useEntityRecords } from '@wordpress/core-data';
import { __ } from '@wordpress/i18n';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	const { label, menuSlug } = attributes;

	const { hasResolved, records } = useEntityRecords(
		'postType',
		'wp_template_part',
		{ per_page: -1 }
	);

	let menuOptions = [];
	if ( hasResolved ) {
		menuOptions = records
			.filter( ( item ) => item.area === 'menu' )
			.map( ( item ) => ( {
				label: item.title.rendered,
				value: item.slug,
			} ) );
	}

	menuOptions.unshift( {
		label: __( 'Select a menu…', 'advanced-multi-block' ),
		value: '',
	} );

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Settings', 'advanced-multi-block' ) }>
					<TextControl
						label={ __( 'Label', 'advanced-multi-block' ) }
						value={ label }
						onChange={ ( value ) => setAttributes( { label: value } ) }
					/>
					<ComboboxControl
						label={ __( 'Menu', 'advanced-multi-block' ) }
						value={ menuSlug }
						options={ menuOptions }
						onChange={ ( value ) => setAttributes( { menuSlug: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...blockProps }>
				<button
					className="wp-block-disney-sites-dropdown__toggle"
					style={ {
						background: 'none',
						border: 'none',
						cursor: 'pointer',
						padding: '6px 4px',
						fontSize: 'inherit',
						fontWeight: 600,
					} }
				>
					<RichText
						tagName="span"
						value={ label }
						onChange={ ( value ) => setAttributes( { label: value } ) }
						placeholder={ __( 'Add label…', 'advanced-multi-block' ) }
					/>
					<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg" style={ { marginLeft: '4px' } }>
						<path d="M1 1L5 5L9 1" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
					</svg>
				</button>
			</div>
		</>
	);
}
