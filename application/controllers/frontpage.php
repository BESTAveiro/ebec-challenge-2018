 
<?php if (!defined('BASEPATH')) die();

class Frontpage extends Main_Controller {

   public function index()
	{
      	$this->load->view('include/header');
      	$this->load->view('index');
      	$this->load->view('include/footer');
	}

	public function faqs()
	{
		$this->load->view('include/header');
      	$this->load->view('faqs');
      	$this->load->view('include/footer');
	}

	public function apply()
	{
		$this->load->view('include/header');
      	$this->load->view('apply');
      	$this->load->view('include/footer');
	}

	public function news()
	{
		$this->load->view('include/header');
      	$this->load->view('news');
      	$this->load->view('include/footer');
	}

	public function partners()
	{
		$this->load->view('include/header');
      	$this->load->view('partners');
      	$this->load->view('include/footer');
	}

	public function contacts()
	{
		$this->load->view('include/header');
      	$this->load->view('contacts');
      	$this->load->view('include/footer');
	}

	public function news_xlm()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_xlm');
      	$this->load->view('include/footer');
	}

	public function news_the_navigator_company()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_the_navigator_company');
      	$this->load->view('include/footer');
	}

	public function querparceiro()
    	{
    		$this->load->view('include/header');
          	$this->load->view('querparceiro.php');
          	$this->load->view('include/footer');
    	}
//    	INGLÊS
    public function en()
    {
        $this->load->view('include/headeren');
        $this->load->view('indexEn');
        $this->load->view('include/footer');
    }
    public function applyen()
    {
        $this->load->view('include/headeren');
        $this->load->view('apply-en');
        $this->load->view('include/footer');
    }
    public function indexen()
    {
        $this->load->view('include/headeren');
        $this->load->view('indexEn');
        $this->load->view('include/footer');
    }
    public function faqsen()
    {
        $this->load->view('include/headeren');
        $this->load->view('faqs-en');
        $this->load->view('include/footer');
    }
    public function contactsen()
    {
        $this->load->view('include/headeren');
        $this->load->view('contacts-en');
        $this->load->view('include/footer');
    }
    public function querparceiroen()
    {
        $this->load->view('include/headeren');
        $this->load->view('querparceiro-en');
        $this->load->view('include/footer');
    }
}
/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
