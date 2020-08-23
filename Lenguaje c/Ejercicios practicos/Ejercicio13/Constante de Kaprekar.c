#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(){
   char Numero[5];
   int N[4];
   int N2[4];
   int d=0;
   char pase[2];
   int numero1=0,numero2=0,total=0,resultado[100];
   int aux=0;
   int p=0;
   int c=0;
   int i=0,j=0;
   int q=0,cantidad=0;
   printf("Ingresa la cantidad de numeros a calcular\n");
   scanf("%i",&cantidad);
   for(d=0;d<cantidad;d++){
      printf("Ingresa el numero\n");
      scanf("%s",Numero);
      c=0;
      total=atoi(Numero);
      while(total!=6174){
         for(i=0;i<4;i++){
            pase[0]=Numero[i];
            N[i]=atoi(pase);
         }
         numero1=numero2=aux=0;
         for(i=1;i<4;i++){
            for(j=0;j<4-1;j++){
               if(N[j]<N[j+1]){
                  aux=N[j+1];
                  N[j+1]=N[j];
                  N[j]=aux;
               }
            }
         }
         p=3;
         for(i=0;i<4;i++){
            N2[i]=N[p];
            p--;
         }
         for(i=0;i<4;i++){
            if(i==0){
               numero1+=N[i]*1000;
               numero2+=N2[i]*1000;
            }
            if(i==1){
               numero1+=N[i]*100;
               numero2+=N2[i]*100;
            }
            if(i==2){
               numero1+=N[i]*10;
               numero2+=N2[i]*10;
            }
            if(i==3){
               numero1+=N[i]*1;
               numero2+=N2[i]*1;
            }
         }
         for(i=0;i<4;i++){
            N2[i]=N[i]=0;
         }
         total=numero1-numero2;
         printf("\n %i - %i = %i",numero1,numero2,total);
         c++;
      
         itoa(total,Numero,10);
      }
      resultado[q]=c;
      q++;
   }
   for(i=0;i<cantidad;i++){
      printf("\n %i ",resultado[i]);
   }
   return 0;
}
