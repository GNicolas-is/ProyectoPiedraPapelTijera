# ProyectoPiedraPapelTijera
Juego de piedra, papel o tijera contra la máquina en PHP

# 🪨📄✂️ Juego de Piedra, Papel o Tijera (PHP)

Aplicación web interactiva desarrollada en PHP nativo utilizando una estructura modular (Vista - Controlador - Funciones).

## 🚀 Características
- **Interfaz dinámica**: Formulario dinámico que solicita el nombre del usuario y posteriormente deshabilita el campo (`readonly`) para seleccionar la jugada.
- **Elección aleatoria**: Simulación de la máquina mediante selección aleatoria con `array_rand()`.
- **Estructura modular**: Lógica de decisión separada en un archivo de funciones reutilizable (`functions.php`).
- **Reglas declarativas**: Determinación del ganador mediante un array asociativo con las reglas de combate y sus respectivos emojis.

## 📂 Estructura del Proyecto

```text
ProyectoPiedraPapelTijera/
├── pptvista01.php      # Vista inicial (Formulario de nombre y selección)
├── pptcontrol01.php    # Controlador (Procesamiento de datos y renderizado)
├── functions.php       # Funciones auxiliares y lógica del juego
└── README.md           # Documentación del proyecto
