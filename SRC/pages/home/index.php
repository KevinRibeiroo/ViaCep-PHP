<?php

include_once ('via-cep.php');
$address = getAddress();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css" />
    <title>ViaCep</title>

 
</head>
<body>
    <div class="container">
        <div class="faixa-1">
            <div class="text">
            <div class="title-faixa-1">
                ViaCep
            </div>
            <div class="subTitle-faixa-1">
                Consulte CEPs de todo o Brasil
            </div>
          </div>
        </div>
        <div class="faixa-2">
            <div class="data-cep">
                <div class="title-data-cep">
                    Informações
                </div>
                <div class="inputs-data-cep">
                    <div class="input-data-cep">
                        <div class="label" style="margin-bottom: 1em;">Cep:</div>
                        
                        <form action="." method="post" class="forms-post">
                    <input type="text" class="cep" name='cep' value="<?php echo $address->cep ?>" />
                    <input type='submit' class="cep"/>
                    </form>
                    </div>
                
                    <div class="input-data-cep">
                        <div class="label">Rua:</div>
                            <input class="Rua" value="<?php echo $address->logradouro ?>"/>
                    </div>
                    <div class="input-data-cep">
                        <div class="label">Bairro:</div>
                            <input class="Bairro" value="<?php echo $address->bairro ?>"/>
                    </div>
                    <div class="input-data-cep">
                        <div class="label">Cidade:</div>
                            <input class="Cidade" value="<?php echo $address->localidade ?>" />
                    </div>
                    <div class="input-data-cep">
                        <div class="label">Estado:</div>
                            <input class="Estado" value="<?php echo $address->uf ?>" />
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>




// the script ends here with no PHP closing tag