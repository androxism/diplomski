<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

  public function index()
  {
    $this->load->helper('url');
    $this->load->view('login');

  }
  public function odabir_lika()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $data = array(
      'session' => $this->session->userdata(),
    );
    $this->load->view("odabirLika",$data);
  }
  public function odabir_carolije()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $data = array(
      'lik' => $this->session->id_lik,
    );
    $this->load->view('odabirCarolije', $data);
  }
  public function main()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('MainModel');
    $this->MainModel->getIgraci();
    $data['session'] = $this->session->userdata();
    $data['igraci'] = $this->MainModel->getIgraci();
    $data['resursi'] = $this->MainModel->resursi();
    
    $this->load->view('main', $data);
  }

	//public function index()
	//{
   // $this->load->helper('url');
    //echo site_url('news/local/123'); die();
//    $this->load->library('session');
//
//    $newdata = array(
//      'username'  => 'johndoe',
//      'email'     => 'johndoe@some-site.com',
//      'logged_in' => TRUE
//    );
//
//    $this->session->set_userdata($newdata);
//    echo '<pre>'; var_dump($this->session); die();
//    $this->load->database();
//    $query = $this->db->get_where('ucenik', ['id_ucenik' => 1]);
//
//    foreach ($query->result() as $row)
//    {
//      echo '<pre>'; var_dump($row->ime);
//    }
//
//    echo 'Total Results: ' . $query->num_rows();
//    $this->load->helper('url');
//
    //$this->load->view('welcome_message');
	//}

  public function test()
  {
    $this->load->database();
    $data = [
      'ime' => $_POST['ime'],
      'prezime' => $_POST['prezime'],
      'spol' => 'm',
      'email' => 'sdfasdf@msadf.com',
      'kIme_ucenik' => 'gfsdfg',
      'lozinka' => 'sfgfsdg',
      'odabrano_lik' => 1,
      'odabrano_prvaCarolija' => 1,
      'razinaIgraca' => 1,
      'id_lik' => 1,
    ];

    $this->db->insert('ucenik', $data);


    //echo '<pre>'; var_dump($_POST); die();
//    $this->load->library('session');
//    if ($this->session->logged_in)
//      echo 'You are loged in!';
//    else
//      echo 'Not logged in';
    //echo '<pre>'; var_dump($this->session); die();
//    $this->load->helper('url');
//
//		$this->load->view('welcome_message');
  }

  public function logout()
  {session_start();session_destroy();
    echo '<pre>'; var_dump($_SESSION); die();
//    $this->load->library('session');
//    $this->session->unset_userdata(array('username', 'email', 'logged_in'));
//    echo '<pre>'; var_dump($this->session); die();
//    $this->load->helper('url');
//
//		$this->load->view('welcome_message');
  }

  public function login()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();

    $query = $this->db->get_where('ucenik', ['kIme_ucenik' => $_POST['username'], 'lozinka' => $_POST['password']], 1);

    $newdata=array();
    if ($query->result()) {
      $user = $query->result()[0];

      $newdata = array(
        'id_ucenik'  => $user->id_ucenik,
        'kIme_ucenik'  => $user->kIme_ucenik,
        'ime'  => $user->ime,
        'id_lik'  => $user->id_lik,
        'lik' => $user->lik,
        'spol' => $user->spol,
        'prezime'  => $user->prezime,
        'email'     => $user->email,
        'razinaIgraca'  =>  $user->razinaIgraca,
        'kolZdravlje'   =>  $user->kolZdravlje,
        'kolEnergija'   =>  $user->kolEnergija,
        'kolZnanje'   =>  $user->kolZnanje,
        'trenutnoZdravlje'   =>  $user->trenutnoZdravlje,
        'trenutnoEnergija'   =>  $user->trenutnoEnergija,
        'trenutnoZnanje'   =>  $user->trenutnoZnanje,
        'logged_in' => TRUE
      );

      $this->session->set_userdata($newdata);

      if ($user->id_lik == NULL)
        redirect('/welcome/odabir_lika/');
      else
        redirect('/welcome/main/');
    } else {
      redirect('/welcome/index/');
    }
  }

  public function spremi_lika()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();

    $spells = json_encode([
      $_POST['odabir'].'1' => 0,
      $_POST['odabir'].'2' => 0,
      $_POST['odabir'].'3' => 0,
    ]);
    if($this->session->spol=='z')
    {
        if($_POST['odabir']==='mage')
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'carobnjakZ',
        'carolije' => $spells,
        'kolZdravlje'   =>  150,
        'kolEnergija'   =>  250,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  150,
        'trenutnoEnergija'   =>  250,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'carobnjakZ';
        $this->session->kolZdravlje = 150;
        $this->session->kolEnergija = 250;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 150;
        $this->session->trenutnoEnergija = 250;
        $this->session->trenutnoZnanje = 0;
    }
    else if($_POST['odabir']==='heal')
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'lijecnikZ',
        'carolije' => $spells,
        'kolZdravlje'   =>  250,
        'kolEnergija'   =>  150,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  250,
        'trenutnoEnergija'   =>  150,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'lijecnikZ';
        $this->session->kolZdravlje = 250;
        $this->session->kolEnergija = 150;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 250;
        $this->session->trenutnoEnergija = 150;
        $this->session->trenutnoZnanje = 0;
    }
    
    else
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'ratnikZ',
        'carolije' => $spells,
        'kolZdravlje'   =>  350,
        'kolEnergija'   =>  250,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  350,
        'trenutnoEnergija'   =>  250,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'ratnikZ';
        $this->session->kolZdravlje = 350;
        $this->session->kolEnergija = 250;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 350;
        $this->session->trenutnoEnergija = 250;
        $this->session->trenutnoZnanje = 0;
    }

    $this->session->id_lik = $_POST['odabir'];
    }
    else
    {
        if($_POST['odabir']==='mage')
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'carobnjak',
        'carolije' => $spells,
        'kolZdravlje'   =>  150,
        'kolEnergija'   =>  250,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  150,
        'trenutnoEnergija'   =>  250,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'carobnjak';
        $this->session->kolZdravlje = 150;
        $this->session->kolEnergija = 250;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 150;
        $this->session->trenutnoEnergija = 250;
        $this->session->trenutnoZnanje = 0;
    }
    else if($_POST['odabir']==='heal')
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'lijecnik',
        'carolije' => $spells,
        'kolZdravlje'   =>  250,
        'kolEnergija'   =>  150,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  250,
        'trenutnoEnergija'   =>  150,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'lijecnik';
        $this->session->kolZdravlje = 250;
        $this->session->kolEnergija = 150;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 250;
        $this->session->trenutnoEnergija = 150;
        $this->session->trenutnoZnanje = 0;
    }
    
    else
    {
        $this->db->update(
      'ucenik',
      [
        'id_lik' => $_POST['odabir'],
        'lik' => 'ratnik',
        'carolije' => $spells,
        'kolZdravlje'   =>  350,
        'kolEnergija'   =>  250,
        'kolZnanje'     => 100,
        'trenutnoZdravlje'   =>  350,
        'trenutnoEnergija'   =>  250,
        'trenutnoZnanje'   =>  0,
      ],
      ['id_ucenik' => $this->session->id_ucenik]
    );
        $this->session->lik = 'ratnik';
        $this->session->kolZdravlje = 350;
        $this->session->kolEnergija = 250;
        $this->session->kolZnanje = 100;
        $this->session->trenutnoZdravlje = 350;
        $this->session->trenutnoEnergija = 250;
        $this->session->trenutnoZnanje = 0;
    }

    $this->session->id_lik = $_POST['odabir'];
    }
    

    redirect('/welcome/odabir_carolije/');
  }

  public function spremi_caroliju()
  {
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();

    $query = $this->db->get_where(
      'ucenik',
      ['id_ucenik' => $this->session->id_ucenik]
    );

    $json = json_decode($query->result()[0]->carolije);

    $json->{$_POST['odabir']} += 1;

    $this->db->update(
      'ucenik',
      ['carolije' => json_encode($json)],
      ['id_ucenik' => $this->session->id_ucenik]
    );

    redirect('/welcome/main/');
  }
  
}
