<?php
// Configura o fuso horário para GMT-3 (America/Sao_Paulo)
date_default_timezone_set('America/Sao_Paulo');

// Obter a hora inicial em formato 'd/m/Y H:i:s'
$hora_inicial = date('d/m/Y H:i:s');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-Vindo!</title>
    <script>
        // Função para atualizar a hora a cada segundo
        function atualizarHora() {
            // Cria um objeto Date para pegar a hora atual
            var agora = new Date();
            
            // Ajusta a hora para o formato desejado: d/m/Y H:i:s
            var dia = String(agora.getDate()).padStart(2, '0');
            var mes = String(agora.getMonth() + 1).padStart(2, '0'); // Meses começam do 0, então somamos 1
            var ano = agora.getFullYear();
            var hora = String(agora.getHours()).padStart(2, '0');
            var minuto = String(agora.getMinutes()).padStart(2, '0');
            var segundo = String(agora.getSeconds()).padStart(2, '0');
            
            // Monta a data e hora no formato desejado
            var dataHoraAtual = dia + '/' + mes + '/' + ano + ' ' + hora + ':' + minuto + ':' + segundo;
            
            // Atualiza o conteúdo da página com a hora atualizada
            document.getElementById('hora').innerHTML = dataHoraAtual;
        }
        
        // Chama a função de atualizar hora a cada 1000 milissegundos (1 segundo)
        setInterval(atualizarHora, 1000);
    </script>
</head>
<body>
    <h1>Olá, Mundo!</h1>
    <p>A data e hora atual é: <span id="hora"><?php echo $hora_inicial; ?></span></p>
</body>
</html>
