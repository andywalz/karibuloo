<?php/** * Main class * * @author  Your Inspiration Themes * @package YITH Footer Banner * @version 1.0.3 */if ( ! defined( 'YITH_FBANNER' ) ) {    exit;} // Exit if accessed directlyif ( ! class_exists( 'YITH_Footer_Banner' ) ) {    /**     * YITH Footer Banner     *     * @since 1.0.0     */    class YITH_Footer_Banner {        /**         * Plugin version         *         * @var string         * @since 1.0.0         */        public $version = '1.0.5';        /**         * Plugin object         *         * @var string         * @since 1.0.0         */        public $obj = null;        /**         * Constructor         *         * @return mixed|YITH_Fbanner_Admin|YITH_Footer_Banner_Frontend         * @since 1.0.0         */        public function __construct() {            if ( is_admin() ) {                $this->obj = new YITH_Fbanner_Admin( $this->version );            } //is_admin()            else {                $this->obj = new YITH_Footer_Banner_Frontend( $this->version );            }            return $this->obj;        }    }} //!class_exists('YITH_Footer_Banner')