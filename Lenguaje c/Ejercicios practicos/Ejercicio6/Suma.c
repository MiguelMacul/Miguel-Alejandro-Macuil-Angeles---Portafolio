#include<stdio.h>
int suma(int Numeros1[100][100],int Numeros2[100][100],int T);
int suma(int Numeros1[100][100],int Numeros2[100][100],int T){
    int Total[100][100];
    for(int i=0;i<T;i++){
        for(int j=0;j<T;j++){
            Total[i][j]=Numeros1[i][j]+Numeros2[i][j];
        }
    }
    for(int i=0;i<T;i++){
        for(int j=0;j<T;j++){
            printf("%i",Total[i][j]);
        }
        printf("\n");
    }
    return 1;
}
