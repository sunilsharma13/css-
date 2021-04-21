#include<stdio.h>
int main()
{
	//Program to check Leap year or not
	int year;
	printf("Enter a year");
	scanf("%d",&year);
	if(year%4 == 0) 
	{
		printf("%d is a leap year",year);
	}
	else
	{
		printf("%d is not a leap year",year);
	}
	return 0;
}