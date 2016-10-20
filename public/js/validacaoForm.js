// VALIDAÇÃO COM PLUGIN JQUERY VALIDATE
$("#formCadastro").validate({
  debug: true,
  rules:{
      nome:{
        "remote":{
          url: '../funcoes/validaNome.php',
          type: "post",
          data:{
            nome: function(){
              return $('#formCadastro :input[name="nome"]').val();
            }
          }
        }
      },
      razaoSocial:{
        "remote":{
          url: '../funcoes/validaRazaoSocial.php',
          type: "post",
          data:{
            nome: function(){
              return $('#formCadastro :input[name="razaoSocial"]').val();
            }
          }
        }
      },
      email:{
        "remote":{
          url: '../funcoes/validaEmail.php',
          type: "post",
          data:{
            nome: function(){
              return $('#formCadastro :input[name="razaoSocial"]').val();
            }
          }
        }
      }
  },
  messages:{
      nome:{
        required: "Preenchimento obrigatório",
        remote: jQuery.validator.format("{0} já existe.")
      },
      razaoSocial:{
        required: "Preenchimento obrigatório",
        remote: jQuery.validator.format("{0} já existe.")
      },
      email:{
        required: "Preenchimento obrigatório",
        remote: jQuery.validator.format("{0} já existe.")
      }
  }
});