<?php

class Pages extends HRC_Controller {

    public function statis($page = 'home')
    {
    	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            // show_404();
        	echo "not found 404";
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        var_dump(Supplier::all()->toArray());

        $this->load->view('pages/'.$page, $data);

        // $this->load->view('partials/header', $data);
        // $this->load->view('partials/footer', $data);
    }
}