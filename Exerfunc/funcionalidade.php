<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Sistema de Gestão Escolar</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI, Arial, sans-serif;
}

body{
background:#0f0f0f;
color:#eaeaea;
padding:40px;
}

.container{
max-width:1000px;
margin:auto;
background:#1a1a1a;
padding:40px;
border-radius:12px;
box-shadow:0 15px 40px rgba(0,0,0,0.6);
}

h1{
text-align:center;
margin-bottom:40px;
font-size:34px;
letter-spacing:1px;
color:#ffffff;
border-bottom:2px solid #333;
padding-bottom:15px;
}

h2{
margin-top:35px;
margin-bottom:15px;
font-size:20px;
color:#ffffff;
}

.card{
background:#242424;
padding:15px;
margin:10px 0;
border-radius:8px;
border:1px solid #333;
transition:0.25s;
}

.card:hover{
background:#2d2d2d;
transform:translateY(-2px);
border-color:#555;
}

ul{
list-style:none;
margin-top:10px;
}

ul li{
background:#2a2a2a;
padding:10px;
margin:6px 0;
border-radius:6px;
border:1px solid #333;
}

hr{
border:none;
height:1px;
background:#333;
margin:30px 0;
}

footer{
text-align:center;
margin-top:40px;
font-size:14px;
color:#888;
}

.tag{
display:inline-block;
background:#ffffff;
color:#000;
padding:4px 8px;
border-radius:4px;
font-size:12px;
margin-bottom:8px;
}

</style>
</head>

<body>

<div class="container">

<?php

function exibirCabecalho(){
echo "<h1>Sistema de Gestão Escolar</h1>";
}

exibirCabecalho();


// NÍVEL 1

echo "<h2><span class='tag'>NÍVEL 1</span> Sem Retorno / Sem Parâmetro</h2>";

function exibirLog(){
echo "<div class='card'>Log: O sistema iniciou em ".date('d/m/Y')."</div>";
}

exibirLog();

function divisor(){
echo "<hr>";
}

function exibirCopyright(){
echo "<div class='card'>© 2024 - Desenvolvido por Seu Nome</div>";
}

exibirCopyright();

divisor();


// NÍVEL 2

echo "<h2><span class='tag'>NÍVEL 2</span> Com Parâmetros</h2>";

function saudacaoUsuario($nome){
echo "<div class='card'>Olá, <b>$nome</b>, seja bem-vindo ao painel.</div>";
}

saudacaoUsuario("Carlos");

function areaTriangulo($base,$altura){
$area=($base*$altura)/2;
echo "<div class='card'>Área do triângulo: $area</div>";
}

areaTriangulo(10,5);

function formatarMoeda($valor){
echo "<div class='card'>Valor: R$ ".number_format($valor,2,",",".")."</div>";
}

formatarMoeda(1500);

function listaCompras($itens){

echo "<div class='card'><b>Lista de Compras</b>";

echo "<ul>";

foreach($itens as $item){
echo "<li>$item</li>";
}

echo "</ul></div>";

}

$compras=["Arroz","Feijão","Leite","Pão"];

listaCompras($compras);

divisor();


// NÍVEL 3

echo "<h2><span class='tag'>NÍVEL 3</span> Com Retorno</h2>";

function versaoSistema(){
return "v1.0.2";
}

echo "<div class='card'>Versão do Sistema: ".versaoSistema()."</div>";

function gerarCupom(){
return rand(1000,9999);
}

echo "<div class='card'>Cupom promocional: ".gerarCupom()."</div>";

function statusBanco(){
$conexao=true;
return $conexao;
}

if(statusBanco()){
echo "<div class='card'>Banco de dados: Conectado</div>";
}
else{
echo "<div class='card'>Banco de dados: Erro</div>";
}

function fusoServidor(){
return date_default_timezone_get();
}

echo "<div class='card'>Fuso horário do servidor: ".fusoServidor()."</div>";

divisor();


// NÍVEL 4

echo "<h2><span class='tag'>NÍVEL 4</span> Retorno + Parâmetros</h2>";

function calcularIdade($ano){
return date("Y")-$ano;
}

$idade=calcularIdade(2000);

echo "<div class='card'>Você tem $idade anos</div>";

function calcularDesconto($preco,$desc){
return $preco-($preco*$desc/100);
}

$valor=calcularDesconto(200,15);

echo "<div class='card'>Preço com desconto: R$ ".number_format($valor,2,",",".")."</div>";

function validarEmail($email){
return str_contains($email,"@");
}

if(validarEmail("teste@email.com")){
echo "<div class='card'>Email válido</div>";
}
else{
echo "<div class='card'>Email inválido</div>";
}

function celsiusParaFahrenheit($c){
return ($c*9/5)+32;
}

$temp=celsiusParaFahrenheit(30);

echo "<div class='card'>Temperatura: $temp °F</div>";

?>

<footer>
Sistema de exemplo para estudo de funções em PHP
</footer>

</div>

</body>
</html>