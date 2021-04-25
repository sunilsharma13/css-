#include<stdio.h>
int main()
{
	double first, second,temp;
	printf("Enter two numbers");
	scanf("%lf %lf", &first,&second);
	temp = first;
	first = second;
	second = temp;
	printf("first number = %lf", first);
	printf("second number = %lf", second);
	return 0;
}