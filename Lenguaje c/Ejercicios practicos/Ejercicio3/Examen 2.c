#include<stdio.h>
int main(){
    int n=0,pase=0, matriz[100][100],datos[100],algo[100],arra[5],mas[1000],tres[1000],hola[1000];
    printf("Ingresa la cantidad de sucursales");
    scanf("%i",&n);

    for(int i=0;i<n;i++){
        printf("Sucursal numero %i \n",i+1);
        for(int j=0;j<4;j++){
            printf("ingresa las ventas de esta semana %i",j+1);
            scanf("%i",&pase);
            matriz[i][j]=pase;
        }
    }
    printf("\n");
    printf("        ");

    for(int i=0;i<4;i++){
        printf("   semana %i ",i+1);
        if(i==3){
                printf("  Posucursal");
                printf("   P mensual  ");
        }
    }
    printf("\n");
    int psuccursal=0,total=0,tar=0;
    int c=0,promedio=0,suma=0,yolo=0;
    int semanas1[1000],semanas2[1000],semanas3[1000],semanas4[1000];
    float cal=0;
    for(int i=0;i<n;i++){
        printf("Sucursal %i",i+1);

        for(int j=0;j<4;j++){
            printf("      %i     ",matriz[i][j]);
            psuccursal+=matriz[i][j];
            if(j==3){
                total=psuccursal;
                total+=psuccursal=(psuccursal/4)+1;
                tres[i]=mas[i]=total-1;
                printf("      %i     ",psuccursal);
                printf("      %i     ",total-1);
                psuccursal=0;
            }
        }
        printf("\n");
    }
    semanas1[0]=0;
    tar=0;
     printf("Promedio S:  ");
    for(int i=0;i<n;i++){
        for(int j=0;j<4;j++){
            if(j==0){
                semanas1[0]+=matriz[i][j];
            }
        }
    }
    for(int i=0;i<n;i++){
        for(int j=0;j<4;j++){
            if(j==1){
                semanas1[1]+=matriz[i][j];
            }
        }
    }
     for(int i=0;i<n;i++){
        for(int j=0;j<4;j++){
            if(j==2){
                semanas1[2]+=matriz[i][j];
            }
        }
    }
    for(int i=0;i<n;i++){
        for(int j=0;j<4;j++){
            if(j==3){
                semanas1[3]+=matriz[i][j];
            }
        }
    }

    printf("     %i      ",semanas1[0]/n);
    printf("    %i      ",semanas1[1]/n);
    printf("    %i      ",semanas1[2]/n);
    printf("    %i      ",semanas1[3]/n);
    printf("\n");
    hola[0]=semanas1[0]=(semanas1[0]/n)+semanas1[0];
    hola[1]=semanas1[1]=(semanas1[1]/n)+semanas1[1];
    hola[2]=semanas1[2]=(semanas1[2]/n)+semanas1[2];
    hola[3]=semanas1[3]=(semanas1[3]/n)+semanas1[3];
    printf("porcentajeS:    %i      ", semanas1[0]);
    printf("    %i      ", semanas1[1]);
    printf("    %i      ", semanas1[2]);
    printf("    %i      ", semanas1[3]);
    int aux=0;
    for(int i=0;i<n;i++){
        for(int j=i;j<n;j++){
            if(tres[i]>tres[j]){
                aux=tres[i+1];
                tres[i+1]=tres[i];
                tres[i]=aux;
            }
        }
    }
    aux=0;
    for(int i=0;i<4;i++){
        for(int j=i;j<4;j++){
            if(semanas1[i]>semanas1[j]){
                aux=semanas1[i+1];
                semanas1[i+1]=semanas1[i];
                semanas1[i]=aux;
            }
        }
    }
    printf("\n");
     for(int i=0;i<n;i++){
        if(tres[n-1]==mas[i]){
            printf("Sucursales con mayores ventas:");
            printf(" %i \n",i+1);
            break;
        }
    }

     for(int i=0;i<n;i++){
        if(tres[0]==mas[i]){
            printf("Sucursales con menores ventas:");
            printf(" %i \n",i+1);
            break;
        }
    }
    printf("\n");
     for(int i=0;i<4;i++){
            if(semanas1[3]==hola[i]){
                printf("Sucursales con mayor ventas:");
                printf(" %i \n",i+1);
                break;
            }
    }
    printf("\n");
     for(int i=0;i<4;i++){
        if(semanas1[0]==hola[i]){
            printf("semana con menores ventas:");
            printf(" %i \n",i+1);
            break;
        }
    }
    int mayor=0;
    for(int i=0;i<n;i++){
        for(int j=i;j<4;j++){
           if(matriz[i][j]>mayor){
                mayor=matriz[i][j];
           }
        }
    }
    printf("\n");
    for(int i=0;i<n;i++){
        for(int j=i;j<4;j++){
           if(matriz[i][j]==mayor){
                printf("La sucursal de mayores ventas en alguna semnas es: sucursal %i",i+1);
           }
        }
    }

}

