<?php
    function resultadoPartida(string $jugador, string $maquina, string $namePlayer1): string {
        if($jugador === $maquina) {
            return "Empate. La elección de " . $namePlayer1 . " es " . $jugador . " y la máquina eligió: " . $maquina;
        } elseif (
            ($jugador === 'piedra' && $maquina === 'tijera') ||
            ($jugador === 'papel'  && $maquina === 'piedra') ||
            ($jugador === 'tijera' && $maquina === 'papel')
        ) {
            return "¡Has ganado, " . $namePlayer1 . "! Elegiste " . $jugador . " y la máquina eligió: " . $maquina;
        } else {
            return "¡Has perdido, " . $namePlayer1 . "! Elegiste " . $jugador . " y la máquina eligió: " . $maquina;
        }
    }
?>