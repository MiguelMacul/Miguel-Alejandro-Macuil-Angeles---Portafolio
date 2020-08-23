#include<stdio.h>
int moda(int arra[], int n);
int mediana(int arra[], int n);
int media(int arra[], int n);
int main(){
    int Tama=0;
    int arreglo[100];
    printf("Ingresa la cantidad de numeros");
    scanf("%i",&Tama);
    for(int i=0;i<Tama;i++){
        printf("Ingresa el numero %i\n",(i+1));
        scanf("%i",&arreglo[i]);
    }
    moda(arreglo,Tama);
    mediana(arreglo,Tama);
    media(arreglo,Tama);
}
int moda(int arra[], int n){
     int aux=0,conteo=0,dos=0,pase=0;
    int otro[100];
    printf("\n");
    for(int i=1;i<n;i++){
        for(int j=0;j<n-1;j++){
            if(arra[j]>arra[j+1]){
                aux=arra[j];
                arra[j]=arra[j+1];
                arra[j+1]=aux;
            }
        }
    }
    for(int i=0;i<n;i++){

        if(arra[i]==arra[i+1]){
           pase+=1;
        }else{
            otro[dos]=pase+1;
            pase=0;
            dos++;
        }

    }
    int mayor=0;
    int mediana=0;
    for(int i=0;i<dos;i++){
        if(otro[i]>mayor){
            mayor=otro[i];
        }
    }

    for(int i=0;i<n;i++){

        if(arra[i]==arra[i+1]){
           pase+=1;
        }else{
            otro[dos]=pase+1;
            if(otro[dos]==mayor){
                mediana=arra[i];
            }
            pase=0;
            dos++;
        }

    }
    int bandera=0;
     for(int i=0;i<dos;i++){
        if(otro[i]==mayor){

        }else
            bandera=1;
    }
    if(bandera==1){
        printf("\n\nla moda es:%i ",mediana);
    }else{
        printf("\n\nNo existe moda alguna");
    }

    return 0;
}
int mediana(int arra[], int n){
    int aux=0;
    for(int i=1;i<n;i++){
        for(int j=0;j<n-1;j++){
            if(arra[j]>arra[j+1]){
                aux=arra[j];
                arra[j]=arra[j+1];
                arra[j+1]=aux;
            }
        }
    }
    if(n%2==0){
          int suma=0;
          int uno=(n/2)-2,dos=(n/2)-1;
          suma=arra[uno]+arra[dos];
          suma=suma/2;
          printf("\n\n la mediana es :%i",suma);
    }else{
        n=n/2;
        printf("\n\n la mediana es :%i",arra[n]);
    }
    return 0;
}
int media(int arra[], int n){
     int total=0;
    for(int i=0;i<n;i++){
        total+=arra[i];
    }
    printf("\n\nCalculo de media\n");
    printf("La media es:%i",(total)/n);
    return 0;
}
