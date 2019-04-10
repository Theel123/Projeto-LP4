
//VALIDAR FORMULARIO AUTOR
//VALIDAR EDICAO AUTOR
//VALIDAR FORMULARIO EDITORA
//VALIDAR FORMULARIO CLIENTE
//VALIDAR FORMULARIO FUNCIONARIO
//VALIDAR FORMULARIO LIVRO
//VALIDAR LOGIN
//VALIDACOES NO GERAL
//JOGO DAS BOLINHAS


/*COMEÇO DAS VALIDAÇÕES*/





//VALIDAR FORMULARIO AUTOR


function valida_form_editar_autores (){

var nome_autor = formulario_editar_autor.nome_autor.value;
var sobrenome_autor = formulario_editar_autor.sobrenome_autor.value;

if (nome_autor == "") {

    alert('Preencha o campo o nome do autor');
    formulario_editar_autor.nome_autor.focus();
    return false;

    } else if (sobrenome_autor == "") {

            alert('Preencha o campo com o sobrenome do autor');
            formulario_editar_autor.sobrenome_autor.focus();
            return false;
    } else {
        alert('Edição do Autor Realizada com sucesso');
    }

}

function valida_form_autores (){

var nome_autor = formulario_autor.nome_autor.value;
var sobrenome_autor = formulario_autor.sobrenome_autor.value;

if (nome_autor == "") {

    alert('Preencha o campo o nome do autor');
    formulario_autor.nome_autor.focus();
    return false;

    } else if (sobrenome_autor == "") {

            alert('Preencha o campo com o sobrenome do autor');
            formulario_autor.sobrenome_autor.focus();
            return false;
    } else {
        alert('Cadastro do Autor Realizado com sucesso');
    }

}



//VALIDAR FORMULARIO EDITORA

function valida_form_editoras (){

var nome_editora = formulario_editora.nome_editora.value;
var cnpj = formulario_editora.cnpj_editora.value;

if (nome_editora == "") {

    alert('Preencha o campo com o nome da editora');
    formulario_editora.nome_editora.focus();
    return false;

    } else if (cnpj == "") {

            alert('Preencha o campo com seu CNPJ');
            formulario_editora.cnpj_editora.focus();
            return false;
    }
    else {

    }
        alert('Cadastro da Editora Realizado com Sucesso');

}

//VALIDAR FORMULARIO LIVRO

 function valida_form_livro () {


    var nome_editora  = formulario_livro.editoras.value;
    var ano = formulario_livro.ano.value;
    var idioma  = formulario_livro.idioma.value;
    var paginas = formulario_livro.paginas.value;
    var titulo = formulario_livro.titulo.value;


if (nome_editora == "") {

    alert('Preencha o campo com o nome da Editora');
    formulario_livro.nome_editora.focus();
    return false;

    } else if (ano == "") {

            alert('Preencha o campo com o ano do livro');
            formulario_livro.ano.focus();
            return false;
    }

    else if (idioma == "") {

            alert('Preencha o campo com o idioma do livro');
            formulario_livro.idioma.focus();
            return false;
    }


else if (paginas == "") {

            alert('Preencha o campo com a quantidade de paginas');
            formulario_livro.paginas.focus();
            return false;
    }


else if (titulo == "") {

            alert('Preencha o campo com o titulo do livro');
            formulario_livro.titulo.focus();
            return false;
    } else {

        alert('Cadastro do Livro Realizado com Sucesso');
    }


 }


