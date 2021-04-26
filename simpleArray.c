#include<stdio.h>
int main()
{
	int values[3];
	printf("Enter three Integers: ");

	for(int i =0 ; i<3 ;i++)
	{
		scanf("%d", &values[i]);
	}
	printf("Integers: ");

	for(int i = 0; i<3; i++)
	{
		printf("%d\n", values[i]);
	}
	return 0;
}