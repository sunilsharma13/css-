#include<stdio.h>
int main()
{
	char name[25];
	printf("Enter name: ");
	fgets(name, sizeof(name), stdin);
	printf("Name: ");
	puts(name);
	return 0;
}