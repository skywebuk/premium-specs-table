<?php
if (!defined('ABSPATH')) {
    exit;
}

class Premium_Specs_Table_Luxury_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'premium_specs_table_luxury';
    }

    public function get_title() {
        return esc_html__('Premium Specs Table – Luxury', 'premium-specs-table');
    }

    public function get_icon() {
        return 'eicon-price-table';
    }

    public function get_categories() {
        return ['general'];
    }

    public function get_keywords() {
        return ['table', 'specs', 'specifications', 'luxury', 'gold', 'premium', 'black'];
    }

    /**
     * Get available icons (single source of truth)
     */
    private function get_icon_options() {
        return [
            'user' => esc_html__('User / Person', 'premium-specs-table'),
            'calendar' => esc_html__('Calendar', 'premium-specs-table'),
            'clock' => esc_html__('Clock', 'premium-specs-table'),
            'currency' => esc_html__('Pound / Currency', 'premium-specs-table'),
            'truck' => esc_html__('Truck / Delivery', 'premium-specs-table'),
            'shield' => esc_html__('Shield / Insurance', 'premium-specs-table'),
            'star' => esc_html__('Star', 'premium-specs-table'),
            'check' => esc_html__('Checkmark', 'premium-specs-table'),
            'fuel' => esc_html__('Fuel / Gas', 'premium-specs-table'),
            'gear' => esc_html__('Gear / Settings', 'premium-specs-table'),
            'speed' => esc_html__('Speedometer', 'premium-specs-table'),
            'engine' => esc_html__('Engine', 'premium-specs-table'),
            'seat' => esc_html__('Seat', 'premium-specs-table'),
            'door' => esc_html__('Door', 'premium-specs-table'),
            'key' => esc_html__('Key', 'premium-specs-table'),
            'location' => esc_html__('Location / Pin', 'premium-specs-table'),
            'phone' => esc_html__('Phone', 'premium-specs-table'),
            'email' => esc_html__('Email', 'premium-specs-table'),
            'info' => esc_html__('Info', 'premium-specs-table'),
            'warning' => esc_html__('Warning', 'premium-specs-table'),
            'none' => esc_html__('No Icon', 'premium-specs-table'),
        ];
    }

    /**
     * Get all SVG icons (single source of truth)
     */
    private function get_all_icons() {
        return [
            'user' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>',
            'calendar' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
            'clock' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
            'currency' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 7a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4c0 3 2 5 2 8H5"/><line x1="6" y1="21" x2="18" y2="21"/><line x1="5" y1="15" x2="15" y2="15"/><line x1="7" y1="15" x2="7" y2="21"/></svg>',
            'truck' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
            'shield' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
            'star' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
            'check' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>',
            'fuel' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 22V6a2 2 0 012-2h8a2 2 0 012 2v16"/><path d="M15 12h4a2 2 0 012 2v4a2 2 0 01-2 2h-1"/><path d="M21 10l-3-3"/><path d="M7 10h4"/></svg>',
            'gear' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>',
            'speed' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 10 10"/><path d="M12 12l5-5"/><circle cx="12" cy="12" r="2"/></svg>',
            'engine' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="8" width="20" height="10" rx="2"/><path d="M6 8V6a2 2 0 012-2h8a2 2 0 012 2v2"/><line x1="6" y1="13" x2="18" y2="13"/></svg>',
            'seat' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 18v-6a5 5 0 0110 0v6"/><path d="M5 18h14a2 2 0 012 2v1H3v-1a2 2 0 012-2z"/></svg>',
            'door' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="2" width="14" height="20" rx="2"/><circle cx="13" cy="12" r="1"/></svg>',
            'key' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>',
            'location' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
            'phone' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
            'email' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
            'info' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>',
            'warning' => '<svg class="pst-lux-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
            'none' => '',
        ];
    }

    private function get_svg_icon($icon_name) {
        $icons = $this->get_all_icons();
        return isset($icons[$icon_name]) ? $icons[$icon_name] : '';
    }

    protected function register_controls() {

        // =========================
        // CONTENT - HEADER
        // =========================
        $this->start_controls_section(
            'section_header',
            [
                'label' => esc_html__('Header', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_header',
            [
                'label' => esc_html__('Show Header', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'premium-specs-table'),
                'label_off' => esc_html__('No', 'premium-specs-table'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'header_title',
            [
                'label' => esc_html__('Title', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Specifications', 'premium-specs-table'),
                'label_block' => true,
                'condition' => ['show_header' => 'yes'],
            ]
        );

        $this->add_control(
            'header_subtitle',
            [
                'label' => esc_html__('Subtitle', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Vehicle Details', 'premium-specs-table'),
                'label_block' => true,
                'condition' => ['show_header' => 'yes'],
            ]
        );

        $this->end_controls_section();

        // =========================
        // CONTENT - TABLE ROWS
        // =========================
        $this->start_controls_section(
            'section_rows',
            [
                'label' => esc_html__('Table Rows', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'row_visible',
            [
                'label' => esc_html__('Show Row', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'premium-specs-table'),
                'label_off' => esc_html__('No', 'premium-specs-table'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $repeater->add_control(
            'row_icon',
            [
                'label' => esc_html__('Icon', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'user',
                'options' => $this->get_icon_options(),
            ]
        );

        $repeater->add_control(
            'row_label',
            [
                'label' => esc_html__('Label', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Label', 'premium-specs-table'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'row_value',
            [
                'label' => esc_html__('Value', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Value', 'premium-specs-table'),
                'label_block' => true,
                'description' => esc_html__('Supports shortcodes. Use [your_shortcode] for dynamic content.', 'premium-specs-table'),
            ]
        );

        $repeater->add_control(
            'value_style',
            [
                'label' => esc_html__('Value Style', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'normal',
                'options' => [
                    'normal' => esc_html__('Normal', 'premium-specs-table'),
                    'highlight' => esc_html__('Gold Gradient', 'premium-specs-table'),
                    'badge' => esc_html__('Badge', 'premium-specs-table'),
                ],
            ]
        );

        $this->add_control(
            'table_rows',
            [
                'label' => esc_html__('Rows', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'row_label' => esc_html__('Minimum Age', 'premium-specs-table'),
                        'row_value' => esc_html__('28 – 30 Years', 'premium-specs-table'),
                        'row_icon' => 'user',
                        'value_style' => 'normal',
                        'row_visible' => 'yes',
                    ],
                    [
                        'row_label' => esc_html__('Minimum Hire', 'premium-specs-table'),
                        'row_value' => esc_html__('2 Days', 'premium-specs-table'),
                        'row_icon' => 'calendar',
                        'value_style' => 'badge',
                        'row_visible' => 'yes',
                    ],
                    [
                        'row_label' => esc_html__('Miles Per Day', 'premium-specs-table'),
                        'row_value' => esc_html__('100 Miles', 'premium-specs-table'),
                        'row_icon' => 'speed',
                        'value_style' => 'normal',
                        'row_visible' => 'yes',
                    ],
                    [
                        'row_label' => esc_html__('Pre Paid Miles', 'premium-specs-table'),
                        'row_value' => esc_html__('£3.00 | £4.00 T/A', 'premium-specs-table'),
                        'row_icon' => 'currency',
                        'value_style' => 'normal',
                        'row_visible' => 'yes',
                    ],
                    [
                        'row_label' => esc_html__('Delivery & Collection', 'premium-specs-table'),
                        'row_value' => esc_html__('Free', 'premium-specs-table'),
                        'row_icon' => 'truck',
                        'value_style' => 'highlight',
                        'row_visible' => 'yes',
                    ],
                    [
                        'row_label' => esc_html__('Insurance', 'premium-specs-table'),
                        'row_value' => esc_html__('Comprehensive', 'premium-specs-table'),
                        'row_icon' => 'shield',
                        'value_style' => 'badge',
                        'row_visible' => 'yes',
                    ],
                ],
                'title_field' => '{{{ row_label }}}',
            ]
        );

        $this->end_controls_section();

        // =========================
        // CONTENT - PRICE ROW
        // =========================
        $this->start_controls_section(
            'section_price',
            [
                'label' => esc_html__('Price Row', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_price',
            [
                'label' => esc_html__('Show Price Row', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'premium-specs-table'),
                'label_off' => esc_html__('No', 'premium-specs-table'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'price_label',
            [
                'label' => esc_html__('Price Label', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Daily Rate', 'premium-specs-table'),
                'condition' => ['show_price' => 'yes'],
            ]
        );

        $this->add_control(
            'price_prefix',
            [
                'label' => esc_html__('Price Prefix', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('From', 'premium-specs-table'),
                'condition' => ['show_price' => 'yes'],
            ]
        );

        $this->add_control(
            'price_value',
            [
                'label' => esc_html__('Price Value', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('[your_price_shortcode]', 'premium-specs-table'),
                'description' => esc_html__('Supports shortcodes for dynamic pricing.', 'premium-specs-table'),
                'condition' => ['show_price' => 'yes'],
            ]
        );

        $this->add_control(
            'price_suffix',
            [
                'label' => esc_html__('Price Suffix', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Per Day', 'premium-specs-table'),
                'condition' => ['show_price' => 'yes'],
            ]
        );

        $this->end_controls_section();

        // =========================
        // CONTENT - FOOTER
        // =========================
        $this->start_controls_section(
            'section_footer',
            [
                'label' => esc_html__('Footer', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_footer',
            [
                'label' => esc_html__('Show Footer', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'premium-specs-table'),
                'label_off' => esc_html__('No', 'premium-specs-table'),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'footer_text',
            [
                'label' => esc_html__('Footer Text', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Terms & Conditions Apply', 'premium-specs-table'),
                'label_block' => true,
                'condition' => ['show_footer' => 'yes'],
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - TABLE CONTAINER
        // =========================
        $this->start_controls_section(
            'section_style_table',
            [
                'label' => esc_html__('Table Container', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'table_bg_color',
            [
                'label' => esc_html__('Background Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0a0a0a',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux' => 'background: linear-gradient(160deg, {{VALUE}} 0%, #111111 40%, #0d0b08 100%);',
                ],
            ]
        );

        $this->add_control(
            'accent_color',
            [
                'label' => esc_html__('Gold / Accent Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#d4af37',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux' => 'border-color: {{VALUE}}26;',
                    '{{WRAPPER}} .pst-lux::before' => 'background: linear-gradient(90deg, transparent, {{VALUE}}99, transparent);',
                    '{{WRAPPER}} .pst-lux-title-accent' => 'background: linear-gradient(180deg, {{VALUE}}, {{VALUE}}cc);',
                    '{{WRAPPER}} .pst-lux-subtitle' => 'color: {{VALUE}}80;',
                    '{{WRAPPER}} .pst-lux-icon' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .pst-lux-row::before' => 'background: linear-gradient(180deg, {{VALUE}}, {{VALUE}}cc);',
                    '{{WRAPPER}} .pst-lux-row:hover' => 'background: linear-gradient(135deg, {{VALUE}}0f, {{VALUE}}05);',
                    '{{WRAPPER}} .pst-lux-value.pst-lux-highlight' => 'background: linear-gradient(135deg, {{VALUE}}, #f5d96a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;',
                    '{{WRAPPER}} .pst-lux-badge' => 'background: linear-gradient(135deg, {{VALUE}}1f, {{VALUE}}0a); color: {{VALUE}}; border-color: {{VALUE}}26;',
                    '{{WRAPPER}} .pst-lux-divider' => 'background: linear-gradient(90deg, transparent, {{VALUE}}1f, transparent);',
                    '{{WRAPPER}} .pst-lux-price-row' => 'background: linear-gradient(135deg, {{VALUE}}0f, {{VALUE}}05); border-top-color: {{VALUE}}1a;',
                    '{{WRAPPER}} .pst-lux-price-row::before' => 'background: linear-gradient(90deg, transparent, {{VALUE}}4d, transparent);',
                    '{{WRAPPER}} .pst-lux-price-amount' => 'background: linear-gradient(135deg, {{VALUE}} 0%, #f5d96a 50%, {{VALUE}} 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;',
                ],
            ]
        );

        $this->add_control(
            'table_border_radius',
            [
                'label' => esc_html__('Border Radius', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'table_shadow',
                'selector' => '{{WRAPPER}} .pst-lux',
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - HEADER
        // =========================
        $this->start_controls_section(
            'section_style_header',
            [
                'label' => esc_html__('Header', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => ['show_header' => 'yes'],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .pst-lux-title',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => esc_html__('Subtitle Typography', 'premium-specs-table'),
                'selector' => '{{WRAPPER}} .pst-lux-subtitle',
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - ROWS
        // =========================
        $this->start_controls_section(
            'section_style_rows',
            [
                'label' => esc_html__('Rows', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'row_padding',
            [
                'label' => esc_html__('Row Padding', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'default' => [
                    'top' => '16',
                    'right' => '24',
                    'bottom' => '16',
                    'left' => '24',
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'row_divider_color',
            [
                'label' => esc_html__('Divider Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(255, 255, 255, 0.03)',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-row:not(:last-child)' => 'border-bottom-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'row_border_radius',
            [
                'label' => esc_html__('Row Border Radius', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 20],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 12,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-row' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - ICONS
        // =========================
        $this->start_controls_section(
            'section_style_icons',
            [
                'label' => esc_html__('Icons', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'icon_size',
            [
                'label' => esc_html__('Icon Size', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 12, 'max' => 40],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_opacity',
            [
                'label' => esc_html__('Icon Opacity', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range' => [
                    '%' => ['min' => 0, 'max' => 100, 'step' => 5],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-icon' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_control(
            'icon_gap',
            [
                'label' => esc_html__('Gap Between Icon & Label', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 30],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 14,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-label' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - TYPOGRAPHY
        // =========================
        $this->start_controls_section(
            'section_style_typography',
            [
                'label' => esc_html__('Typography', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'label_color',
            [
                'label' => esc_html__('Label Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(255, 255, 255, 0.5)',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-label' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'label_typography',
                'label' => esc_html__('Label Typography', 'premium-specs-table'),
                'selector' => '{{WRAPPER}} .pst-lux-label',
            ]
        );

        $this->add_control(
            'value_color',
            [
                'label' => esc_html__('Value Color', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(255, 255, 255, 0.9)',
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-value' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'value_typography',
                'label' => esc_html__('Value Typography', 'premium-specs-table'),
                'selector' => '{{WRAPPER}} .pst-lux-value',
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - BADGE
        // =========================
        $this->start_controls_section(
            'section_style_badge',
            [
                'label' => esc_html__('Badge Style', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'badge_padding',
            [
                'label' => esc_html__('Badge Padding', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'default' => [
                    'top' => '6',
                    'right' => '16',
                    'bottom' => '6',
                    'left' => '16',
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'badge_border_radius',
            [
                'label' => esc_html__('Badge Border Radius', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 30],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 8,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-badge' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // =========================
        // STYLE - PRICE ROW
        // =========================
        $this->start_controls_section(
            'section_style_price',
            [
                'label' => esc_html__('Price Row', 'premium-specs-table'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => ['show_price' => 'yes'],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_label_typography',
                'label' => esc_html__('Label Typography', 'premium-specs-table'),
                'selector' => '{{WRAPPER}} .pst-lux-price-label',
            ]
        );

        $this->add_control(
            'price_amount_size',
            [
                'label' => esc_html__('Price Amount Size', 'premium-specs-table'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 14, 'max' => 56],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 22,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pst-lux-price-amount' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="pst-lux">

            <?php if ($settings['show_header'] === 'yes') : ?>
                <div class="pst-lux-header">
                    <div class="pst-lux-title">
                        <span class="pst-lux-title-accent"></span>
                        <?php echo esc_html($settings['header_title']); ?>
                    </div>
                    <?php if (!empty($settings['header_subtitle'])) : ?>
                        <div class="pst-lux-subtitle"><?php echo esc_html($settings['header_subtitle']); ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="pst-lux-body">
                <?php foreach ($settings['table_rows'] as $index => $row) : ?>
                    <?php if ($row['row_visible'] === 'yes') : ?>
                        <div class="pst-lux-row">
                            <span class="pst-lux-label">
                                <?php echo $this->get_svg_icon($row['row_icon']); ?>
                                <?php echo esc_html($row['row_label']); ?>
                            </span>
                            <?php
                            $value = do_shortcode($row['row_value']);
                            $value_class = 'pst-lux-value';
                            if ($row['value_style'] === 'highlight') {
                                $value_class .= ' pst-lux-highlight';
                            } elseif ($row['value_style'] === 'badge') {
                                $value_class = 'pst-lux-badge';
                            }
                            ?>
                            <span class="<?php echo esc_attr($value_class); ?>">
                                <?php echo wp_kses_post($value); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <?php if ($settings['show_price'] === 'yes') : ?>
                <div class="pst-lux-divider"></div>
                <div class="pst-lux-price-row">
                    <span class="pst-lux-price-label"><?php echo esc_html($settings['price_label']); ?></span>
                    <span class="pst-lux-price-wrap">
                        <span class="pst-lux-price-prefix"><?php echo esc_html($settings['price_prefix']); ?></span>
                        <span class="pst-lux-price-amount"><?php echo wp_kses_post(do_shortcode($settings['price_value'])); ?></span>
                        <span class="pst-lux-price-suffix"><?php echo esc_html($settings['price_suffix']); ?></span>
                    </span>
                </div>
            <?php endif; ?>

            <?php if ($settings['show_footer'] === 'yes' && !empty($settings['footer_text'])) : ?>
                <div class="pst-lux-footer">
                    <span class="pst-lux-footer-text"><?php echo esc_html($settings['footer_text']); ?></span>
                </div>
            <?php endif; ?>

        </div>
        <?php
    }

    protected function content_template() {
        ?>
        <#
        var icons = <?php echo wp_json_encode($this->get_all_icons()); ?>;
        #>
        <div class="pst-lux">

            <# if ( settings.show_header === 'yes' ) { #>
                <div class="pst-lux-header">
                    <div class="pst-lux-title">
                        <span class="pst-lux-title-accent"></span>
                        {{ settings.header_title }}
                    </div>
                    <# if ( settings.header_subtitle ) { #>
                        <div class="pst-lux-subtitle">{{ settings.header_subtitle }}</div>
                    <# } #>
                </div>
            <# } #>

            <div class="pst-lux-body">
                <# _.each( settings.table_rows, function( row, index ) { #>
                    <# if ( row.row_visible === 'yes' ) { #>
                        <div class="pst-lux-row">
                            <span class="pst-lux-label">
                                {{{ icons[row.row_icon] || '' }}}
                                {{ row.row_label }}
                            </span>
                            <#
                            var valueClass = 'pst-lux-value';
                            if ( row.value_style === 'highlight' ) {
                                valueClass += ' pst-lux-highlight';
                            } else if ( row.value_style === 'badge' ) {
                                valueClass = 'pst-lux-badge';
                            }
                            #>
                            <span class="{{{ valueClass }}}">
                                {{{ row.row_value }}}
                            </span>
                        </div>
                    <# } #>
                <# }); #>
            </div>

            <# if ( settings.show_price === 'yes' ) { #>
                <div class="pst-lux-divider"></div>
                <div class="pst-lux-price-row">
                    <span class="pst-lux-price-label">{{ settings.price_label }}</span>
                    <span class="pst-lux-price-wrap">
                        <span class="pst-lux-price-prefix">{{ settings.price_prefix }}</span>
                        <span class="pst-lux-price-amount">{{{ settings.price_value }}}</span>
                        <span class="pst-lux-price-suffix">{{ settings.price_suffix }}</span>
                    </span>
                </div>
            <# } #>

            <# if ( settings.show_footer === 'yes' && settings.footer_text ) { #>
                <div class="pst-lux-footer">
                    <span class="pst-lux-footer-text">{{ settings.footer_text }}</span>
                </div>
            <# } #>

        </div>
        <?php
    }
}
