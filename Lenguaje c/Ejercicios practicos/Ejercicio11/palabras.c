#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>

int main(int argc, char *argv[]){
    FILE *archivo;
    char caracteres[100];
    archivo=fopen("palabrasmal.txt","r");
    while (feof(archivo) == 0)
    {
 		fgets(caracteres,100,archivo);
 		printf("%s",caracteres);
    }





     return (0);
}
