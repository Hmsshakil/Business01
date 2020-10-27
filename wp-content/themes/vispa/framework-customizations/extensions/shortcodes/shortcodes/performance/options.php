<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main'     => array(
		'title'   => esc_html__( 'Main Options', 'vispa' ),
		'type'    => 'tab',
		'options' => array(
			'unique_id' => array(
				'type' => 'unique'
			),
			'icon_box'  => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'icon_type' => array(
						'label'   => esc_html__( 'Icon Type', 'vispa' ),
						'desc'    => esc_html__( 'Choose icon type', 'vispa' ),
						'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
						'type'    => 'radio',
						'value'   => 'awesome',
						'choices' => array(
							'awesome' => esc_html__( 'Font Awesome', 'vispa' ),
							'custom'  => esc_html__( 'Custom Icon Class', 'vispa' )
						)
					),
				),
				'choices' => array(
					'awesome' => array(
						'icon' => array(
							'type'  => 'icon',
							'label' => esc_html__( '', 'vispa' ),
							'desc'  => esc_html__( 'Choose icon', 'vispa' )
						),
					),
					'custom'  => array(
						'icon' => array(
							'type'  => 'text',
							'label' => esc_html__( '', 'vispa' ),
							'desc'  => esc_html__( 'Add custom icon class', 'vispa' )
						),
					)
				),
			),
			'title'     => array(
				'label' => esc_html__( 'Title', 'vispa' ),
				'desc'  => esc_html__( 'Enter the title', 'vispa' ),
				'type'  => 'text',
			),
			'text'      => array(
				'type'  => 'text',
				'label' => esc_html__( 'Subtitle', 'vispa' ),
				'desc'  => esc_html__( 'Enter some subtitle', 'vispa' )
			),
			'number'    => array(
				'label' => esc_html__( 'Number', 'vispa' ),
				'desc'  => esc_html__( 'Enter the number. Ex: 77', 'vispa' ),
				'type'  => 'short-text',
			),
			'class'     => array(
				'type'  => 'text',
				'label' => esc_html__( 'Custom Class', 'vispa' ),
				'desc'  => esc_html__( 'Enter a custom CSS class', 'vispa' ),
				'help'  => esc_html__( 'You can use this class to further style this shortcode by adding your custom CSS', 'vispa' ),
			),
		)
	),
	'advanced' => array(
		'title'   => esc_html__( 'Advanced Options', 'vispa' ),
		'type'    => 'tab',
		'options' => array(
			'title_styling'    => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'no',
						'label'        => esc_html__( 'Title Styling', 'vispa' ),
						'desc'         => esc_html__( 'Enable custom styling', 'vispa' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'vispa' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'vispa' ),
						),
					),
				),
				'choices' => array(
					'yes' => array(
						'font' => array(
							'type'  => 'typography-v2',
							'value' => array(
								'family'         => 'Arial',
								'size'           => 16,
								'line-height'    => 26,
								'letter-spacing' => 1,
								'color'          => ''
							),
							'label' => esc_html__( '', 'vispa' ),
							'desc'  => esc_html__( 'Choose the custom font', 'vispa' )
						),
					),
					'no'  => array(),
				),
			),
			'subtitle_styling' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'no',
						'label'        => esc_html__( 'Subtitle Styling', 'vispa' ),
						'desc'         => esc_html__( 'Enable custom styling', 'vispa' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'vispa' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'vispa' ),
						),
					),
				),
				'choices' => array(
					'yes' => array(
						'font' => array(
							'type'  => 'typography-v2',
							'value' => array(
								'family'         => 'Arial',
								'size'           => 16,
								'line-height'    => 26,
								'letter-spacing' => 1,
								'color'          => ''
							),
							'label' => esc_html__( '', 'vispa' ),
							'desc'  => esc_html__( 'Choose the custom font', 'vispa' )
						),
					),
					'no'  => array(),
				),
			),
			'number_styling'   => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'no',
						'label'        => esc_html__( 'Number Styling', 'vispa' ),
						'desc'         => esc_html__( 'Enable custom styling', 'vispa' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'vispa' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'vispa' ),
						),
					),
				),
				'choices' => array(
					'yes' => array(
						'font' => array(
							'type'  => 'typography-v2',
							'value' => array(
								'family'         => 'Arial',
								'size'           => 16,
								'line-height'    => 26,
								'letter-spacing' => 1,
								'color'          => ''
							),
							'label' => esc_html__( '', 'vispa' ),
							'desc'  => esc_html__( 'Choose the custom font', 'vispa' )
						),
					),
					'no'  => array(),
				),
			),
			'icon_color'       => array(
				'type'  => 'color-picker',
				'label' => __( 'Icon Color', 'vispa' ),
				'desc'  => __( 'Select the icon color', 'vispa' ),
			),
		)
	)
);