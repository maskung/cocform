<?php
class Age extends CI_Model {
	
	
	function __construct(){
		parent::__construct();
	}
	function female(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function female10(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >=',10);
		$this->db->where('age <=',18);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male10(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >=',10);
		$this->db->where('age <=',18);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite10(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >=',10);
		$this->db->where('age <=',18);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom10(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >=',10);
		$this->db->where('age <=',18);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function female19(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >=',19);
		$this->db->where('age <=',25);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male19(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >=',19);
		$this->db->where('age <=',25);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite19(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >=',19);
		$this->db->where('age <=',25);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom19(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >=',19);
		$this->db->where('age <=',25);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}

	function female26(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >=',26);
		$this->db->where('age <=',30);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male26(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >=',26);
		$this->db->where('age <=',30);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite26(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >=',26);
		$this->db->where('age <=',30);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom26(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >=',26);
		$this->db->where('age <=',30);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}

	function female31(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >=',31);
		$this->db->where('age <=',35);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male31(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >=',31);
		$this->db->where('age <=',35);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite31(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >=',31);
		$this->db->where('age <=',35);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom31(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >=',31);
		$this->db->where('age <=',35);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}

	function female36(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >=',36);
		$this->db->where('age <=',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male36(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >=',36);
		$this->db->where('age <=',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite36(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >=',36);
		$this->db->where('age <=',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom36(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >=',36);
		$this->db->where('age <=',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}

	function female40(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','f');
		$this->db->where('age >',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function male40(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','m');
		$this->db->where('age >',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function hermaphrodite40(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','h');
		$this->db->where('age >',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
	function tom40(){

        $this->db->select('count(sex) as rows');
        $this->db->from('influencer');
        $this->db->where('sex','t');
		$this->db->where('age >',40);
        $query = $this->db->get();

        foreach($query->result() as $r) {
               return $r->rows;
        }
	}
}
