#include<stdio.h>
#include<string.h>
#include<stdlib.h>
void GenerarArchivo();
void NumerosPares();
void NumerosPrimos();
int primo();
int main(){
    int todo[100];
    char nombre[100];
    char dest1[100];
     char dest2[100];
    int lon=0,lon2=0,lon3=0;
    FILE *archivo;
    printf("Ingresa EL nombre del archivo\n");
    scanf("%s",nombre);
    printf("Ingresa EL nombre del dest1\n");
    scanf("%s",dest1);
    printf("Ingresa EL nombre del dest2\n");
    scanf("%s",dest2);
    lon=strlen(nombre);
    lon2=strlen(dest1);
    lon3=strlen(dest2);
    nombre[lon]='.';
    nombre[lon+1]='t';
    nombre[lon+2]='x';
    nombre[lon+3]='t';
    dest1[lon2]='.';
    dest1[lon2+1]='t';
    dest1[lon2+2]='x';
    dest1[lon2+3]='t';
    dest2[lon3]='.';
    dest2[lon3+1]='t';
    dest2[lon3+2]='x';
    dest2[lon3+3]='t';
    printf("%i",lon);
    archivo=fopen(nombre,"w+t");
    fclose(archivo);
    for(int i=0;i<100;i++){

        todo[i]=rand()%100;

    }
    GenerarArchivo(nombre,todo);
    NumerosPares(nombre,todo,dest1);
    NumerosPrimos(nombre,todo,dest2);
}
void GenerarArchivo(char Arc[100],int Numeros[100]){
    FILE *otro;
    otro=fopen(Arc,"r+");
    int pase=0;
    int lon=0;
    char caracter[3];
    for(int i=0;i<99;i++){
        pase=Numeros[i];

        itoa(pase,caracter,10);

        lon=strlen(caracter);
        caracter[lon+1]='\n';
        fwrite(&caracter, sizeof(caracter), 2, otro);
    }
    fclose(otro);
}
void NumerosPares(char dos[100],int Numeros[100],char tex[100]){
    FILE *otro;
    FILE *pares;
    int numeros[100],a=0;
    char caracter[1000];
    char cambio[4],lo=0,hacer[100];
    int contar=0;
    int pare[100];
    int pa=0;
    int cam=0;
    int lon=0;
    int cont,pasos,temp;
    char s[2];
    int aux=0;
    for(int i=0;i<strlen(tex);i++){
        if(tex[i]=='.'){
            tex[i+4]=NULL;
        }
    }
    otro=fopen(dos,"r+");
    pares=fopen(tex,"w");
     while(feof(otro)==0){
        fgets(caracter,3,otro);
        lo+=1;
    }
    for(int i=0;i<100;i++){
        if(Numeros[i]%2==0 && Numeros[i]!=0){
            pare[pa]=Numeros[i];
            pa++;
        }
    }
	for(int i=1; i<pa; i++)
	{
		for(int j=0; j<pa-i; j++)
		{
			if(pare[j]>pare[j+1])
			{
			    aux    = pare[j+1];
				pare[j+1] = pare[j];
				pare[j]   = aux;
			}
		}
	}
    for(int i=0;i<pa;i++){
        cam=pare[i];
        itoa(cam,s,10);
        lon=strlen(s);
        s[lon]='\n';
        fwrite(&s, sizeof(s), 1, pares);
    }
    fclose(otro);
    fclose(pares);
}
void NumerosPrimos(char dos[1001],int Numeros[100],char tex2[100]){
    FILE *otro;
    FILE *primos1;
    int numeros[100],cont=0,a=0;
    char caracter[1000];
    char cambio[4],lo=0,hacer[100];
    int contar=0;
    int pare[100];
    int pa=0;
    int n=0;
    int bande=0;
    int cam=0;
    int lon=0;
    int aux=0;
    int x=0;
    char s[2];
    for(int i=0;i<strlen(tex2);i++){
        if(tex2[i]=='.'){
            tex2[i+4]=NULL;
        }
    }
    otro=fopen(dos,"r+");
    primos1=fopen(tex2,"w+");
    for(int i=0;i<100;i++){
        if(primo(Numeros[i])!=0)
        {
             pare[x]=primo(Numeros[i]);
             x++;
        }
    }
    for(int i=1; i<x; i++)
	{
		for(int j=0; j<x-i; j++)
		{
			if(pare[j]>pare[j+1])
			{
			    aux    = pare[j+1];
				pare[j+1] = pare[j];
				pare[j]   = aux;
			}
		}
	}
    for(int i=0;i<x;i++){
        printf("%i\n",pare[i]);
        cam=pare[i];
        itoa(cam,s,10);
        lon=strlen(s);
        s[lon]='\n';
        fwrite(&s, sizeof(s), 1, primos1);
    }
    fclose(otro);
    fclose(primos1);
}
int primo(int n){
    int a=0;
    for(int i=1;i<=n;i++){
        if(n%i==0) // si num1 módulo de i es 0, incrementamos a en 1.
        a++;
    }
    if(a==2){
        return n;
    }else{
        return 0;
    }
}

