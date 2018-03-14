<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('survey_model');
	 }


	public function index()
	{
		$data['question']=$this->survey_model->question();
		// print_r($data['question']);
		$this->load->view('engagement/form', $data);
	}

	public function save_unswer(){
		$question=$this->survey_model->question();
		$this->__validate();
		foreach ($question as $key) {
			$data = array(
				'responden_id'=>$this->input->post('id_responden'),
				'question_id'=>$key['id_question'],
				'score'=>$this->input->post($key['id_question']),
				'date'=>date('Y-m-d'),
			);
			$this->db->insert('unswer', $data);
		}

		echo json_encode(array('status'=>true, 'id'=>$this->input->post('id_responden')));
	}

	private function __validate(){
		$question=$this->survey_model->question();
		$data = array();
		$data['score']=array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		foreach ($question as $key) {
			if($this->input->post($key['id_question']) == '')
			{
					$data['score'][]=$this->input->post($key['id_question']);
					$data['inputerror'][] = $key['id_question'];
					$data['error_string'][] = 'Cannot be empty !!!';
					$data['status'] = FALSE;
			}
		}
		if($data['status'] === FALSE)
		{
				echo json_encode($data);
				exit();
		}
	}

	public function responden()
	{
		$this->__validate_responden();
		// exit;
		$demografi=array(
			'fungsi_kerja'=>$this->input->post('fungsi_kerja'),
			'klasifikasi_pegawai'=>$this->input->post('klasifikasi_kerja'),
			'masa_kerja'=>$this->input->post('masa_kerja'),
			'pendidikan'=>$this->input->post('pendidikan'),
			'gender'=>$this->input->post('gender'),
		);

		$this->db->insert('responden', $demografi);
		$id=$this->db->insert_id();
		echo json_encode(array('status'=>true, 'id_responden'=>$id));
	}

	private function __validate_responden(){
		$arr=array('fungsi_kerja', 'klasifikasi_kerja','masa_kerja', 'pendidikan', 'gender');
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		for($i=0; $i<count($arr);$i++) {
			if($this->input->post($arr[$i]) == '')
			{
					$data['inputerror'][] = $arr[$i];;
					$data['error_string'][] = 'Cannot be empty !!!';
					$data['status'] = FALSE;
			}
		}
		if($data['status'] === FALSE)
		{
				echo json_encode($data);
				exit();
		}
	}

	public function data_chart($id_res)
	{
		$level1=$this->survey_model->get_level1($id_res);
		$data1=array(); // paling luar
		$legend=array();
		$level2=$this->survey_model->get_level2($id_res);
		$data2=array(); //tengah
		$sum=0;
		foreach ($level2 as $key) {
			array_push($data2, array(
				'value'=>intval($key['sum'])/intval($key['count'])*10,
				'name'=>$key['observasi']
			));
			array_push($legend,$key['observasi'] );
			$sum+=intval($key['sum'])/intval($key['count'])*10;
		}
				$data3=array('value'=>$sum/count($level2), 'name'=>'Overall Alignment');

		foreach ($level1 as $key) {
			array_push($data1, array(
				'value'=>intval($key['sum'])/intval($key['count'])*10,
				'name'=>$key['jenis']
			));
			array_push($legend,$key['jenis'] );
		}
		echo json_encode(array('status'=>true, 'id'=>$id_res, 'level1'=>$data1, 'level2'=>$data2,'level3'=>$data3, 'legend'=>$legend));
	}


	public function chart(){
		$this->load->view('engagement/chart');
	}

	public function get_all(){
		$people=$this->survey_model->all_responden();
		//get by id
		$table=array();
		foreach ($people as $key) {
			array_push($table, array(
				'<a class="btn btn-sm btn-primary" title="Edit" onclick="get_data('."'".$key['id']."'".')"><i class="glyphicon glyphicon-pencil"></i>'.$key['id'].'</a>',
				$key['fungsi_kerja'],
				$key['klasifikasi_pegawai'],
				$key['masa_kerja'],
				$key['pendidikan'],
				$key['gender'],
			));
		}

		echo json_encode(array('data'=>$table));
	}

	public function report()
	{
		$sql='SELECT DISTINCT responden_id from unswer';
		$all_responden=$this->survey_model->select($sql);

		$fungsi_kerja=$this->input->post('fungsi_kerja');
		$klasifikasi_pegawai=$this->input->post('klasifikasi_kerja');

		$head='';
		if($fungsi_kerja=='all'&& $klasifikasi_pegawai=='all') //if select all
		{
			$head='All Responden';
			$sql_level1="SELECT s.id_level1, s.jenis, sum(u.score) as 'sum', COUNT(u.score) as 'count'
		          from unswer u
		          jOIN responden r on u.responden_id=r.id
		          join questions q on u.question_id=q.id_question
		          join level2 d on q.level2_id=d.id_level
		          join level1 s on q.level1_id=s.id_level1
		          GROUP by s.id_level1";
			$sql_level2="SELECT d.id_level, d.observasi, sum(u.score) as 'sum', COUNT(u.score) as 'count'
		          from unswer u
		          jOIN responden r on u.responden_id=r.id
		          join questions q on u.question_id=q.id_question
		          join level2 d on q.level2_id=d.id_level
		          join level1 s on q.level1_id=s.id_level1
		          GROUP by d.id_level";
		}
		elseif (($fungsi_kerja!='all')&& ($klasifikasi_pegawai=='all')) //berdasarakn fungsi kerja
		{
			$head='Responden dengan fungsi kerja '.$fungsi_kerja;
			$sql_level1="SELECT s.id_level1, s.jenis, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.fungsi_kerja='$fungsi_kerja'
							GROUP by s.id_level1";
			$sql_level2="SELECT d.id_level, d.observasi, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.fungsi_kerja='$fungsi_kerja'
							GROUP by d.id_level";
		}

		elseif (($fungsi_kerja=='all') && ($klasifikasi_pegawai!='all')) //berdasarakn fungsi kerja
		{
			$head='Responden dengan Klasifikasi Pegawai '.$klasifikasi_pegawai;
			$sql_level1="SELECT s.id_level1, s.jenis, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.klasifikasi_pegawai='$klasifikasi_pegawai'
							GROUP by s.id_level1";
			$sql_level2="SELECT d.id_level, d.observasi, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.klasifikasi_pegawai='$klasifikasi_pegawai'
							GROUP by d.id_level";
		}

		elseif (($fungsi_kerja!='all') && ($klasifikasi_pegawai!='all')) //berdasarakn fungsi kerja
		{
			$head='Responden dengan fungsi kerja '.$fungsi_kerja .'dan Responden dengan fungsi kerja '.$fungsi_kerja;
			$sql_level1="SELECT s.id_level1, s.jenis, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.klasifikasi_pegawai='$klasifikasi_pegawai' and r.fungsi_kerja='$fungsi_kerja'
							GROUP by s.id_level1";
			$sql_level2="SELECT d.id_level, d.observasi, sum(u.score) as 'sum', COUNT(u.score) as 'count'
							from unswer u
							jOIN responden r on u.responden_id=r.id
							join questions q on u.question_id=q.id_question
							join level2 d on q.level2_id=d.id_level
							join level1 s on q.level1_id=s.id_level1
							where r.klasifikasi_pegawai='$klasifikasi_pegawai' and r.fungsi_kerja='$fungsi_kerja'
							GROUP by d.id_level";
		}

	 	$level1=$this->survey_model->select($sql_level1);
		// var_dump($level1);
		if(count($level1)==0 && $fungsi_kerja!='all'  && $klasifikasi_pegawai=='all'){
			echo json_encode(array('status'=>false, 'warning'=>'Data dengan Fungsi Kerja '.$fungsi_kerja.' masih belum tersedia'));
			exit;
		}elseif (count($level1)==0 && $klasifikasi_pegawai!='all' && $fungsi_kerja=='all') {
			echo json_encode(array('status'=>false, 'warning'=>'Data dengan Klasifikasi Pegawai '.$klasifikasi_pegawai.' masih belum tersedia'));
			exit;
		}
		elseif (count($level1)==0 && $klasifikasi_pegawai!='all'&& $fungsi_kerja!='all') {
			echo json_encode(array('status'=>false, 'warning'=>'Data dengan Klasifikasi Pegawai = '.$klasifikasi_pegawai.' dan  Fungsi Kerja = '.$fungsi_kerja.' masih belum tersedia'));
			exit;
		}
		$data1=array(); // paling luar
		$legend=array();
		$level2=$this->survey_model->select($sql_level2);
		$data2=array(); //tengah
		$sum=0;
		foreach ($level2 as $key) {
			array_push($data2, array(
				'value'=>intval($key['sum'])/intval($key['count']),
				'name'=>$key['observasi']
			));
			array_push($legend,$key['observasi'] );
			$sum+=intval($key['sum'])/intval($key['count']);
		}
				$data3=array('value'=>$sum/count($level2), 'name'=>'Overall Alignment');

		foreach ($level1 as $key) {
			array_push($data1, array(
				'value'=>intval($key['sum'])/intval($key['count']),
				'name'=>$key['jenis']
			));
			array_push($legend,$key['jenis'] );
		}

		$id_ques=array(67,68);
		$statistic=array();
		for ($i=0; $i < 2; $i++)
		{
			$sql_les5="SELECT u.question_id, count(u.responden_id) as 'tresponden', q.question FROM  unswer u
							join questions q on q.id_question=u.question_id
							WHERE q.id_question='$id_ques[$i]'
							and u.score<=5";
			$sql_then5="SELECT u.question_id, count(u.responden_id) as 'tresponden', q.question FROM  unswer u
							join questions q on q.id_question=u.question_id
							WHERE q.id_question='$id_ques[$i]'
							and u.score>5";
			$les5=$this->survey_model->select1($sql_les5, $id_ques[$i]);
			// print_r($les5);
			//$then5=$this->survey_model->select1($sql_than5, $id_ques[$i]);
			array_push($statistic, array(
				'value'=>$les5[0]['tresponden'],
				'name'=>'lebih kecil samadengan lima :-->'.$les5[0]['question'],
			));
			$then5=$this->survey_model->select1($sql_then5, $id_ques[$i]);
			array_push($statistic, array(
				'value'=>$then5[0]['tresponden'],
				'name'=>'lebih besar dari lima :-->'.$then5[0]['question'],
			));
		}
		echo json_encode(array('status'=>true, 'level1'=>$data1, 'level2'=>$data2,'level3'=>$data3, 'legend'=>$legend, 'stat'=>$statistic, 'head'=>$head));

	}

// SELECT u.id_unswer ,r.*, q.id_question, d.id_level, d.observasi, s.id_level1, s.jenis, q.question
// from unswer u
// JOIN responden r on u.responden_id=r.id
// Join questions q on u.question_id=q.id_question
// join level2 d on q.level2_id=d.id_level
// join level1 s on q.level1_id=s.id_level1
}
