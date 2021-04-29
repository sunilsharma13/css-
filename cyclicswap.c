#include<stdio.h>
void cyclicswap(int *a, int *b , int *c);
int main()
{
	int a,b,c;

	printf("Enter three numbers: ");
	scanf("%d %d %d", &a, &b, &c);

	printf("values before swapping: \n");
	printf("a =%d \n, b = %d \n, c= %d \n", a,b,c);

	cyclicswap(&a, &b, &c);

	printf("Values after swapping: \n");
	printf("a =%d \n, b =%d \n, c =%d \n", a,b,c);

	return 0;
}
