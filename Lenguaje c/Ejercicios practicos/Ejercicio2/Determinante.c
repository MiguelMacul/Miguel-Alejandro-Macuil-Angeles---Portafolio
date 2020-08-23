#include<stdio.h>
void Determinante(int Numeros1[100][100],int Numeros2[100][100],int T);
void Determinante(int Numeros1[100][100],int Numeros2[100][100],int T){
    int opc=0;
    int Tempora[100];
    int Pivote=0,p=0,h=0;
    printf("Selecciona la matriz a la cual se desea obtener la determiante\n1.- Matriz numero 1\n2.- Matriz numero dos");
    scanf("%i",&opc);

    if(opc==1){
        Pivote=Numeros1[0][0];
            for(int i=0;i<=T-2;i++){
                for(int j=1;j<=T-1;j++){
                    printf("%i    -   %i = %i",(Numeros1[p][p] *Numeros1[i+1][j]),(Numeros1[i+1][j-1]*Numeros1[i][j]),((Numeros1[p][p]*Numeros1[i+1][j])-(Numeros1[i+1][j-1]*Numeros1[i][j])));
                    printf("\n");
                    Tempora[h]=((Numeros1[p][p]*Numeros1[i+1][j])-(Numeros1[i+1][j-1]*Numeros1[i][j]));
                    h++;
                }
        }
    }
    printf("\n");
    for(int i=0;i<h;i++){
        printf(" %i ",Tempora[i]);
    }
}
