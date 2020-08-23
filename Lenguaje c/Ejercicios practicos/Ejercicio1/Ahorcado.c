#include "stdio.h"
#include "stdlib.h"
#include "string.h"
#include "time.h"



int main() {

	srand(time(NULL));

	char adiv [] [16] = {

			"misantropia",
			"hipofisis",
			"hipotalamo",
			"ventriculo",
			"esclerosis",
			"necrosis",
			"isquemia",
			"filantropia",
			"epilepsia",
			"distancia",
	};


	int randomIndex = rand() %10;

	int nvidas = 5;
	int numCorrect = 0;
	int oldCorrect = 0;

	int palabra = strlen(adiv[randomIndex]);//calcula el numero de caracteres


	int letra[20] = { 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0 };

	int quit = 0;

	int l = 0;
	int regis = 0;

	char a[16];
	char i;	//letra para ingresar


	while ( numCorrect < palabra ) {

		printf("\n\n Bienvenido....\n Tu palabra es :");

		for( l = 0; l < palabra; l++) {

			if(letra[l] == 1) {
				printf("%c",adiv[randomIndex][l]);
			} else {
				printf("-");
			}

		}

		printf("\n");

		printf(" letras adivinadas :%d\n",numCorrect);
		printf("introduce una letra:");
		fgets(a, 16, stdin);//Esta función lee como máximo uno menos que el número de caracteres indicado por n desde el stream, stdin sustituye getchar

		if( strncmp(a, "quit", 4) == 0) {//Compara no más de n caracteres
			quit = 1;
			break;
		}

		i= a[0];
		regis = 0;

		printf("letra introducida:%c\n",i);

		oldCorrect = numCorrect;

		for( l = 0; l < palabra; l++) {

			if(letra[l] == 1) {
				if(adiv[randomIndex][l] == i) {
					regis = 1;
					break;
				}
				continue;
			}

			if( l == adiv[randomIndex][l] ) {
				letra[l] = 1;
				numCorrect++;
			}

		}

		if( oldCorrect == numCorrect && regis == 0) {
			nvidas--;
			printf("Incorrecta\n");
			if (nvidas == 0) {
				break;
			}
		} else if( regis == 1) {
			printf("Has adivinado!!\n");
		} else {
			printf("Adivinaste :)\n");
		}

	}

	if( quit == 1 ) {
		printf("\nestas durmiendo\n");
	} else if (nvidas == 0) {
		printf("\nPerdiste, la palabra es: %s\n",
		adiv[randomIndex]);
	} else  {
		printf("\nGANASTE!!! :)\n");
	}


	return 0;
}


