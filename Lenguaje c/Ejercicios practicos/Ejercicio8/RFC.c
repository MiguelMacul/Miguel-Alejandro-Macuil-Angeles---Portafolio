#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>

int main(int argc, char *argv[]) {
	char nom[20],ap[20],am[20];
	int dia[2],mes[2],a[4];
	FILE *archivo;
	char caracter[100];
	int ba=0;
	printf("\t  Ingrese su nombre: \n");
	gets(nom);
	printf("\t  Ingrese su apellido Paterno: \n");
	gets(ap);
	printf("\t  Ingrese su apellido Materno:\n ");
	gets(am);
	printf("\t  Ingrese su dia de nacimiento (en 2 cifras; Separadas por un Enter): \n");
	scanf("%d %d",&dia[0],&dia[1]);
	printf("\t  Ingrese su mes de nacimiento (en 2 cifras):\n ");
	scanf("%d %d",&mes[0],&mes[1]);
	printf("\t  Ingrese su año de nacimiento (en 4 cifras):\n ");
	scanf("%d %d %d %d",&a[0],&a[1],&a[2],&a[3]);
	char rfc[5];
	archivo=fopen("C:/Users/Nery PM/Desktop/palabrasmal.txt","r");
	//rfc=
	rfc[0]=ap[0];
	rfc[1]=ap[1];
	rfc[2]=am[0];
	rfc[3]=nom[0];
	rfc[4]='\0';

	if(ap[0]=='ñ'||ap[0]=='Ñ')
	{
		ap[0]='x';
	}

	if(ap[1]=='b'||ap[1]=='c'||ap[1]=='d'||ap[1]=='f'||ap[1]=='g'||ap[1]=='h'||ap[1]=='j'||ap[1]=='k'||ap[1]=='l'||ap[1]=='m'||ap[1]=='n'||ap[1]=='p'||ap[1]=='q'||ap[1]=='r'||ap[1]=='s'||ap[1]=='t'||ap[1]=='v'||ap[1]=='w'||ap[1]=='x'||ap[1]=='y'||ap[1]=='z')
	{
		if(ap[2]=='a'||ap[2]=='e'||ap[2]=='i'||ap[2]=='o'||ap[2]=='u')
		{
			ap[1]=ap[2];
		}
		else{
			if(ap[3]=='a'||ap[3]=='e'||ap[3]=='i'||ap[3]=='o'||ap[3]=='u')
			{
				ap[1]=ap[3];
			}
			else
			{
				if(ap[4]=='a'||ap[4]=='e'||ap[4]=='i'||ap[4]=='o'||ap[4]=='u')
				{
					ap[1]=ap[4];
				}
				else
				{
					if(ap[5]=='a'||ap[5]=='e'||ap[5]=='i'||ap[5]=='o'||ap[5]=='u')
					{
						ap[1]=ap[5];
					}
					else
					{
						ap[1]='x';
					}
				}
			}
		}
	}
	if(nom[0]=='M'&&nom[1]=='A'&&nom[2]=='R'&&nom[3]=='I'&&nom[4]=='A'&&nom[6]>=65&&nom[6]<=90)
	{
		nom[0]=nom[6];
	}

	if(nom[0]=='m'&&nom[1]=='a'||nom[2]=='r'||nom[3]=='i'||nom[4]=='a'&&nom[6]>=65&&nom[6]<=90)
	{
		nom[0]=nom[6];
	}
	if(nom[0]=='M'&&nom[1]=='a'&&nom[2]=='.'&&nom[4]>=65&&nom[4]<=90)
	{
		nom[0]=nom[4];
	}

	if(nom[0]=='M'&&nom[1]=='a'&&nom[2]==32&&nom[3]>=65&&nom[3]<=90)
	{
		nom[0]=nom[3];
	}
	if(nom[0]=='J'&&nom[1]=='o'&&nom[2]=='s'&&nom[3]=='e'&&nom[5]>=65&&nom[5]<=90)
	{
		nom[0]=nom[5];
	}
	if(ap[0]=='D'&&ap[1]=='e'&&ap[2]==32&&ap[3]>=65&&ap[3]<=90&&ap[4]>=65&&ap[4]<=90)
	{
		ap[0]=ap[3];
		ap[1]=ap[4];
	}

	if(nom[0]=='J'&&nom[1]=='.'&&nom[3]>=65&&nom[3]<=90)
	{
		nom[0]=nom[3];
	}
	if(nom[0]=='J'&&nom[1]==32&&nom[2]>=65&&nom[2]<=90)
	{
		nom[0]=nom[2];
	}

	if(am[0]=='ñ')
	{
		am[0]='x';
	}
	/*if(am[0]==32||am[1]==32||am[2]==32||am[3]==32||am[4]==32||am[5]==32||am[6]==32||am[7]==32||am[8]==32||am[9]==32||am[10]==32||am[11]==32||am[12]==32||am[13]==32||am[14]==32||am[15]==32||am[16]==32||am[17]==32||am[18]==32||am[19]==32)
	{
	am[0]='x';
	}
	*/
	if(am[0]=='D'&&am[1]=='e'&&am[2]==' '&&am[3]=='L'&&am[4]=='a'&&am[5]==' '&&am[6]>=65&&am[6]<=90)
	{
		am[0]=am[6];
	}
	if (archivo==NULL)
		printf("el archivo no existe");
	else
		while(feof(archivo)==0)
	{
		fgets(caracter,5,archivo);
		if(strcmp(caracter,rfc)==0)
		{
			ba=1;
		}
	}
		if(ba==1)
		{
			ap[1]='X';
			printf("\t RFC: %c%c%c%c%d%d%d%d%d%d",ap[0],ap[1],am[0],nom[0],a[2],a[3],mes[0],mes[1],dia[0],dia[1]);
		}
		else{
			printf("\t RFC: %c%c%c%c%d%d%d%d%d%d",ap[0],ap[1],am[0],nom[0],a[2],a[3],mes[0],mes[1],dia[0],dia[1]);
		}
		fclose(archivo);
	return 0;
}

