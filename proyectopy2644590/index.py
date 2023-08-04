import math

print("hola mundo con python")
nombre = "Miller Rivera"
print(f"su nombre es {nombre}")
print("su nombre es ",nombre)



numero = int(input("ingrese un numero "))


print("ejerccio numero 1")
print("")

if numero == 0 :
    print(f"el numero es cero {numero}")
elif (numero > 0) :
    print(f"el numero {numero} es postivo")
elif (numero < 0) :
    print(f"el numero {numero} es negativo")


print("ejerccio numero 2")
print("")

nota1 = float(input("ingrese una nota 1 "))
nota2 = float(input("ingrese una nota 2 "))
nota3 = float(input("ingrese una nota 3 "))



resultadomaterias = (nota1 + nota2 + nota3) / 3

print(resultadomaterias)

if resultadomaterias < 3.5 :
            print(f"Usted reprobo la materia con ${resultadomaterias}")
elif resultadomaterias >= 3.5 :
            print(f"Usted aprobo la materia con ${resultadomaterias}")

print("ejerccio numero 3")
print("")

catetoUno = float(input("ingrese un cateto A"))
catetoDos = float(input("ingrese un cateto B"))

sumaResult = catetoUno **2 + catetoDos**2

h = math.sqrt(sumaResult)

print(f"el resulatdo del hipotenusa {h}")

print("ejerccio numero 4")
print("")

edad = (input("ingrese su edad"))
if edad < 0:
      ("edad invalido")
elif  edad <= 12 :
      print(f"su edad es{edad} y usted es un NIÑO")
elif edad <= 21 :
     print(f"su edad es{edad} y usted es un ADOLECENTE")
elif edad <= 31 :
    print(f"su edad es{edad} y usted es un JOVEN")
elif edad <= 60 :
    print(f"su edad es{edad} y usted es un ADULTO")
else :
     print(f"su edad es{edad} y usted es un ADULTO MAYOR")
