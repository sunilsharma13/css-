#include<stdio.h>
int main()
{
	//Factors of a positive integer
	int number, i;
	printf("Enter a positive integer");
	scanf("%d",&number);
	for(i = 1 ; i <= number ; ++i)
	{
		if(number % i ==0)
			printf("%d ",i);
	}
	return 0;
}