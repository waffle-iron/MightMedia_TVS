<?php if ( !defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
 * Created by Coders
 * User: Vytenis
 * Date: 1/3/13
 * Time: 11:52 PM
 * © 2013
 */
class index extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
	    $this->load->language('user/user');
    }

	public function index()
	{
		$this->template
			->set_layout( 'full_width_layout' )
			->build( 'why_us' );
	}
}

/* End of file welcome.php */
/* Location: ./controllers/index.php */
