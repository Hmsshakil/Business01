<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $item
 * @var array $choices
 * @var array $value
 */

$options = $item['options'];

// set required attribute as class for parse errors only on 1 click on form send
if( isset($attr['required']) ) {
	isset($attr['class']) ? $attr['class'] .= 'form-control form-control-plain '.$attr['required'] : $attr['class'] = 'form-control form-control-plain '.$attr['required'];
	unset($attr['required']);
}
?>
<?php if ( empty( $choices ) ): ?>
	<!-- radio not displayed: no choices -->
<?php else: ?>
	<div class="<?php echo esc_attr( fw_ext_builder_get_item_width( 'form-builder', $item['width'] . '/frontend_class' ) ) ?>">
		<div class="field-radio input-styled <?php echo 'fw-item-' . $options['layout']; ?>">
			<?php if ( fw_htmlspecialchars( $item['options']['label'] ) != '' ) : ?>
				<div class="form-group">
					<label><?php echo fw_htmlspecialchars( $item['options']['label'] ) ?>
						<?php if ( $options['required'] ): ?><sup>*</sup><?php endif; ?>
					</label>
				</div>
			<?php endif; ?>
			<div class="custom-radio">
				<?php foreach ( $choices as $choice ): ?>
					<?php $choice['id'] = 'rand-' . fw_unique_increment(); ?>
					<div class="options">
						<input <?php echo fw_attr_to_html( $choice ) ?> />
						<label for="<?php echo esc_attr( $choice['id'] ) ?>"><?php echo $choice['value'] ?></label>
					</div>
				<?php endforeach; ?>
			</div>
			<?php if ( $options['info'] ): ?>
				<p><em><?php echo $options['info'] ?></em></p>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>