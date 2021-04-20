#include<stdio.h>
int main()
{
	//greatest of two numbers
	int a,b;
	printf("enter two numbers: ");
	scanf("%d%d",&a,&b);
	if (a>b)
	{
		printf("%d is greater",a);
	}
	else 
	{
		printf("%d is greater",b);
	}
	return 0;
}