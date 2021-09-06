<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_pokemon extends CI_Controller {

	public function index()
	{
        $url="https://pokeapi.co/api/v2/pokemon";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);

        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('pokemon/list_pokemon',$data_array);
	}

    public function data($url)
    {
        $url="https://pokeapi.co/api/v2/pokemon/".$url;
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);

        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('pokemon/list_pokemon_detail',$data_array);
    }

    public function my_pokemon_list()
    {
        $this->load->view('pokemon/my_pokemon_list');
    }
}
