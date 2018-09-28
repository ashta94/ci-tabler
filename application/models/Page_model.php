<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Page_model extends CI_Model {

    function getData($t, $o = false){
      if($o == false){
        return $this->db->query("select * from $t");
      }else {
        return $this->db->query("select * from $t order by $o");
      }
    }

    // ex: $this->mod->getData('nama_tabel','id desc')->result_array();

    function getWhere($t, $w, $o = false){
      if($o == false){
        return $this->db->get_where($t, $w);
      }else{
        $exp = explode(' ',$o);
        return $this->db->order_by($exp[0], $exp[1])->get_where($t, $w);
      }
    }

    // ex: $this->mod->getWhere('nama_tabel','status = 1','id desc')->result_array();

    function getField($f, $w, $v, $t){
      return $this->db->select($f)->where($w, $v)->get($t);
    }

    // ex: $this->mod->getField('nama_tabel','status','1','nama_user')->row_array();

    function updateData($t, $w, $v, $d){
      $this->db->where($w, $v);
   	  $this->db->update($t, $d);
  	}

    // ex: $this->mod->updateData('nama_tabel','status','1',$data);

    function deleteData($t, $w = false, $v = false){
      if($w == false || $v == false){
        $this->db->empty_table($t);
      }else{
        $this->db->where($w, $v);
        $this->db->delete($t);
      }
  	}

    // ex: $this->mod->deleteData('nama_tabel','id','1');

    function multipleDelete($table, $arrayCondition){
  		$this->db->where($arrayCondition);
  	  $this ->db->delete($table);
  	}

    // $t = table, $l = banyaknya data, $s = dimulai dari, $c = kondisi, $o = orderby
    function getLimit($t, $l, $s, $c = false, $o = false){
      if($c == false && $o == false){
        return $this->db->get($t, $l, $s);
      }
    }

    // ex: $this->mod->getLimit('nama_tabel','10','0','status = 1','id desc')->result_array();

    function getJoin($t1, $t2, $f, $o = false){
      if($o == false){
        return $this->db->query("select * from $t1 join $t2 using($f)");
      }else{
        return $this->db->query("select * from $t1 join $t2 using($f) order by $o");
      }
    }

    function getJoinWhere($tb1, $tb2, $j, $c = false){
      $this->db->select('*');
      if($c == false){
        $this->db->from($tb1);
        return $this->db->join($tb2, $tb1.'.'.$j.' = '.$tb2.'.'.$j)->get();
      }else{
        $this->db->from($tb1);
        $this->db->join($tb2, $tb1.'.'.$j.' = '.$tb2.'.'.$j);
        return $this->db->where($tb1.'.'.$j, $c)->get();
      }
    }

    // ex: $this->mod->getJoinWhere('nama_tabel_1','nama_tabel_2','id','1')->row_array();

    function get_join_Where($tb1, $tb2, $j, $c = false){
      $this->db->select('*');
      if($c == false){
        $this->db->from($tb1);
        return $this->db->join($tb2, $tb1.'.'.$j.' = '.$tb2.'.'.$j)->get();
      }else{
        $this->db->from($tb1);
        $this->db->join($tb2, $tb1.'.'.$j.' = '.$tb2.'.'.$j);
        return $this->db->where($tb1.'.'.$j, $c)->get();
      }
    }

}
