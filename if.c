#include<stdio.h>
int main ()
{
	int number;

	printf("Enter an Integer: ");
	scanf("%d", &number);

	if(number<0)
	{
		printf("You Entered %d \n", number);
	}
	printf("The if statement is easy.");

	return 0;
}