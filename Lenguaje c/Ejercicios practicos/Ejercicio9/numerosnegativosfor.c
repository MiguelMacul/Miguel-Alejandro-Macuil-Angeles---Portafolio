#include<stdio.h>
int main(){
    float var=0;
    int pase=0;
    float promedio=0.00;
    float numeros[100];
    int j=0;
    for(;var>=0;){
        printf("Ingresa un numero\n");
        scanf("%f",&var);
        numeros[pase]=var;
        pase++;
    }
    pase=pase-1;
    for(int i=0;i<pase;i++){
        promedio+=numeros[i];
    }
    system("cls");
    j=0;
    printf("Los numeros son:\n");
    for(int i=0;i<pase;i++){
        printf("%f\n",numeros[i]);

    }
    printf("\nEl promedio es:%f",(promedio/(pase)));
    return 0;
}
