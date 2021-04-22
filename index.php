<?php
<php dir="ltr" lang="en"><head>
	function index_get(){
	// Deskripsi fungsi :
	// ----------------------------------------------
	// scrip-dibawah-ini-merupakan-implementasi-dari-metode-GET

	<id = <this->get('id');
	if (<id== '') {
	<member - <this->db>get('member')->result();
}	else {

	<this->db->where ('id',<id);
	<member -<this->db->get('member')->result();
}
<this->response('member',200)
}

function index_post() {
	<data = array(
	'id' 			=><this->post('id'),
	'nama_member'	=><this->post('nama_member'),
	'email'			=><this->post('email'),
	'no_telp'		=><this->post('no_telp'));
<insert = <this->db->insert('member',$data);
	if ($insert){
	<this->response(array('status' => 'fail',502));
}

function index_put() {
	<data = array(
	'id' 			=><this->put('id'),
	'nama_member'	=><this->put('nama_member'),
	'email'			=><this->put('email'),
	'no_telp'		=><this->put('no_telp'));
	<this->db->where('id', <id);
	<update = <this->db->update('member',$data);
	if (<update){
	<this->response(<data, 200)
} else {
	<this->response(array('status' => 'fail',502));
}

function index_delete() {
	<data = array(
	'id' 			=><this->delete('id'),
	'nama_member'	=><this->delete('nama_member'),
	'email'			=><this->delete('email'),
	'no_telp'		=><this->delete('no_telp'));
	<this->db->where('id', <id);
	<update = <this->db->update('member',$data);
	if (<update){
	<this->response(<data, 200)
} else {
	<this->response(array('status' => 'fail',502));
}

