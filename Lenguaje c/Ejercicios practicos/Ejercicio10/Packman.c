#include<stdio.h>
#include<stdlib.h>
void main(){
    FILE *archivo;
    int j=0;
    int puntos=0;
    int total=0;
    int bandera=1;
    char caracter[100];
    int x=1,y=1;
    archivo=fopen("pac.txt","r");
    char matri[600][600];
    char cTecla;
    while(feof(archivo)==0)
        {
            fgets(caracter,100,archivo);
            for(int i=0;i<56;i++){
               matri[j][i]=caracter[i];
            }
            j++;
        }

    matri[x][y]=':V';
    printf("\n");
    for(int i=0;i<j;i++){
        for(int s=0;s<56;s++){
               if(matri[i][s]=='*'){
                    puntos+=1;
               }
        }
    }
    printf("\n%i\n",puntos);
    do{
        for(int i=0;i<j;i++){
            for(int s=0;s<56;s++){
                printf("%c",matri[i][s]);
            }
            printf("\n");
        }

           cTecla = getch();
           if(cTecla == 0)
               cTecla = getch();
           else
               switch(cTecla)
               {
                case 72:

                        system("cls");
                        matri[x][y]=' ';
                        x-=1;
                     if( matri[x][y]=='|' ||  matri[x][y]=='_'){
                        printf("\nTe has estreñado perdiste\n");
                        bandera=0;
                     }else{
                         if(matri[x][y]=='*'){
                           total+=1;
                        }
                        matri[x][y]='V';

                     }

                break;

                case 80:
                        system("cls");
                         matri[x][y]=' ';
                         x+=1;
                     if( matri[x][y]=='|' ||  matri[x][y]=='_'){
                        printf("\nTe has estreñado perdiste\n");
                        bandera=0;
                     }else{
                         if(matri[x][y]=='*'){
                           total+=1;
                        }
                         matri[x][y]='V';
                     }

                break;

                case 75:
                        system("cls");
                         matri[x][y]=' ';
                         y-=1;
                     if( matri[x][y]=='|' ||  matri[x][y]=='_'){
                        printf("\nTe has estreñado perdiste\n");
                        bandera=0;
                     }else{
                          if(matri[x][y]=='*'){
                           total+=1;
                        }
                         matri[x][y]='V';
                     }

                break;

                case 77:
                        system("cls");

                         matri[x][y]=' ';
                         y+=1;

                     if( matri[x][y]=='|' ||  matri[x][y]=='_'){
                        printf("\nTe has estreñado perdiste\n");
                        bandera=0;
                     }else{
                             if(matri[x][y]=='*'){
                           total+=1;
                        }
                         matri[x][y]='V';
                     }

                break;
                }
                 printf("\n%i\n",total);
            printf("\n");
            if(total==puntos){
                system("cls");
                bandera=0;
                printf("\nhas ganado\n");
            }
    }while(bandera!=0);

}
