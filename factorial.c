#include<stdio.h>
int main()
{
	int n,i;
	unsigned fact = 1;
	printf("Enter an Integer: ");
	scanf("%d", &n);

	if(n<0)
		printf("Error! negative number");

	else
	{
		for(i = 1; i<=n; ++i)
		{
			fact *= i;
		}
		printf("Factorial of %d = %d", n, fact);
	}
	return 0;
}