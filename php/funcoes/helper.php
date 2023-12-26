<?php

require_once("base_dados.php");


function getHome(){
    return selectSQLUnico("SELECT * FROM home");
}

function getTodosCarousel(){
    return selectSQL("SELECT * FROM carousel");
}

function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id=$id");
}

function getTodosLivros(){
    return selectSQL("SELECT id, titulo FROM livros");
}

function getAutor(){
    return selectSQLUnico("SELECT * FROM autor");
}

function getImprensa(){
    return selectSQLUnico("SELECT * FROM imprensa ORDER BY id DESC");
}

function getContactos(){
    return selectSQLUnico("SELECT * FROM contactos");
}

function getRedes(){
    return selectSQLUnico("SELECT * FROM redessociais");
}

function getLegal(){
    return selectSQLUnico("SELECT * FROM legal");
}

?>