<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use DB; // para usar a classe DB

class PessoaController extends Controller
{
  // Listando pessoas
  public function lista(){
  return DB::select('select * from tb_pessoa');
}

// Cadastrar pessoas
	public function novo(Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

		$res = DB::insert('insert into tb_pessoa (nome, email, data_nasc, telefone, sexo, cep, nome_pai, nome_mae, data_modificacao) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$data['nome'], $data['email'], $data['data_nasc'], $data['telefone'], $data['sexo'], $data['cep'], $data['nome_pai'], $data['nome_mae'], $data['data_modificacao']]); // Insert

		return ["status" => ($res)?'ok':'erro'];
	}

  // Editar pessoas
  	public function editar(Request $request){
  		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

      if($data["id"] == null || $data["id"] == '') {
        return ['id invalido'];
      }
  		$res = DB::update("update tb_pessoa set nome = ?,email = ?, data_nasc = ?, telefone = ?,
      sexo = ?, cep = ?, nome_pai = ?, nome_mae = ?, data_modificacao = ? WHERE id = ?", [$data['nome'], $data['email'], $data['data_nasc'], $data['telefone'], $data['sexo'], $data['cep'], $data['nome_pai'], $data['nome_mae'], $data['data_modificacao'], $data['id']]); // Update

  		return ["status" => ($res)?'ok':'erro'];
  	}

    // Excluir pessoas
  	public function excluir($id){
  		$res = DB::delete("delete from tb_pessoa WHERE id = ?", [$id]); //Excluir

  		return ["status" => ($res)?'ok':'erro'];
  	}
}
