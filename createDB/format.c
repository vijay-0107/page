#include <stdio.h>
#include <stdlib.h>

void main(){
	FILE * input, *output;
	char in[200], out[200];
	int i, j=0;
	char x;
	input = fopen("../intern", "r");
   output = fopen ("output.txt", "w+");
   while(fgets(in, 255, (FILE*)input)){
   	for(i=0, j=0;in[i]!='\0';i++){
   		x = in[i];
   		if(in[i]==' '){
   			if(47<in[i-1] && in[i-1]<59){
   				x = '-';
   			}
   		}
   		out[j]=x;
   		j++;
   	}
   	fputs(out, (FILE*)output);	
   }
   
   fclose(input);
   fclose(output);
}