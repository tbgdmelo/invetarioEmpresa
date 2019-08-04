<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<?php
require_once ('functions.php');
createPlan();
?>

<?php
date_default_timezone_set('America/Manaus');

    $dataPlan = '';
    $dataPlan .= '<table border = "1">';
    $dataPlan .= '<tr>';
    $dataPlan .= '<td colspan="12" align="center">Inventário do Imobilizado</td>';
    $dataPlan .= '<td colspan="3" align="center">Emitido em: ' . date("d/m/Y \à\s H:i:s") . '</td>';
    $dataPlan .= '</tr>';

    $dataPlan .= '<tr>';

    $dataPlan .= '<td bgcolor="#daa520" align="center">Nome do Ativo</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Classe do Ativo</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Descrição/Modelo</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Nº de Série</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Nº AF</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Comodato</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Local</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Localização Física</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Nome do Usuário</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Fornecedor</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Nota Fiscal</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Data Aquisição</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Custo de Aquisição</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Vida Util Estimada</td>';
    $dataPlan .= '<td bgcolor="#daa520" align="center">Comentário</td>';

    $dataPlan .= '</tr>';
    if($linhas) {
        foreach ($linhas as $linha):
            $dataPlan .= '<tr>';
            $dataPlan .= '<td align="center">' . $linha['nome_eqp'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['classe'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['modelo'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['serial_eqp'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['n_etiqueta'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nome_comodato'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nome_filial'] ." - ". $linha['cidade_filial'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nome_setor'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nome_funcionario'] . ' ' . $linha['sobrenome_funcionario'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nome_fornecedor'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['nota_fiscal'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['data_aquisicao'] . '</td>';
            $dataPlan .= '<td align="center">' . 'R$ ' . $linha['custo'] . '</td>';
            $dataPlan .= '<td align="center">' . $linha['vida'] . ' Meses' . '</td>';
            $dataPlan .= '<td align="center">' . $linha['comentario'] . '</td>';
            $dataPlan .= '</tr>';
        endforeach;
    }


    $arquivo = 'Levantamento do Imobilizado' . date("m/Y") . '.xls';


    header('Content-Type: application/x-msexcel');
    header('Cache-Control: no-cache, must-revalidate');
    header("Content-Disposition: attachment;filename=\"{$arquivo}\"");
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');

    echo $dataPlan;
    exit;
?>
</html>
