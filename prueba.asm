.data
columnas: .word 64
posX: .word 30
posY: .word 31
.text
CalcularCoordenadas:
lw $a0, posX
add $a0, $a0, 1
#li $a0, 31 #x
li $a1, 31 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 32 #x
li $a1, 31 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 31 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 35 #x
li $a1, 31 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 30 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 31 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 32 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 33 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 35 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 36 #x
li $a1, 32 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel



li $a0, 30 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 31 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 32 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 33 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 35 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 36 #x
li $a1, 33 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel





li $a0, 31 #x
li $a1, 34 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 32 #x
li $a1, 34 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 33 #x
li $a1, 34 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 34 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 35 #x
li $a1, 34 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000    #(0-254) FF maximo
jal DibujarPixel




li $a0, 31 #x
li $a1, 35 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $a0, 32 #x
li $a1, 35 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 33 #x
li $a1, 35 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 35 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 35 #x
li $a1, 35 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000    #(0-254) FF maximo
jal DibujarPixel







li $a0, 32 #x
li $a1, 36 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000    #(0-254) FF maximo
jal DibujarPixel

li $a0, 33 #x
li $a1, 36 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFFAAAA     #(0-254) FF maximo
jal DibujarPixel

li $a0, 34 #x
li $a1, 36 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel



li $a0, 33 #x
li $a1, 37 #y
jal CalcularCoordenadas
move $a0, $v0 #Muevo la direccion de memoria de las coordenadas
li $a1, 0xFF0000     #(0-254) FF maximo
jal DibujarPixel

li $v0, 10
syscall
