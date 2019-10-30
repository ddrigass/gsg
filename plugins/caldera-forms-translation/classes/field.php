<?php

/**
 * Field abstraction for translatable fields
 *
 * @package CF_Translate
 * @author    Josh Pollock <Josh@CalderaWP.com>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 CalderaWP LLC
 */
class CF_Translate_Field extends Caldera_Forms_Object {

	/** @var  string */
    protected $ID;
	/** @var  string */
    protected $caption;
	/** @var  string */
    protected $label;
	/** @var  string */
    protected $default;

	/**
	 * Field type
	 *
	 * @since 1.2.0
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * Field options
	 *
	 * @since 1.2.0
	 *
	 * @var string
	 */
	protected $option;

	/**
	 * Get all field names
	 *
	 * @since 0.1.0
	 *
	 * @return array
	 */
    public function get_field_names(){
        $vars = get_object_vars(  $this );
        return array_keys( $vars );
    }

	/**
	 * @since 1.2.0
	 * @inheritdoc
	 * Added to option is always used, never option to match field config
	 */
    public function __set( $property, $value ){
    	if( 'options' === $property ){
    		$property = 'option';
	    }
	    return parent::__set( $property, $value ); // TODO: Change the autogenerated stub
    }

	/**
	 * @since 1.2.0
	 * @inheritdoc
	 * Added to option is always used, never option to match field config
	 */
    public function __get( $property ){
	    if( 'options' === $property ){
	    	if( isset( $this->options ) ){
	    		$this->option = $this->options;
		    }
		    $property = 'option';
	    }
	    return parent::__get( $property ); // TODO: Change the autogenerated stub
    }

	/**
	 * Add a single option to option property
	 *
	 * @since 1.1.0
	 * @param string $opt Option ID
	 * @param string $label Option label
	 *
	 * @return $this
	 */
	public function add_option( $opt, $label ){
    	if( ! is_array( $this->option ) ){
    		$this->option = array();
	    }
    	$this->option[ $opt ] = $label;
		return $this;
    }

	/**
	 * Handler for setting option property
	 *
	 * @since 1.1.0
	 *
	 * @param array $options
	 *
	 * @return $this
	 */
    public function option_set( $options ){
	    if ( is_array( $options )  ) {
		    foreach ( $options as $opt => $config ) {
		    	$label =  is_string( $config ) ? $config : isset( $config[ 'label' ] ) ? $config[ 'label' ] : false;
			    if (  $label  ) {
				    $this->add_option( $opt, $label );
			    }
		    }
	    }
	    return $this;
    }


}