<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
         $this->load->library('curl');
    }
    //fungsi index client
	public function index(){
		$url = "http://localhost/restserver/index.php/api/example/status/format/json";
		$url1 = "http://localhost/restserver/index.php/api/example/list/format/json";
        	
		$json = $this->curl->simple_get($url);
	    $data['query'] = json_decode($json);

        $json1 = $this->curl->simple_get($url1);
        $data['query1'] = json_decode($json1);
        
		$this->load->view('nav');
		$this->load->view('index',$data);
        
	}
	//fungsi client baca berita
	public function userbaca(){
		$id = $this->input->get('id');
		//echo $id;
		$url = "http://localhost/restserver/index.php/api/example/bacaberita/ID/$id/format/json";
		//echo $url;	
		$json = $this->curl->simple_get($url);
	    $data['query'] = json_decode($json);
		$this->load->view('nav');
		$this->load->view('userbaca',$data);
	}
	//fungsi halaman login admin
	public function login()
	{
		$sts = $this->session->userdata('status');
        if(!isset($sts) || $sts != "true")
        {
            $this->load->view('header3');
            $this->load->view('admin');
            
        }
        else
            redirect("admindex");
	}
    
    public function admlogin()
    {
    	$this->session->sess_destroy();
       	      	
	    $this->load->library('rest');
	    $this->rest->initialize(array('server' => 'http://localhost/restserver/index.php/'));
	    
	    $params = array(
        'username' => $this->input->post('username'),
        'pass'     => $this->input->post('password') ,
        
        );
		
	    $uri = 'api/example/checkadmin';

	    $this->rest->format('application/json');

	    $validity =  $this->rest->get($uri, $params);
	    echo $validity;
        if($validity == "true")
        {
            $this->session->set_userdata('status','true');
            if($this->input->post('username') == "admin")
                $this->session->set_userdata('mode','admin');
            else
            {
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('mode','staff');
            }
            redirect("admindex");
        }
        else
        {
            $this->session->set_userdata('status','false');
            redirect("login");
        }
    }
    

    public function admlogout()
    {
        $this->session->sess_destroy();
        redirect("login");
    }
    
    public function admindex()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $this->load->view('adminhome');
        }
        else echo "Anda belum login";
    }
    
    public function inputmonitoring()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $this->load->view('inputmonitoring');
        }
        else echo "Anda belum login";
    }
    

    public function proseslihat()
    {
        $this->load->library('curl');
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
       	 	$wilayah = $this->input->post('wilayah');
	        $dari=$this->input->post('dari');
	        $ke=$this->input->post('ke');
	       	
	       	if(empty($wilayah)){
			   	$wilayah = 'null';
			   }
			if(empty($dari)){
			   	$dari = 'null';
			   	$ke = 'null';
			   }
	       	$dateawal = str_replace("/","-",$dari);
			$awal = str_replace(" ","%20",$dateawal);
			$dateakhir = str_replace("/","-",$ke);
			$akhir = str_replace(" ","%20",$dateakhir);
			
			
			$url = "http://localhost/restserver/index.php/api/example/hasil/DATE_TIME/$awal/DATE_TIME2/$akhir/WILAYAH/$wilayah/format/json";
			
			$json = $this->curl->simple_get($url);
	        //$data['query'] = $this->model->getwilayah();
	        $data['query'] = json_decode($json);
	        $data['wilayah']= $wilayah;
	        $data['dari']=$dari;
	        $data['ke']=$ke;

	        $this->load->view('header2');
	        
	        //$this->load->view('header4');
	        $this->load->view('inputmonitoring');
	        $this->load->view('lihatwilayah', $data);
	        //$this->load->view('lihatwilayah2', $data);
        }
        else echo "Anda belum login";
    }

 
    public function addadmin()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $this->load->view('addadmin');
        }
        else echo "Anda belum login";
    }

    

    public function tambahadmin()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $data['query'] = $this->model->tambahadm();
        $this->load->view('header2');
        $this->load->view('adminhome');
        }
        else echo "Anda belum login";
    }
    
    public function listadmin()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $url = "http://localhost/restserver/index.php/api/example/listadmin/format/json";
            
        $json = $this->curl->simple_get($url);
        $data['query'] = json_decode($json);
        $this->load->view('header2');
        $this->load->view('listadmin',$data);
        }
        else echo "Anda belum login";
    }

     public function ambiladmin()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->library('curl');
        $username = $this->input->get('username');
        $url = "http://localhost/restserver/index.php/api/example/ambiladmin/username/$username/format/json";
            
        $json = $this->curl->simple_get($url);
        $data['query'] = json_decode($json);
        if($data!=0){
           $this->load->view('header2');
           $this->load->view('updateadmin',$data);
        }
            else{
                redirect("listadmin");
            }
        }
        else redirect("login");
    }

    public function updateadmin()
    {

        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
	    $this->load->library('rest');
	    $this->rest->initialize(array('server' => 'http://localhost/restserver/index.php/'));
	    $params = array(
        'username' => $this->input->get('username'),
        'pass'     => $this->input->get('pass') ,
        'nama'     => $this->input->get('nama'),
        'email'    => $this->input->get('email'),
        'hp'       => $this->input->get('hp'),
        'jk'       => $this->input->get('jk'),
        'alamat'   => $this->input->get('alamat')  
        );

    $uri = 'api/example/updateadmin';

    $this->rest->format('application/json');

    $this->rest->get($uri, $params);
    redirect('listadmin');
    }

        
     /*   $url = "http://localhost/restserver/index.php/api/example/updateadmin/username/$username/pass/$pass
        /nama/$nama/email/$email/hp/$hp/jk/$jk/alamat/$alamat/format/json";
            
        $json = $this->curl->simple_get($url);
        $data['query'] = json_decode($json);
        redirect("listadmin");
         */ 
        
        else echo "Anda belum login";
    }


     public function deleteadmin()
    {
        $sts = $this->session->userdata('status');

        if($sts == "true")
        {
            
        $this->load->library('curl');
        $username = $this->input->get('username');
        $url = "http://localhost/restserver/index.php/api/example/deleteadmin/username/$username/format/json";
            
        $json = $this->curl->simple_get($url);
        $data['query'] = json_decode($json);
        
        if($data!=0){
           redirect("listadmin");
        }
            else{
            echo "gagal";
            }
        }

        else echo "Anda belum login";
    }
    public function tambahberita()
    {
		$this->load->view('header2');
		$this->load->view('adminberita');
	}
	
	public function prosesberita(){
		
	    $this->load->library('rest');
	    $this->rest->initialize(array('server' => 'http://localhost/restserver/index.php/'));
		$params = array(
						'judul' => $this->input->post('judul'),
					    'berita' => $this->input->post('berita')
					    );
		$uri = 'api/example/berita';

		$this->rest->format('application/json');

		$result = $this->rest->get($uri, $params);
		//echo $result;
		redirect('berita');
		}
	    
	public function listberita(){
		$url = "http://localhost/restserver/index.php/api/example/list/format/json";
			
		$json = $this->curl->simple_get($url);
	    $data['query'] = json_decode($json);
		$this->load->view('header2');
		$this->load->view('listberita',$data);
	}
	public function bacaberita(){
		$id = $this->input->get('id');
		//echo $id;
		$url = "http://localhost/restserver/index.php/api/example/bacaberita/ID/$id/format/json";
		//echo $url;	
		$json = $this->curl->simple_get($url);
	    $data['query'] = json_decode($json);
		$this->load->view('header2');
		$this->load->view('bacaberita',$data);
	}
	public function editberita(){
		$id = $this->input->get('id');
		//echo $id;
		$url = "http://localhost/restserver/index.php/api/example/editberita/ID/$id/format/json";
		//echo $url;	
		$json = $this->curl->simple_get($url);
	    $data['query'] = json_decode($json);
		$this->load->view('header2');
		$this->load->view('editberita',$data);
	}
	public function updateberita(){
		$this->load->library('rest');
	    $this->rest->initialize(array('server' => 'http://localhost/restserver/index.php/'));
		$params = array(
						'id_berita' => $this->input->get('id_berita'),
						'judul' => $this->input->post('judul'),
					    'berita' => $this->input->post('berita')
					    );
		
		$uri = 'api/example/updateberita';
		
		$this->rest->format('application/json');

		$this->rest->get($uri, $params);
		redirect('berita');
	}
	public function deleteberita(){
		$id = $this->input->get('id');
		//echo $id;
		$url = "http://localhost/restserver/index.php/api/example/deleteberita/ID/$id/format/json";
		//echo $url;	
		$json = $this->curl->simple_get($url);

		redirect('berita');
	}
	
	function pdf(){
		
		$wilayah = $this->input->get('wilayah');
	    $dari=$this->input->get('dari');
	    $ke=$this->input->get('ke');
	    
	    $dateawal = str_replace("/","-",$dari);
		$awal = str_replace(" ","%20",$dateawal);
		$dateakhir = str_replace("/","-",$ke);
		$akhir = str_replace(" ","%20",$dateakhir);
			
		$url = "http://localhost/restserver/index.php/api/example/hasil/DATE_TIME/$awal/DATE_TIME2/$akhir/WILAYAH/$wilayah/format/json";
			
		$json = $this->curl->simple_get($url);
	        //$data['query'] = $this->model->getwilayah();
	    $data1 = json_decode($json);

			// Load view “pdf_report” untuk menampilkan hasilnya
		$this->print_pdf($data1,$wilayah,$dari,$ke);
	}
	
	function print_pdf($data1,$wilayah,$dari,$ke){
		
		/*
		*
		* @author M.Fadli Prathama (09081003031)
		* email : m.fadliprathama@gmail.com
		*
		*/

		/* setting zona waktu */
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('fpdf');
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));

		$this->fpdf->FPDF("L","cm","A4");

		// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
		$this->fpdf->SetMargins(1,1,1);
		/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
		di footer, nanti kita akan membuat page number dengan format : number page / total page
		*/
		$this->fpdf->AliasNbPages();

		// AddPage merupakan fungsi untuk membuat halaman baru
		$this->fpdf->AddPage();

		// Setting Font : String Family, String Style, Font size
		$this->fpdf->SetFont('Times','B',16);

		/* Kita akan membuat header dari halaman pdf yang kita buat
		————– Header Halaman dimulai dari baris ini —————————–
		*/
		$this->fpdf->Cell(19,0.7,'Laporan Pengamatan Klimatologi',0,0,'C');

		// fungsi Ln untuk membuat baris baru
		$this->fpdf->Ln();

		$this->fpdf->Ln();
		/* Setting ulang Font : String Family, String Style, Font size
		kenapa disetting ulang ???
		jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
		tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
		maka kita harus mensetting ulang Font nya.
		jika diatas settingannya : helvetica, 'B', '12'
		khusus untuk penulisan alamat, kita setting : helvetica, ", 10
		yang artinya string stylenya normal / tidak Bold dan ukurannya 10
		*/
		$this->fpdf->SetFont('helvetica','',10);
		$this->fpdf->Cell(19,0.5,'Wilayah : '.$wilayah,0,0,'C');

		$this->fpdf->Ln();
		$this->fpdf->Cell(19,0.5,'Tanggal :'.$dari.' / '. $ke,0,0,'C');

		/* Fungsi Line untuk membuat garis */
		$this->fpdf->Line(1,3.5,20,3.5);
		$this->fpdf->Line(1,3.55,20,3.55);

		/* ————– Header Halaman selesai ————————————————*/

		/* setting header table */
		$this->fpdf->Ln(1);
		$this->fpdf->SetFont('Times','B',12);
		$this->fpdf->Cell(2 , 1, 'ID' , 1, 'LR', 'L');
		$this->fpdf->Cell(3 , 1, 'WILAYAH' , 1, 'LR', 'L');
		$this->fpdf->Cell(2 , 1, 'SUHU' , 1, 'LR', 'L');
		$this->fpdf->Cell(4 , 1, 'CURAH_HUJAN' , 1, 'LR', 'L');
		$this->fpdf->Cell(4 , 1, 'KELEMBABAN' , 1, 'LR', 'L');
		$this->fpdf->Cell(5 , 1, 'DATE_TIME' , 1, 'LR', 'L');

		/* generate hasil query disini */
		foreach($data1 as $data)
		{
		$this->fpdf->Ln();
		$this->fpdf->SetFont('Times','',12);
		$this->fpdf->Cell(2 , 0.7, $data->ID , 1, 'LR', 'L');
		$this->fpdf->Cell(3 , 0.7, $data->WILAYAH , 1, 'LR', 'L');
		$this->fpdf->Cell(2 , 0.7, $data->SUHU , 1, 'LR', 'L');
		$this->fpdf->Cell(4 , 0.7, $data->CURAH_HUJAN , 1, 'LR', 'L');
		$this->fpdf->Cell(4 , 0.7, $data->KELEMBABAN , 1, 'LR', 'L');
		$this->fpdf->Cell(5 , 0.7, $data->DATE_TIME , 1, 'LR', 'L');
		}
		/* setting posisi footer 3 cm dari bawah */

		$this->fpdf->SetY(-3);

		/* setting font untuk footer */
		$this->fpdf->SetFont('Times','',10);

		/* setting cell untuk waktu pencetakan */
		$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i'),0,'LR','L');

		/* setting cell untuk page number */
		$this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');

		/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
		$this->fpdf->Output("Laporan Klimatologi ".$dari.' / '.$ke.".pdf","I");
		
	}
	
	public function xls()
	{  
        //$this->load->library("excel");
        $this->load->library('pagination');

        $wilayah = $this->input->get('wilayah');
        $dari=$this->input->get('dari');
        $ke=$this->input->get('ke');

        $dateawal = str_replace("/","-",$dari);
		$awal = str_replace(" ","%20",$dateawal);
		$dateakhir = str_replace("/","-",$ke);
		$akhir = str_replace(" ","%20",$dateakhir);
		
		$url = "http://localhost/restserver/index.php/api/example/hasil/DATE_TIME/$awal/DATE_TIME2/$akhir/WILAYAH/$wilayah/format/json";
			
		$json = $this->curl->simple_get($url);
	        
	    $data['query'] = json_decode($json);
        $this->load->view('exportxls',$data);

                  
    }
    
}