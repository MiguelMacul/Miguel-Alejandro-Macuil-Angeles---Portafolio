#include<stdio.h>
#include"Suma.c"
#include"Resta.c"
#include"Multiplicacion.c"
#include"Determinante.c"
int main(){
    int Matriz1[100][100],Matriz2[100][100],n=0;
    printf("Ingresa el tamaño de las matrices\n");
    scanf("%i",&n);
    printf("primera matriz\n");
    for(int i=0;i<n;i++){
        for(int j=0;j<n;j++){
            printf("Ingresa un elemento\n");
            scanf("%i",&Matriz1[i][j]);
        }
    }/*
    printf("Segunda matriz\n");
    for(int i=0;i<n;i++){
        for(int j=0;j<n;j++){
            printf("Ingresa un elemento\n");
            scanf("%i",&Matriz2[i][j]);
        }
    }*/
    int opc=0;
    printf("Menu de matrices \n1.-Suma\n2.-Resta\n3.- Multiplicacion\n4.-Determinante");
    scanf("%i",&opc);
    switch(opc){
        case 1:
             suma(Matriz1,Matriz2,n);
        break;
        case 2:
            resta(Matriz1,Matriz2,n);
        break;
        case 3:
            multiplicacion(Matriz1,Matriz2,n);
        break;
        case 4:
            Determinante(Matriz1,Matriz2,n);
        break;
        default:
             printf("\nError opcion invalida hasta luego");
        break;
    }

    return 0;
}
