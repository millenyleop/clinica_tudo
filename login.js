const express = require('express');
const app = express();
const port = 8029; // Porta em que o servidor será executado

app.use(express.static('.'));
// Rota para exibir a página index.html
app.get('/', (req, res) => {
res.sendFile(__dirname + '/tela_inicial.html');
});
// Rota para exibir a página outra_pagina.html

app.get('/', (req,res) => {
//res.sendFile(_dirname + '/cadastro.php');
console.log('/cadastro.php');
});

app.get('/', (req,res) => {
res.sendFile(_dirname + '/conexao.php');
console.log('/conexao.php');
});

app.get('/', (req,res) => {
res.sendFile(_dirname + '/index.php');
console.log('/index.php');
});

app.get('/', (req,res) => {
res.sendFile(_dirname + '/logout.php');
console.log('/logout.php');
});

app.get('/', (req,res) => {
res.sendFile(_dirname + '/painel.php');
console.log('/painel.php');
});

app.get('/', (req,res) => {
res.sendFile(_dirname + '/protect.php');
console.log('/project.php');
});

app.get('/Tela-inicial', (req, res) => {
res.sendFile(__dirname + '/login.html');
console.log('/login.html');
});

app.get('/agendamentos', (req,res) => {
res.sendFile(_dirname + '/agendamentos.html');
console.log('/agendamentos.html');
});

app.get('/pagina_medico', (req,res) => {
res.sendFile(_dirname + '/pagina_medico.html');
console.log('/pagina_medico.html');
});

app.get('/pagina_paciente', (req, res) => {
res.sendFile(__dirname + '/pagina_paciente.html');
console.log('/pagina_paciente.html');
});

app.get('/prontuarios', (req, res) => {
res.sendFile(__dirname + '/prontuarios.html');
console.log('/prontuarios.html');
});

app.get('/localizacao', (req, res) => {
res.sendFile(__dirname + '/localizacao.html');
console.log('/localizacao.html');
});

app.get('/contato', (req, res) => {
res.sendFile(__dirname + '/contato.html');
console.log('/contato.html');
});

app.get('/ver_consultas.html', (req, res) => {
res.sendFile(__dirname + '/ver_consultas.html');
console.log('/ver_consultas.html');
});

app.get('/medico_paciente.html', (req, res) => {
res.sendFile(__dirname + '/medico_paciente.html');
console.log('/medico_paciente.html');
});
// Iniciar o servidor
app.listen(port, () => {
console.log(`Servidor Express está rodando na porta ${port}`);
});

app.get('/', (req, res) => {
res.sendFile(__dirname + '/index.html');
console.log('/index.html');
});