//VALIDAR FORMULARIO CLIENTE

 function valida_form_cliente () {

    var nome_cliente  = formulario_cliente.nome_cliente.value;
    var rg = formulario_cliente.rg.value;
    var cpf  = formulario_cliente.cpf.value;
    var email = formulario_cliente.email.value;
    var telefone = formulario_cliente.telefone.value;
    var celular = formulario_cliente.celular.value;
    var telefone = formulario_cliente.telefone.value;
    var masculino = formulario_cliente.masculino.value;
    var feminino = formulario_cliente.feminino.value;
    var numero = formulario_cliente.numero.value;
    var complemento = formulario_cliente.complemento.value;
    var senha = formulario_cliente.numero.value;
    var confirmaSenha = formulario_cliente.confirmaSenha.value;

if (nome_cliente == "") {

    alert('Preencha o campo com o nome do Cliente');
    formulario_cliente.nome_cliente.focus();
    return false;

    } else if (rg == "") {

            alert('Preencha o campo com o RG do Cliente');
            formulario_cliente.rg.focus();
            return false;
    }

    else if (cpf == "") {

            alert('Preencha o campo com o CPF do Cliente');
            formulario_cliente.cpf.focus();
            return false;
    }


else if (email == "") {

            alert('Preencha o campo com o Email do Cliente');
            formulario_cliente.email.focus();
            return false;
    }


else if (telefone == "") {

            alert('Preencha o campo com o telefone do Cliente');
            formulario_cliente.telefone.focus();
            return false;
    }

    else if (celular == "") {

            alert('Preencha o campo com o telefone do Cliente');
            formulario_cliente.celular.focus();
            return false;
    }
    else if (masculino == "" && feminino =="") {

            alert('Preencha o campo com o sexo do Cliente');
            formulario_cliente.masculino.focus();
            return false;
    }
    else if (numero == "") {

            alert('Preencha o campo com o numero da residencia do Cliente');
            formulario_cliente.numero.focus();
            return false;
    }

     else if (complemento == "") {

            alert('Preencha o campo com o complemento da residencia do Cliente');
            formulario_cliente.complemento.focus();
            return false;
    }
     else if (senha = confirmaSenha ) {

            alert('Cadastro Realizado com Sucesso!!!');
            formulario_cliente.senha.focus();
            return true;
    } else {

        alert('senha invalida');
        return false;
    } 

 }


//VALIDAR FORMULARIO FUNCIONARIO

 function valida_form_funcionario () {

    var nome_cliente  = formulario_cliente.nome_cliente.value;
    var rg = formulario_cliente.rg.value;
    var cpf  = formulario_cliente.cpf.value;
    var email = formulario_cliente.email.value;
    var telefone = formulario_cliente.telefone.value;
    var celular = formulario_cliente.celular.value;
    var telefone = formulario_cliente.telefone.value;
    var masculino = formulario_cliente.masculino.value;
    var feminino = formulario_cliente.feminino.value;
    var numero = formulario_cliente.numero.value;
    var complemento = formulario_cliente.complemento.value;
    var senha = formulario_cliente.numero.value;
    var confirmaSenha = formulario_cliente.confirmaSenha.value;

if (nome_cliente == "") {

    alert('Preencha o campo com o nome do Cliente');
    formulario_cliente.nome_cliente.focus();
    return false;

    } else if (rg == "") {

            alert('Preencha o campo com o RG do Cliente');
            formulario_cliente.rg.focus();
            return false;
    }

    else if (cpf == "") {

            alert('Preencha o campo com o CPF do Cliente');
            formulario_cliente.cpf.focus();
            return false;
    }


else if (email == "") {

            alert('Preencha o campo com o Email do Cliente');
            formulario_cliente.email.focus();
            return false;
    }


else if (telefone == "") {

            alert('Preencha o campo com o telefone do Cliente');
            formulario_cliente.telefone.focus();
            return false;
    }

    else if (celular == "") {

            alert('Preencha o campo com o telefone do Cliente');
            formulario_cliente.celular.focus();
            return false;
    }
    else if (masculino == "" && feminino =="") {

            alert('Preencha o campo com o sexo do Cliente');
            formulario_cliente.masculino.focus();
            return false;
    }
    else if (numero == "") {

            alert('Preencha o campo com o numero da residencia do Cliente');
            formulario_cliente.numero.focus();
            return false;
    }

     else if (complemento == "") {

            alert('Preencha o campo com o complemento da residencia do Cliente');
            formulario_cliente.complemento.focus();
            return false;
    }
     else if (senha == confirmaSenha ) {

            alert('Cadastro Realizado com Sucesso!!!');
            formulario_cliente.senha.focus();
            return true;
    } 

     else if (senha != confirmaSenha ) {

            alert('Senhas Inconpativeis');
            formulario_cliente.senha.focus();
            return false;
    } 
    

 }

