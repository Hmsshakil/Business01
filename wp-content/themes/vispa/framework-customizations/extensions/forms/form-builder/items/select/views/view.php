<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $item
 * @var array $choices
 * @var array $attr
 * @var string $value
 */

$options = $item['options'];
?>
<?php if ( empty( $choices ) ): ?>
	<!-- select not displayed: no choices -->
<?php else: ?>
	<div class="<?php echo esc_attr( fw_ext_builder_get_item_width( 'form-builder', $item['width'] . '/frontend_class' ) ) ?>">
		<div class="field-select">
			<?php if ( fw_htmlspecialchars( $item['options']['label'] ) != '' ) : ?>
				<div class="form-group">
					<label for="<?php echo esc_attr( $attr['id'] ) ?>"><?php echo fw_htmlspecialchars( $item['options']['label'] ) ?>
						<?php if ( $options['required'] ): ?><sup>*</sup><?php endif; ?>
					</label>
				</div>
			<?php endif; ?>
			<select class="select-field" <?php echo fw_attr_to_html( $attr ) ?> >
				<?php foreach ( $choices as $choice ): ?>
					<option <?php echo fw_attr_to_html( $choice ) ?> ><?php echo $choice['value'] ?></option>
				<?php endforeach; ?>
			</select>
			<?php if ( $options['info'] ): ?>
				<p><em><?php echo $options['info'] ?></em></p>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>