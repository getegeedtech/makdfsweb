<?php
class userModel extends CI_model {
    public function select_Coins(){
        if($data = $this->db->query("select * from coins order by market_cap_rank limit 15")){
            return $data->result();
        }else{return false;}
    }

    public function select_Featured($data){
        if($data = $this->db->query("select * from products where is_featured=? and project=? ORDER BY RAND() limit ?",$data)){
            return $data->result();
        }else{return false;}
    }

    public function select_Product($data){
        if($q=$this->db->query("select * from products where ax_class=? and project=?",$data)){
            return $q->row();
        }else{return false;}
    }

    public function select_related_product($data){
        $this->db->select('*')->from('products')->like('categories', $data[0])-> where('project', $data[1])->limit(8)->order_by('rand()');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
        else{return false;}
    }

    public function select_Order($data){
        if($q=$this->db->query("select * from booking where project=? and userid=?",$data)){
            return $q->result();
        }else{return false;}
    }
    
    public function select_category($data){
        if($data[0]=="men health"){
            $this->db->select('*')->from('products')->where('categories', $data[0])-> where('project', $data[1]);
        }
        else{
            $this->db->select('*')->from('products')->like('categories', $data[0])-> where('project', $data[1]);
        }
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
        else{return false;}
    }
    
    public function all_category($data){
        if($data = $this->db->query("select * from products where project=? ORDER BY id desc",$data)){
            return $data->result();
        }else{return false;}
    }

    public function select_category_content($data){
        if($q=$this->db->query("select * from category where slug=? and project=?",$data)){
            return $q->row();
        }else{return false;}
    }

    public function select_all_blog($data){
        if($data = $this->db->query("select * from blog where project=? and status='Active' ORDER BY id desc",$data)){
            return $data->result();
        }else{return false;}
    }

    public function select_rand_blog($data){
        if($data = $this->db->query("select * from blog where project=? and status='Active' ORDER BY RAND() limit ?",$data)){
            return $data->result();
        }else{return false;}
    }

    public function select_blog($data){
        if($q=$this->db->query("select * from blog where url=? and project=?",$data)){
            return $q->row();
        }else{return false;}
    }

    public function login($data){
        if($q=$this->db->query("select * from members where (contact=? or email=?) and password=? and project=?",$data)){
            return $q->row();
        }else{return false;}
    }
    
    public function signup($data){
        if($d=$this->db->query("select * from members where (contact=? or email=?) and project=?",[$data['contact'],$data['email'],$data['project']])){
            $userdata = $d->result();
            if(empty($userdata)){
                $this->db->insert('members',$data);
                return $this->login([$data['email'],$data['email'],$data['password'],$data['project']]);
            }
            else{
                return array('name'  =>"Allready");
            }
        }
    }
    
    public function search($data){
        $this->db->select('*')->from('products')->like('categories', $data[0])->or_like('name', $data[0])-> where('project', $data[1]);
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
        else{return false;}
    }
    
    public function cuntry($data){
        if($q=$this->db->query("select * from countries where pid=?",$data)){
            return $q->result();
        }else{return false;}
    }
    public function booking($data){
        return $this->db->insert_batch('booking',$data);
    }
    public function address($data){
        $this->db->insert('address',$data);
        return $this->db->insert_id();
    }

    public function update_user($data){
        return $this->db->where('id', $data['id'])->update('members',$data);
    }

    public function rating($data){
        $this->db->insert('rating',$data);
        return '{"name":"Success"}';
    }
    public function selectRating($data){
        if($q=$this->db->query("select * from rating where pid=? and project=?",$data)){
            return $q->result();
        }else{return false;}
    }

    public function selectproduct(){
        if($q=$this->db->query("select * from products where (categories like '%erectile dysfunction%' or categories like '%asthma medicine%' or categories like '%diabetes medicine%' or categories like '%antiviral medicine%' or categories like '%pain relief%' or categories like '%antibiotic medicine%' or categories like '%hcg%' or categories like '%eyecare medicine%' or categories like '%other medicine%') and project=3")){
            return $q->result();
        }else{return false;}
    }
    public function update_product($data){
        $this->db->insert('products',$data);
        //$this->db->query("update products set pills=? where project=2 and ax_class=?",[$shrt,$axcls]);
        //$this->db->query("update products set pills=? where project=3 and ax_class=?",[$shrt,$axcls]);
    }
}
?>