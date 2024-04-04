<?php
namespace nexpogmbhcompanion\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class nexpogmbh_pricing extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'nexpogmbh-pricing';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Pricing', 'nexpogmbh-companion' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-social-icons';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'nexpogmbh' ];
	}

	public function get_script_depends() {
        return array('load-more');
    }


	protected function _register_controls() {

        $this->start_controls_section(
            '_section_table_settings',
            [
                'label' => esc_html__('Table Settings', 'oyolloo-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'monthly_pricing',
			[
				'label' => esc_html__( 'Monthly Pricing', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'table_rows_wrap',
            [
                'label' => esc_html__('Rows', 'oyolloo-core'),
                'type' => Controls_Manager::REPEATER,
                'fields' =>[
                    [
                        'name' => 'package_name',
                        'label' => esc_html__( 'Package Name', 'textdomain' ),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('Package Name', 'oyolloo-core'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'package_price',
                        'label' => esc_html__( 'Package Price', 'textdomain' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('0', 'oyolloo-core'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'package_subtext',
                        'label' => esc_html__( 'Package Subtext', 'textdomain' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('/per month', 'oyolloo-core'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'package_note',
                        'label' => esc_html__( 'Package Note', 'textdomain' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('Save a month 0€ ', 'oyolloo-core'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'package_button_text',
                        'label' => esc_html__( 'Button Text', 'textdomain' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('Register Now for Free ', 'oyolloo-core'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'package_button_url',
                        'label' => esc_html__( 'Button URL', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::URL,
						'options' => [ 'url' ],
						'default' => [
							'url' => '',
						],
						'label_block' => true,
                    ],
                    
                    [
                        'name' => 'table_rows',
                        'label' => esc_html__( 'Featute List', 'textdomain' ),
                        'type' => Controls_Manager::REPEATER,
                        'fields' => [
                            [
                                'name' => 'cell_data',
                                'label' => esc_html__('Cell Data', 'oyolloo-core'),
                                'type' => Controls_Manager::TEXTAREA,
                                'default' => esc_html__('Cell Data', 'oyolloo-core'),
                                'label_block' => true,
                            ],
                            [
                                'name' => 'cell_data_icon',
                                'label' => esc_html__( 'Icon', 'textdomain' ),
                                'type' => \Elementor\Controls_Manager::ICONS,
                                'default' => [
                                    'value' => 'fas fa-circle',
                                    'library' => 'fa-solid',
                                ],
                            ],
                        ]
                    ],
                ],
				'title_field' => '{{{ package_name }}}',
            ]
        );

		//Yearly Pricing list
		$this->add_control(
			'yearly_pricing',
			[
				'label' => esc_html__( 'Yearly Pricing', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'table_rows_wrap_2',
            [
				'label' => esc_html__('Rows', 'oyolloo-core'),
				'type' => Controls_Manager::REPEATER,
				'fields' =>[
				[
					'name' => 'package_name_2',
					'label' => esc_html__( 'Package Name', 'textdomain' ),
					'type' => Controls_Manager::WYSIWYG,
					'default' => esc_html__('Package Name', 'oyolloo-core'),
					'label_block' => true,
				],
				[
					'name' => 'package_price_2',
					'label' => esc_html__( 'Package Price', 'textdomain' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__('0', 'oyolloo-core'),
					'label_block' => true,
				],
				[
					'name' => 'package_subtext_2',
					'label' => esc_html__( 'Package Subtext', 'textdomain' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__('/per month', 'oyolloo-core'),
					'label_block' => true,
				],
				[
					'name' => 'package_note_2',
					'label' => esc_html__( 'Package Note', 'textdomain' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__('Save a month 0€ ', 'oyolloo-core'),
					'label_block' => true,
				],
				[
					'name' => 'package_button_text_2',
					'label' => esc_html__( 'Button Text', 'textdomain' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__('Register Now for Free ', 'oyolloo-core'),
					'label_block' => true,
				],
				[
					'name' => 'package_button_url_2',
					'label' => esc_html__( 'Button URL', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url' ],
					'default' => [
						'url' => '',
					],
					'label_block' => true,
				],
				
				[
					'name' => 'table_rows_2',
					'label' => esc_html__( 'Featute List', 'textdomain' ),
					'type' => Controls_Manager::REPEATER,
					'fields' => [
						[
							'name' => 'cell_data_2',
							'label' => esc_html__('Cell Data', 'oyolloo-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('Cell Data', 'oyolloo-core'),
							'label_block' => true,
						],
						[
							'name' => 'cell_data_icon_2',
							'label' => esc_html__( 'Icon', 'textdomain' ),
							'type' => \Elementor\Controls_Manager::ICONS,
							'default' => [
								'value' => 'fas fa-circle',
								'library' => 'fa-solid',
							],
						],
					]
				],
                ],
				'title_field' => '{{{ package_name_2 }}}',
            ]
        );

        $this->end_controls_section();
    }

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		extract($settings);

        ?>
		<div class="ch_pricing_part">
			<div class="ch_pricing_plan_switcher mb-4">
				<label class="ch_toggler toggler--is-active" id="ch_filt_monthly">Monthly</label>
				<div class="ch_toggle">
					<input type="checkbox" id="ch_switcher" class="ch_check">
					<div class="ch_switch"></div>
				</div>
				<label class="ch_toggler" id="ch_filt_yearly"> Yearly</label>
			</div>
			<div id="ch_monthly">
			    <div class="swiper ch_pricing_slider">
					<div class="swiper-wrapper">
						<?php foreach ($settings['table_rows_wrap'] as $row) :?>
							<div class="swiper-slide">
								<div class="ch_pricing_plan"> 
									<div class="pricing_header">
										<h5 class="ch_title"><?php echo $row['package_name']; ?></h5>
										<div class="pricing_tittle">
											<h2 class="ch_price"> <?php echo $row['package_price']; ?> <span> <?php echo $row['package_subtext']; ?></span> </h2>
										</div>
										<p class="note"><?php echo $row['package_note']; ?> </p>
									</div>
									<div class="pricing_content">
										<ul class="ch_feature_list">
											<?php foreach ($row['table_rows'] as $cell) : ?>
												<li> 
													<span><?php echo $cell['cell_data']; ?> </span> 
													<div class="icon">			
														<?php \Elementor\Icons_Manager::render_icon( $cell['cell_data_icon'], [ 'aria-hidden' => 'true' ] ); ?>
													</div> 
												</li>
											<?php endforeach; ?>
										</ul>
										<a class="cu_btn btn_4" href="<?php echo $row['package_button_url']['url']; ?>"><?php echo $row['package_button_text']; ?> <i class="fas fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="d-lg-none text-center">
						<div class="pricing_pagination"></div>
					</div>
				</div>
			</div>
			<div id="ch_yearly" class="ch_hide">
			    <div class="swiper ch_pricing_slider">
				    <div class="swiper-wrapper">
						<?php foreach ($settings['table_rows_wrap_2'] as $row_2) :?>
							<div class="swiper-slide">
								<div class="ch_pricing_plan"> 
									<div class="pricing_header">
										<h5 class="ch_title"><?php echo $row_2['package_name_2']; ?></h5>
										<div class="pricing_tittle">
											<h2 class="ch_price"> <?php echo $row_2['package_price_2']; ?> <span> <?php echo $row_2['package_subtext_2']; ?></span> </h2>
										</div>
										<p class="note"><?php echo $row_2['package_note_2']; ?> </p>
									</div>
									<div class="pricing_content">
										<ul class="ch_feature_list">
											<?php foreach ($row_2['table_rows_2'] as $cell_2) : ?>
												<li> 
													<span><?php echo $cell_2['cell_data_2']; ?> </span> 
													<div class="icon">			
														<?php \Elementor\Icons_Manager::render_icon( $cell_2['cell_data_icon_2'], [ 'aria-hidden' => 'true' ] ); ?>
													</div> 
												</li>
											<?php endforeach; ?>
										</ul>
										<a class="cu_btn btn_4" href="<?php echo $row_2['package_button_url_2']['url']; ?>"><?php echo $row_2['package_button_text_2']; ?> <i class="fas fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="d-lg-none text-center">
						<div class="pricing_pagination"></div>
					</div>
				</div>
			</div>
			
		</div>
        <?php
		
	}
	

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
	}
}
