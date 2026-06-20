import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps } style={ { background: '#f5f5f5', padding: '16px 24px' } }>
			<div style={ { display: 'flex', alignItems: 'center', gap: '12px', maxWidth: '1280px', margin: '0 auto' } }>
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="8.5" cy="8.5" r="5.5" stroke="currentColor" strokeWidth="1.5"/>
					<line x1="12.5" y1="12.5" x2="18" y2="18" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round"/>
				</svg>
				<div style={ { flex: 1, height: '20px', borderBottom: '1px solid #ccc', marginLeft: '12px' } }></div>
				<span style={ { fontSize: '14px', color: '#666' } }>Search</span>
			</div>
		</div>
	);
}
