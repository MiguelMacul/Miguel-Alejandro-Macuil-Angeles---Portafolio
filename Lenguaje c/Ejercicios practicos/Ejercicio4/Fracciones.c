#include<stdio.h>
#include<stdlib.h>
int main(){
    int cantidad=0,iBase=0,aux=1,arriba1=0,arriba2=0,acumu1=1,acumu2=1,new1=0,new2,h=0;
    int i=1;
    printf("Ingresa la cantidad \n");
    scanf("%i",&cantidad);
    printf("La fracion\n");
    do{

        if(i==1){
            printf("1");
        }else{
            new1=1;
            new2=i;
            arriba1=acumu1*new2;
            arriba2=acumu2*new1;
            acumu1=(arriba1+arriba2);
            acumu2=(arriba2*i);
            printf("\n");
            printf("%i\n_\n%i",acumu1,acumu2);
        }
        i++;
    }while(i<=cantidad);
    system("pause");
    system("cls");
     printf("%i\n_\n%i",acumu1,acumu2);
    return 0;
}
