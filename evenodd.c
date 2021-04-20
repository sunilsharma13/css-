#include<stdio.h>
int main()
{
	//check whether a number is Even or odd
	int number;
	printf("Enter a number");
	scanf("%d",&number);
	if(number%2 == 0) 
	{
		printf("number is even");
	}
	else
	{
		printf("number is odd");
	}
	return 0;
}