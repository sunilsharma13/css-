#include<stdio.h>
int main()
{
	int i, x[5], sum=0;
	printf("Enter 5 numbers: ");
	for(i = 0; i<5 ; ++i)
	{
		scanf("%d", x+i);
		sum += *(x+i);
	}
	printf("Sum = %d", sum);
	return 0;
}