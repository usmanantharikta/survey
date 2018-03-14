<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

  public function question(){
    $query=$this->db->query('SELECT q.id_question, o.id_level1, o.jenis, q.question FROM questions q join level1 o on o.id_level1=q.level1_id where q.question!=0');
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else{
      return "0";
    }
  }

  public function get_level1($id_responden){
    $sql="SELECT s.id_level1, s.jenis, sum(u.score) as 'sum', COUNT(u.score) as 'count'
          from unswer u
          jOIN responden r on u.responden_id=r.id
          join questions q on u.question_id=q.id_question
          join level2 d on q.level2_id=d.id_level
          join level1 s on q.level1_id=s.id_level1
          where u.responden_id=$id_responden
          GROUP by s.id_level1";
    $query=$this->db->query($sql);
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else {
      return 0;
    }
  }

  public function get_level2($id_responden){
    $sql="SELECT d.id_level, d.observasi, sum(u.score) as 'sum', COUNT(u.score) as 'count'
          from unswer u
          jOIN responden r on u.responden_id=r.id
          join questions q on u.question_id=q.id_question
          join level2 d on q.level2_id=d.id_level
          join level1 s on q.level1_id=s.id_level1
          where u.responden_id=$id_responden
          GROUP by d.id_level";
    $query=$this->db->query($sql);
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else {
      return 0;
    }
  }

  public function all_responden(){
    $sql="SELECT * FROM responden";
    $query=$this->db->query($sql);
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else {
      return 0;
    }
  }

  public function select($sql){
    $query=$this->db->query($sql);
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else {
      return 0;
    }
  }

  public function select1($sql, $no){
    $query=$this->db->query($sql);
    $result=$query->result_array();
    if(isset($result)){
      return $result;
    }else {
      return array(array('question_id' => 67, 'tresponden' => 0, 'question'=>$this->get_question($no)));
    }
  }

  private function get_question($no){
    $sql="SELECT 'id_question', 'question' FROM 'questions' WHERE id_question=$no";
    $query=$this->db->query($sql);
    $result=$query->result_array();
    return $result[0]['question'];
  }
}
